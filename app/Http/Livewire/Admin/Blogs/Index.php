<?php

namespace App\Http\Livewire\Admin\Blogs;

use App\Models\Blog;
use Livewire\Component;

class Index extends Component
{
    public $blogs;

    public function mount()
    {
        $this->blogs = Blog::all();
    }

    public function delete($id)
    {
        $blog = Blog::find($id);
        $blog->delete();

        return redirect()->route('admin.blog.index');
    }

    public function render()
    {
        return view('livewire.admin.blogs.index');
    }
}
