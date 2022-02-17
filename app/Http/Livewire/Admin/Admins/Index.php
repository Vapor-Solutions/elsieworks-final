<?php

namespace App\Http\Livewire\Admin\Admins;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public $admins;

    protected $listeners = [
        'deleted'=>'mount'
    ];



    public function mount()
    {
        $this->admins = User::whereIn('role_id', [1,2])->get();
    }


    public function delete($id)
    {
        if (auth()->user()->id == $id) {
            abort(403, 'You can\'t Delete yourself while logged in');
        }
        if ($id == 1) {
            abort(403, 'This User cannot be deleted');
        }
        User::find($id)->delete();

        $this->emit('deleted');
    }
    public function render()
    {
        return view('livewire.admin.admins.index');
    }
}
