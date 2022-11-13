<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreatePost extends Component
{
    public function render()
    {
        return view('livewire.create-post');
    }

    public function createPost(){
        Post::create([
            'user_id' => Auth::user()->id,
            'body' => $this->body,
        ]);

        $this->body = '';
    }
}
