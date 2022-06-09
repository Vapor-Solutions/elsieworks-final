<?php

namespace App\Http\Livewire\Admin\TrustedClients;

use App\Models\TrustedClient;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.trusted-clients.index', [
            'trusted_clients'=>TrustedClient::all()
        ]);
    }
}
