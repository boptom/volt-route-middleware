<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Layout;
use Livewire\Component;

class LivewirePost extends Component
{
    public Post $post;

    #[Layout('layouts.app')]
    public function render()
    {
        return <<<'HTML'
        <div>
            Working {{ $post->id }}
        </div>
        HTML;
    }
}
