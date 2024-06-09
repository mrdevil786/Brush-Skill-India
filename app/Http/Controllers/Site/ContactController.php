<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('site.contact');
    }

    public function sendContact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:10',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $contact = Contact::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ]);

        $emailData = $contact->toArray();

        Mail::to('suhailsaeedme@gmail.com')->send(new ContactFormMail($emailData));

        return redirect()->back()->with('success', 'Contact form submitted successfully.');
    }
}
