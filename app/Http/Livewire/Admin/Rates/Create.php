<?php

namespace App\Http\Livewire\Admin\Rates;

use App\Models\Rate;
use App\Models\ServiceCategory;
use Livewire\Component;

class Create extends Component
{
    public Rate $rate;
    public $service_categories;

    protected $rules = [
        'rate.service_id'=>'required',
        'rate.service_category_id'=>'nullable',
        'rate.title'=>'required',
        'rate.description'=>'required',
        'rate.price_type_id'=>'required',
        'rate.price'=>'required',
    ];

    public function mount()
    {
        $this->rate = new Rate();
    }

    public function loadCategories()
    {
        $this->service_categories = ServiceCategory::where('service_id', $this->rate->service_id)->get();
    }

    public function submit()
    {
        $this->validate();

        $this->rate->save();

        return redirect()->route('admin.rates.index');
    }
    public function render()
    {
        return view('livewire.admin.rates.create');
    }
}
