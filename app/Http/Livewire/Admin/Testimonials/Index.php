<?php

namespace App\Http\Livewire\Admin\Testimonials;

use App\Models\Testimonial;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;



    public function render()
    {
        return view('livewire.admin.testimonials.index', [
            'testimonials'=>Testimonial::orderBy('client_id', 'ASC')->paginate(15)
        ]);
    }
}
