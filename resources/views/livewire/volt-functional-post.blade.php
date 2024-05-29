<?php

use function Livewire\Volt\{state};

state(['post' => fn () => $post]);

?>

<div>
    Post View {{ $post }}
</div>

