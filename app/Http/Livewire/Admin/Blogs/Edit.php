<?php

namespace App\Http\Livewire\Admin\Blogs;

use App\Models\Blog;
use Livewire\Component;

class Edit extends Component
{
    public Blog $blog;

    protected $rules = [
        'blog.title' => 'required',
        'blog.description' => 'required'
    ];

    public function mount($id)
    {
        $this->blog = Blog::find($id);
    }

    public function submit()
    {
        $this->validate();
        $this->blog->save();
        return redirect()->route('admin.blogs.index');
    }

    public function render()
    {
        return view('livewire.admin.blogs.edit');
    }
}
