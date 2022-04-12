<?php

namespace App\Http\Livewire\Admin;

use App\Http\Controllers\DashboardController;
use App\Models\Client;
use App\Models\Project;
use Carbon\Carbon;
use Livewire\Component;

class Dashboard extends Component
{

    public $date;

    public $total_earnings, $projects, $clients;

    protected $listeners=[
        'done'=>'render'
    ];

    protected $rules = [
        'date'=>'required'
    ];

    public function mount()
    {
        $this->total_earnings = 0;
        $this->projects = Project::all();
        $this->clients = Client::all();

        for ($i = 0; $i < count($this->projects); $i++) {
            $this->total_earnings += $this->projects[$i]->project_cost->cost_kes??0;
        }
    }

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
