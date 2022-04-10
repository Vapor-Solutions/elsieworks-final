<?php

namespace App\Http\Livewire\Admin\ServiceCategories;

use App\Models\ServiceCategory;
use Livewire\Component;

class Create extends Component
{
    public ServiceCategory $category;

    protected $rules = [
        'category.service_id'=>'required',
        'category.title'=>'required',
        'category.description'=>'nullable',
    ];

    public function mount()
    {
        $this->category = new ServiceCategory();
    }

    public function submit()
    {
        $this->validate();

        $this->category->save();

        return redirect()->route('admin.service_categories.index');
    }
    public function render()
    {
        return view('livewire.admin.service-categories.create');
    }
}
