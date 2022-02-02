<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class ChangeImage extends Component
{
    use WithFileUploads;

    public $bg, $link, $photo;

    // public function save()
    // {
    //     $this->validate([
    //         'photo'=>'image|max:1024'
    //     ]);

    //     $this->photo->storeAs('/'.$this->link, basename($this->bg) );
    // }

    public function render()
    {
        return view('livewire.change-image');
    }
}
