<?php

use App\Models\User;

it('can view post', function () {
    $user = User::factory()->create();
    $post = $user->posts()->create();

    $response = $this->actingAs($user)->get(route('post', [$post]));

    $response->assertStatus(200);
});

it('can view alternate route', function () {
    $user = User::factory()->create();
    $post = $user->posts()->create();

    $response = $this->actingAs($user)->get(route('alternate', [$post]));

    $response->assertStatus(200);
});
