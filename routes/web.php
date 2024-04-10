<?php

use App\Livewire\Counter;
use App\Livewire\Todos;
use Illuminate\Support\Facades\Route;

Route::get('/', Todos::class);
Route::get('/counter', Counter::class);
Route::get('/posts', \App\Livewire\ShowPosts::class);
Route::get('/post/create', \App\Livewire\CreatePost::class);
Route::get('/profile', \App\Livewire\EditProfile::class);
Route::get('/signup', \App\Livewire\Signup::class);
