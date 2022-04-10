<?php

namespace App\Http\Livewire\Admin;

use App\Http\Controllers\DashboardController;
use Carbon\Carbon;
use Livewire\Component;

class Dashboard extends Component
{

    public $date;

    protected $listeners=[
        'done'=>'render'
    ];

    protected $rules = [
        'date'=>'required'
    ];

    public function maintenance_switch()
    {
        if (env('MAINTENANCE_MODE')) {
            DashboardController::maintenance_false();
        }else {
            DashboardController::maintenance_true();
        }

        $this->emit('done');
    }

    public function change_end_maintenance()
    {
        $this->validate();
        $timestamp = Carbon::parse($this->date)->getTimestamp();
        DashboardController::maintenance_end($timestamp);
        $this->reset();
        $this->emit('done');
    }
    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}
