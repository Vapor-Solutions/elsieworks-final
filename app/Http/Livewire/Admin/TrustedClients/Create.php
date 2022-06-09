<?php

namespace App\Http\Livewire\Admin\TrustedClients;

use App\Models\TrustedClient;
use Livewire\Component;

class Create extends Component
{
    public TrustedClient $trusted_client;

    protected $rules = [
        'trusted_client.client_id'=>'required|unique:trusted_clients,client_id'
    ];

    public function mount()
    {
        $this->trusted_client = new TrustedClient();
    }

    public function submit()
    {
        $this->validate();
        $this->trusted_client->save();
        $this->emit('done');
        return redirect()->route('admin.trusted-clients.index');

    }
    public function render()
    {
        return view('livewire.admin.trusted-clients.create');
    }
}
