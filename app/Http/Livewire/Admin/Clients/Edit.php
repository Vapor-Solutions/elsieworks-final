<?php

namespace App\Http\Livewire\Admin\Clients;

use App\Models\Client;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class Edit extends Component
{
    use WithFileUploads;
    public Client $client;
    public $image;

    protected $rules = [
        'client.name' => 'required',
        'client.phone_number' => 'required',
        'client.email' => 'nullable|unique:users,email',
        'image' => 'nullable|image|unique:users,email',
    ];


    public function mount($id)
    {
        $this->client = Client::find($id);
    }


    public function submit()
    {
        $this->validate();

        if (isset($this->image)) {
            $this->image->storeAs('/public/clients', Str::slug($this->client->name) . '.' . $this->image->extension());
            $this->client->image = Str::slug($this->client->name) . '.' . $this->image->extension();
        }

        $this->client->save();

        return redirect()->route('admin.clients.index');
    }

    public function render()
    {
        return view('livewire.admin.clients.edit');
    }
}
