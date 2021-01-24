<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;

class ContactController extends Controller
{
    public function store(Request $request){

        request()->validate([
            'message' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
        ]);

        $contact = new Contact;

        $contact->message = request('message');
        $contact->name = request('name');
        $contact->email = request('email');
        $contact->subject = request('subject');

        $contact->save();

        return redirect('/contact')->with('success','Message Sent Successfully');

    }
}
