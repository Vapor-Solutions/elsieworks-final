<?php

namespace App\Http\Livewire\Admin\Projects;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function delete($id)
    {
        Project::find($id)->delete();
        return redirect()->route('admin.projects.index');
    }
    public function render()
    {
        return view('livewire.admin.projects.index',[
            'projects'=>Project::orderBy('id', 'DESC')->paginate(15)
        ]);
    }
}
