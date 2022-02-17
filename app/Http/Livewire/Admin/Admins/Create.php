<?php

namespace App\Http\Livewire\Admin\Admins;

use App\Models\User;
use Livewire\Component;

class Create extends Component
{
    public User $admin;

    protected $rules = [
        'admin.name'=>'required',
        'admin.email'=>'required',
    ];

    public function mount()
    {
        $this->admin = new User();
        $this->role_id = 1;
    }

    public function submit()
    {
        $this->validate();
        $this->admin->save();
        return redirect()->route('admin.admins.index');
    }


    public function render()
    {
        return view('livewire.admin.admins.create');
    }
}
