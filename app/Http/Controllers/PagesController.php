<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePageRequest;
use App\Page;
use Illuminate\Support\Str;


class PagesController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth'])->only(['edit', 'update']);
    }

    public function index()
    {
        return view('pages.index', [
            'pages' => Page::all(),
        ]);
    }

    public function show(Page $page)
    {
        return view('pages.show')->withPage($page);
    }

    public function home()
    {
        return view('pages.show')->withPage(Page::firstOrFail());
    }

    public function edit(Page $page)
    {
        return view('pages.edit')->withPage($page);
    }

    public function update(UpdatePageRequest $request, Page $page)
    {
        $data = $request->only(['title', 'content', 'image']);
        if ($request->hasFile('image')) {
            $page->deleteImage();
            $image = $request->image->store('pages');
            $data['image'] = $image;
        }

        $data['slug'] = Str::slug($data['title']);
        $page->update($data);

        session()->flash('success', 'Updated page successfully');
        return redirect(route('pages.index'));
    }
}
