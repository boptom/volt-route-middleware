<?php

use Livewire\Attributes\Layout;
use App\Models\Post;
use Livewire\Volt\Component;

new
#[Layout('layouts.app')]
class extends Component
{
    public Post $post;

    public function mount(Post $post)
    {
        $this->post = $post;
    }
}

?>

<div>
    Post View {{ $post->id }}
</div>
