<?php

namespace App\Http\Livewire\Admin\Bookings;

use App\Models\Booking;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.bookings.index',[
            'bookings'=>Booking::orderBy('id', 'DESC')->get()
        ]);
    }
}
