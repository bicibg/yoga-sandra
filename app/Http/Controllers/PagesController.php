<?php

namespace App\Http\Controllers;

use App\ContactUs;
use App\Http\Requests\CreateContactUsRequest;
use App\Http\Requests\UpdatePageRequest;
use App\Jobs\SendEmailJob;
use App\Page;
use Illuminate\Database\Migrations\Migrator;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
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

    public function maintenance()
    {
        return view('maintenance');
    }

    public function action($action)
    {

        switch ($action) {
            case 'clear-cache':
                Artisan::call('cache:clear');
                session()->flash('maintenance_success', Artisan::output());
                break;
            case 'clear-view':
                Artisan::call('view:clear');
                session()->flash('maintenance_success', Artisan::output());
                break;
            case 'config-cache':
                Artisan::call('config:cache');
                session()->flash('maintenance_success', Artisan::output());
                break;
            case 'route-cache':
                Artisan::call('route:cache');
                session()->flash('maintenance_success', Artisan::output());
                break;
            case 'migrate':
                Artisan::call('db:backup');
                Artisan::call('migrate', [
                    '--force' => true,
                ]);
                session()->flash('maintenance_success', Artisan::output());
                break;
            case 'rollback':
                Artisan::call('db:backup');
                Artisan::call('migrate:rollback', [
                    '--force' => true,
                ]);

                $hasRun = DB::table('migrations')->where('migration', '2019_06_21_185032_create_jobs_table')->exists();

                if (!$hasRun) {
                    Artisan::call('migrate', [
                        '--force' => true,
                        '--step' => 39,
                        '--seed' => true
                    ]);
                    session()->flash('maintenance_success', Artisan::output() . ' Rollback caused a database reset resulting a data loss. Automatically performed initial migrations and seeded the database.');
                } else {
                    session()->flash('maintenance_success', Artisan::output());
                }
                break;
            case 'seed':
                $latest = DB::table('migrations')->latest('id')->first();
                if(!empty($latest) && $latest->migration !== '2019_06_21_185032_create_jobs_table') {
                    Artisan::call('db:backup');
                    Artisan::call('db:seed');
                    session()->flash('maintenance_success', Artisan::output());
                } else {
                    session()->flash('maintenance_success', 'Cannot seed');
                }
                break;
            case 'backup':
                Artisan::call('db:backup');
                session()->flash('maintenance_success', Artisan::output());
                break;
            case 'queue-work':
                Artisan::call('queue:work');
                session()->flash('maintenance_success', Artisan::output());
                break;
            case 'queue-restart':
                Artisan::call('queue:restart');
                session()->flash('maintenance_success', Artisan::output());
                break;
            case 'up':
                Artisan::call('up');
                session()->flash('maintenance_success', Artisan::output());
                break;
            case 'down':
                Artisan::call('down');
                session()->flash('maintenance_success', Artisan::output());
                break;
            case 'give-me-cookie':
                Cookie::make('secret-cookie', 'secret-cookie-for-admin', 60 * 24 * 30);
                session()->flash('maintenance_success', '<div class="text-center">&#x1f36a;</div>');
                break;
            default:
                session()->flash('maintenance_error', 'Unknown command ' . '(' . $action . ')');


        };
        return redirect()->back();

    }
}
