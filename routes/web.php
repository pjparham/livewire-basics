<?php

use App\Livewire\Counter;
use App\Livewire\Todos;
use Illuminate\Support\Facades\Route;

Route::get('/', Todos::class);
Route::get('/counter', Counter::class);
Route::get('/show-posts', \App\Livewire\ShowPosts::class);
Route::get('/create-post', \App\Livewire\CreatePost::class);
Route::get('/profile', \App\Livewire\EditProfile::class);
Route::get('/signup', \App\Livewire\Signup::class);
