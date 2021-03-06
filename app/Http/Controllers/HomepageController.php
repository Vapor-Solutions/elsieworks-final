<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use App\Mail\NewContactsMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

        dispatch(new SendEmailJob($contact));

        return response()->json([
            'success'=>"Successfully Submitted! You will  be contacted Shortly"
        ]);


    }
}
