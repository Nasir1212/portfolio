<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\WorkFlowController;
use App\Http\Controllers\Admin\SpecialtyController;
use App\Http\Controllers\Admin\FAQController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\SiteInfoController;
use App\Http\Controllers\Admin\ThemeColorController;
use App\Http\Controllers\Admin\PaymentMethodController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\MsgController;
use App\Http\Controllers\Admin\OrderController;


Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/order', 'order')->name('order');
    Route::get('/blogs', 'blogs')->name('blogs');
    Route::get('/blog/{title}/{id}', 'blog')->name('blog');
    Route::get('/portfolio', 'portfolio')->name('portfolio');
   
});
Route::post('msgs', [MsgController::class, 'store'])->name('msgs.store');
Route::post('order-store', [OrderController::class, 'store'])->name('order.store');



Route::middleware(['auth:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('abouts', AboutController::class);
    Route::resource('sliders', SliderController::class);
    Route::resource('workflows', WorkFlowController::class);
    Route::resource('specialties', SpecialtyController::class);
    Route::resource('faqs', FAQController::class);
    Route::resource('experiences', ExperienceController::class);
    Route::resource('blogs', BlogController::class);
    Route::resource('portfolios', PortfolioController::class);
    Route::resource('services', \App\Http\Controllers\Admin\ServiceController::class);
    Route::resource('orders', OrderController::class)->except(['store']);;
    Route::resource('social-links', \App\Http\Controllers\Admin\SocialLinkController::class);
    Route::resource('msgs', MsgController::class)->except(['store']);
    Route::resource('siteinfo', SiteInfoController::class);
    Route::resource('theme-colors', ThemeColorController::class);
    Route::resource('payment-methods', PaymentMethodController::class);

    // Route::resource('messages', MessageController::class)->only([
    //     'index', 'store', 'update', 'destroy'
    // ]);;

    Route::controller(AdminController::class)->group(function () {
        Route::get('/dashboard', 'dashboard')->name('dashboard');
        Route::get('/home_page', 'home_page')->name('home_page');
        Route::get('/blogs_page', 'blogs_page')->name('blogs_page');
    });

    Route::controller(WorkFlowController::class)->group(function () {
      
        Route::post('/work_flow_update/{id}', 'update')->name('work_flow_update');
    });
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
  

});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('guest:admin')->group(function () {
        Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
        Route::post('login', [AuthController::class, 'login'])->name('login.submit');
    });


});

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');


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

