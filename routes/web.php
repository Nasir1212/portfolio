<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\WorkFlowController;
use App\Http\Controllers\Admin\SpecialtyController;

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
    Route::resource('abouts', AboutController::class);
    Route::resource('sliders', SliderController::class);
    Route::resource('workflows', WorkFlowController::class);
    Route::resource('specialties', SpecialtyController::class);
    Route::controller(AdminController::class)->group(function () {
        Route::get('/dashboard', 'dashboard')->name('dashboard');
        Route::get('/home_page', 'home_page')->name('home_page');
    });

    Route::controller(WorkFlowController::class)->group(function () {
      
        Route::post('/work_flow_update/{id}', 'update')->name('work_flow_update');
    });

  

});

Route::get('/link-storage', function () {
    Artisan::call('storage:link');
    return "Storage linked successfully!";
});

Route::get('/clear-all', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('route:clear');
    $exitCode = Artisan::call('config:clear');
$exitCode = Artisan::call('optimize:clear');
$exitCode = Artisan::call('optimize');
    echo "clear";
    // return what you want
});

