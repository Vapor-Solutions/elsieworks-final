<?php

namespace App\Http\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class Index extends Component
{
    public $services;

    protected $listeners = [
        'deleted'=>'mount'
    ];

    public function mount()
    {
        $this->services = Service::all();
    }

    public function delete($id)
    {
        Service::find($id)->delete();
        $this->emit('deleted');
    }
    public function render()
    {
        return view('livewire.admin.services.index');
    }
}
