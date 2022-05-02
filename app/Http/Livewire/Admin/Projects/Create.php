<?php

namespace App\Http\Livewire\Admin\Projects;

use App\Models\Photo;
use App\Models\Project;
use App\Models\ProjectCost;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public Project $project;
    public $photos;
    public ProjectCost $project_cost;

    protected $rules = [
        'project.client_id' => 'required',
        'project.service_id' => 'required',
        'project.title' => 'required',
        'project.description' => 'required',
        'photos.*' => 'image|max:4196',
        'project_cost.cost_kes' => 'required'
    ];

    public function mount()
    {
        $this->project = new Project();
        $this->project_cost = new ProjectCost();
    }

    public function submit()
    {
        $this->validate();
        $this->project->user_id = auth()->user()->id;
        $this->project->save();
        if (isset($this->photos)) {
            for ($i = 0; $i < count($this->photos); $i++) {
                $this->photos[$i]->storeAs("/public/projects", Str::slug($this->project->title) . "_" . $i . '.' . $this->photos[$i]->extension());

                $photo = new Photo();
                $photo->project_id = $this->project->id;
                $photo->path = Str::slug($this->project->title) . "_" . $i . '.' . $this->photos[$i]->extension();
                $photo->save();
            }
        }
        $this->project_cost->project_id = $this->project->id;
        $this->project_cost->save();

        return redirect()->route('admin.projects.index');
    }
    public function render()
    {
        return view('livewire.admin.projects.create');
    }
}
