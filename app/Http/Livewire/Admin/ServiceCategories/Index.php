<?php

namespace App\Http\Livewire\Admin\ServiceCategories;

use App\Models\ServiceCategory;
use Livewire\Component;

class Index extends Component
{
    public $categories;

    public function mount()
    {
        $this->categories = ServiceCategory::all();
    }
    public function render()
    {
        return view('livewire.admin.service-categories.index');
    }
}
