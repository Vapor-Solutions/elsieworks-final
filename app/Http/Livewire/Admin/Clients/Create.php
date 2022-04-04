<?php

namespace App\Http\Livewire\Admin\Clients;

use App\Models\Client;
use Livewire\Component;

class Create extends Component
{
    public Client $client;

    protected $rules = [
        'client.name'=>'required',
        'client.phone_number'=>'required',
        'client.email'=>'nullable|unique:users,email',
    ];


    public function mount()
    {
        $this->client = new Client();

    }


    public function submit()
    {
        $this->validate();

        $this->client->save();

        return redirect()->route('admin.clients.index');
    }


    public function render()
    {
        return view('livewire.admin.clients.create');
    }
}
