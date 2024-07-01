<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{

    public function sendContactEmail(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
            'subject' => 'required|string',
        ]);


        $details = [
            // 'greeting' => 'Hello!',
            // 'firstline' => 'You have received a new contact message.',
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'subject' => $request->subject,
            // 'button' => 'Visit Website',
            // 'url' => url('/'),
            'lastline' => 'Thank you for getting in touch!',
        ];

        Mail::to(config('mail.from.address'))->send(new Contact($details));

        Alert::success('Success', 'your message is sent successfully!!!');
        return redirect()->back();
    }
}
