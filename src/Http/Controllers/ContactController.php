<?php

namespace ankit\contact\Http\Controllers;

use App\Http\Controllers\Controller;

use ankit\contact\Models\Contact;

use ankit\contact\Mail\ContactMailable;

use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
       Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->name));
        Contact::create($request->all());
        return redirect()->route('contact');
    }
}
