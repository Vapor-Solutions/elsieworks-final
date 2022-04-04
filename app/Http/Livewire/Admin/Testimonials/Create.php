<?php

namespace App\Http\Livewire\Admin\Testimonials;

use App\Models\Testimonial;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class Create extends Component
{
    use WithFileUploads;

    public Testimonial $testimonial;
    public $image;

    protected $rules = [
        'testimonial.text' => 'required',
        'image' => 'image|required',
        'testimonial.client_id' => 'required'
    ];
    public function mount()
    {
        $this->testimonial = new Testimonial();
    }

    public function submit()
    {
        $this->validate();
        $this->image->storeAs('public/testimonials', Str::slug($this->testimonial->client->name).'.'.$this->image->extension());
        $this->testimonial->image = Str::slug($this->testimonial->client->name) . '.' . $this->image->extension();
        $this->testimonial->save();

        return redirect()->route('admin.testimonials.index');
    }
    public function render()
    {
        return view('livewire.admin.testimonials.create');
    }
}
