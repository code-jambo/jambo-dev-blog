<?php

use App\Livewire\Posts;
use App\Livewire\Post;

use App\Livewire\About;

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('/posts', Posts::class);
Route::get('/categories', function () {
    return view('welcome');
});
Route::get('/', Posts::class)->name('home');
Route::get('/posts/{slug}', Post::class);
// Route::get('/post', Post::class);
Route::get('/about', About::class)->name('about');