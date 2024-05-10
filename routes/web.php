<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

Volt::route('post/{post}', 'post')
    ->middleware(['auth', 'can:view,post'])
    ->name('post');

Route::get('alternate/{post}', [PostController::class, 'show'])
    ->middleware(['auth', 'can:view,post'])
    ->name('alternate');
