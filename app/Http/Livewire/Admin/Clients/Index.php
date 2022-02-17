<?php

namespace App\Http\Livewire\Admin\Clients;

use App\Models\Client;
use Livewire\Component;

class Index extends Component
{
    public $clients;

    public function mount()
    {
        $this->clients = Client::all();
    }

    public function delete($id)
    {
        Client::find($id)->delete();

        return redirect()->route('admin.clients.index');

    }
    public function render()
    {
        return view('livewire.admin.clients.index');
    }
}
