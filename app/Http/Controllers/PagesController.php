<?php

namespace App\Http\Controllers;

use App\ContactUs;
use App\Http\Requests\CreateContactUsRequest;
use App\Http\Requests\UpdatePageRequest;
use App\Jobs\SendEmailJob;
use App\Page;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;


class PagesController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth'])->except(['show', 'home', 'contact']);
    }

    public function index()
    {
        return view('pages.index', [
            'pages' => Page::all(),
        ]);
    }

    public function show(Page $page)
    {
        if ($page->template) {
            return view($page->template)->withPage($page);
        }
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
        if (!empty($data['content'])) {
            $dom = new \DomDocument('1.0', 'UTF-8');
            $dom->loadHtml($data['content'], LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $data['content'] = $dom->savehtml();
        }
        $page->update($data);

        session()->flash('success', 'Updated page successfully');
        return redirect(route('pages.index'));
    }

    public function contact(CreateContactUsRequest $request)
    {
        $mail = array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'message' => $request->get('message')
        );
        ContactUs::create($mail);
        dispatch(new SendEmailJob($mail));


        session()->flash('success', 'Ihre nachricht wurde geschickt');

        return redirect()->back();
    }

    public function messages()
    {
        return view('messages')->withMessages(ContactUs::all());
    }

    public function maintenance(){
        return view('maintenance');
    }

    public function action($action)
    {
        switch($action){
            case 'clear-cache':
                Artisan::call('cache:clear');
                session()->flash('success', Artisan::output());
                return redirect()->back();
            case 'migrate':
                Artisan::call('migrate', [
                    '--force' => true,
                ]);
                session()->flash('success', Artisan::output());
                return redirect()->back();
            case 'rollback':
                Artisan::call('migrate:rollback', [
                    '--force' => true,
                ]);
                session()->flash('success', Artisan::output());
                return redirect()->back();
            case 'backup':
                Artisan::call('db:backup');
                session()->flash('success', Artisan::output());
                return redirect()->back();

        };
    }
}
