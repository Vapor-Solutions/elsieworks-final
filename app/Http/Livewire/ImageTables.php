<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class ImageTables extends Component
{
    use WithFileUploads;
    public $photo;
    public $link;

    // protected $listeners = [
    //     'image-added'=>'save'
    // ];

    public function save()
    {
        $this->validate([
            'photo'=>'image|max:2048'
        ]);

        $this->photo->store('photos');
    }
    public function render()
    {
        return view('livewire.image-tables');
    }
}
