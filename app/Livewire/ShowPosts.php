<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class ShowPosts extends Component
{

    public function delete($postId)
    {
        $post = Post::find($postId);

        // Authorization...

        $post->delete();

        sleep(1);
    }

    public function render()
    {
        return view('livewire.show-posts', [
            'posts' => Post::all(),
        ]);
    }
}
