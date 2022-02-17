<?php

namespace App\Http\Livewire\Admin\Blogs;

use App\Models\Blog;
use Livewire\Component;

class Create extends Component
{
    public Blog $blog;

    protected $rules = [
        'blog.title'=>'required',
        'blog.description'=>'required'
    ];

    public function mount()
    {
        $this->blog = new Blog();
    }

    public function submit()
    {
        $this->validate();
        $this->blog->save();
        return redirect()->route('admin.blogs.index');
    }
    public function render()
    {
        return view('livewire.admin.blogs.create');
    }
}
