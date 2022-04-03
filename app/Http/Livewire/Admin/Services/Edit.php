<?php

namespace App\Http\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class Edit extends Component
{
    public $service;

    protected $rules = [
        'service.title'=>'required',
        'service.description'=>'required',
    ];
    public function mount($id)
    {
        $this->service =  Service::find($id);
    }

    public function submit()
    {
        $this->validate();

        $this->service->save();

        return redirect()->route('admin.services.index');
    }
    public function render()
    {
        return view('livewire.admin.services.edit');
    }
}
