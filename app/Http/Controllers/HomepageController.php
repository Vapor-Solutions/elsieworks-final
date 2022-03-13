<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function addContact(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'phone_number'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required',

        ]);

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone_number = $request->phone_number;
        $contact->subject = $request->subject;
        $contact->message = $request->message;

        $contact->save();

        return redirect()->route('home')->with('success', 'Successfully Submitted! You will be contacted shortly');
    }
}
