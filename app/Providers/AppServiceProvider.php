<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Slider;
use App\Models\About;
use App\Models\WorkFlow;
use App\Models\Specialty;
use App\Models\FAQ;
use App\Models\Experience;
use App\Models\Service;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('pages.user.home', function ($view) {
            $view->with([
                'sliders' => Slider::all(),
                'about' => About::first(),
                'workflow' => WorkFlow::first(),
                'specialty' => Specialty::all(),
                'faq' => FAQ::all(),
                'experience' => Experience::all(),
                'services' => Service::all(),
            ]);
        });
    }
}
