<?php

namespace App\Http\Livewire\Admin\Rates;

use App\Models\Rate;
use Livewire\Component;

class Index extends Component
{

    public function render()
    {
        return view('livewire.admin.rates.index',[
            'rates'=>Rate::all()
        ]);
    }
}
