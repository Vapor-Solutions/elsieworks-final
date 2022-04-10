<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Client;
use Illuminate\Http\Request;

class BookingsController extends Controller
{
    public function book(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'nullable|email',
            'phone_number' => 'required',
            'booking_time' => 'required',
        ]);

        $booking = new Booking();

        // dd($request);
        if (isset($request->email)) {
            if (Client::where('email', $request->email)->exists()) {
                $client = Client::where('email', $request->email)->first();
            } else {
                $client = new Client();
                $client->name = $request->name;
                $client->email = $request->email;
                $client->phone_number = $request->phone_number;
                $client->save();
            }
        }

        $booking->client_id = $client->id;
        $booking->rate_id = $id;
        $booking->booking_time = $request->booking_time;
        $booking->special_requests = $request->special_requests ?? null;
        $booking->save();

        return redirect()->route('home')->with('success', "Thank you very much for choosing ElsieWorks! We have received your booking request. Someone will be in contact with you soon!");

    }
}
