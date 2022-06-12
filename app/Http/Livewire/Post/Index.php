<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['updatePostsIndex'];

    public $search = '';
    public $page = 1;
    public $perPage = 6;

    protected $queryString = [
        'search' => ['except' => ''],
        'page' => ['except' => 1],
    ];




    public function updatePostsIndex()
    {
        $this->mount();
    }

    public function mount()
    {
        //
    }

    public function reset(...$properties)
    {
        $this->search = '';
        $this->page = 1;
        $this->perPage = 6;
    }



    public function render()
    {
        $posts = Post::where('title', 'like', '%'.$this->search.'%')
            ->latest()
            ->paginate($this->perPage);

        return view('livewire.post.index', compact('posts'));
    }
}
