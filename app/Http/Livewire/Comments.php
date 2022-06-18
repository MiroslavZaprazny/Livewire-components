<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use App\Models\Post;
use Livewire\Component;

class Comments extends Component
{
    public $post;
    public $body;
    public $successMessage;

    protected $rules = [
        'body' => 'required|min:4'
    ];

    public function postComment()
    {
        $this->validate();

        Comment::create([
            'body' => $this->body,
            'post_id' => $this->post->id
        ]);

        $this->post->refresh();
        $this->body = '';
        $this->successMessage = 'Message was posted';
    }

    public function mount(Post $post)
    {
        $this->post = $post;
    }
    
    public function render()
    {
        return view('livewire.comments');
    }
}
