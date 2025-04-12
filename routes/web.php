<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;

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


Route::middleware([])->prefix('admin')->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/dashboard', 'dashboard')->name('dashboard');
        Route::get('/home_page', 'home_page')->name('home_page');
        
       
    });
});

