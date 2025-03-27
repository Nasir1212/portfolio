<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/order', 'order')->name('order');
    Route::get('/blogs', 'blogs')->name('blogs');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/portfolio', 'portfolio')->name('portfolio');
   
});


