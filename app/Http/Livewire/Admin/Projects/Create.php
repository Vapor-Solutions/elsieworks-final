<?php

namespace App\Http\Livewire\Admin\Projects;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class Create extends Component
{
    use WithFileUploads;

    public Project $project;
    public $photos;

    protected $rules = [
        'project.client_id' => 'required',
        'project.service_id' => 'required',
        'project.title' => 'required',
        'project.description' => 'required',
        'photos.*' => 'image|max:4196'
    ];

    public function mount()
    {
        $this->project = new Project();
        $this->project->user_id = auth()->user()->id;
    }

    public function submit()
    {
        $this->validate();
        $this->project->save();
        for ($i = 0; $i < count($this->photos); $i++) {
            $this->photo[$i]->storeAs("/projects", Str::slug($this->project->title) . "_" . $i);
        }

        return redirect()->route('admin.projects.index');
    }
    public function render()
    {
        return view('livewire.admin.projects.create');
    }
}
