<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use App\Http\Requests\CreateContactUsRequest;
use App\Models\Page;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function show(Page $page)
    {
        return view($page->template ?? 'pages.show', compact('page'));
    }

    public function home()
    {
        $page = Page::firstOrFail();
        $pages = Page::all();
        return view('pages.show', compact('page', 'pages'));
    }

    public function contact(CreateContactUsRequest $request)
    {
        // Save to the database
        ContactUs::create($request->only('name', 'email', 'message'));

        // Send the email
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'messageContent' => $request->message,
        ];

        Mail::send('emails.email', $data, function ($message) {
            $message->to(env('MAIL_TO', 'info@sothegra.ch'))
                ->from('info@sothegra.ch', 'Yoga Emmental')
                ->subject('Neue Nachricht von yogaemmental.ch');
        });

        // Redirect back with a success message
        return back()->with('success', 'Ihre Nachricht wurde erfolgreich gesendet!');
    }
}
