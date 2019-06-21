<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth'])->only(['edit', 'update']);
    }

    public function index()
    {
        return view('pages.index', [
            'pages' => Page::all()
        ]);
    }

    public function show(Page $page)
    {
        //
    }

    public function edit(Page $page)
    {
        return view('pages.edit')->withPage($page);
    }

    public function update(Request $request, Page $page)
    {
        $data = $request->only(['title', 'content']);

        $page->update($data);

        session()->flash('success', 'Updated page successfully');
        return redirect(route('pages.index'));
    }
}
