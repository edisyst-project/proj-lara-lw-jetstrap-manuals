<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $title, $text, $photo;


    public function mount()
    {
        $this->reset();
    }

    public function save()
    {
        $this->validate([
            'title' => 'required', // 1MB Max
            'text' =>  'required', // 1MB Max
            'photo' => 'image|max:1024', // 1MB Max
        ]);

        $path = $this->photo->store('public/posts/photos');

        $blog = new Post();
        $blog->title = $this->title;
        $blog->text = $this->text;
        $blog->photo = $path;
        $blog->user_id = auth()->id();
        $blog->save();

        $this->photo = null;
        $this->reset();

        $this->emit('updatePostsIndex');
    }


    public function render()
    {
        return view('livewire.post.create');
    }
}
