<?php

namespace App\Http\Livewire\Admin\Admins;

use App\Models\User;
use Livewire\Component;

class Edit extends Component
{

    protected $rules = [
        'admin.name'=>'required',
        'admin.email'=>'required',
        'admin.role_id'=>'required',
    ];

    public function mount($id)
    {
        $this->admin = User::find($id);
    }
    public function render()
    {
        return view('livewire.admin.admins.edit');
    }
}
