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
use App\Models\Portfolio;
use App\Models\Blog;
use App\Models\SocialLink;
use App\Models\SiteInfo;


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
        View::composer('*', function ($view) {
            $view->with([
                'sliders' => Slider::all(),
                'about' => About::first(),
                'workflow' => WorkFlow::first(),
                'specialty' => Specialty::all(),
                'faqs' => FAQ::all(),
                'experiences' => Experience::all(),
                'services' => Service::all(),
                'portfolios' => Portfolio::latest('id')->take(4)->get(),
                'all_portfolios' => Portfolio::latest('id')->get(),
                'blogs' => Blog::latest('id')->take(4)->get(),
                'all_blogs' => Blog::latest('id')->get(),
                'site_info' => SiteInfo::latest('id')->first(),
                'social_link' => SocialLink::latest('id')->first()
            ]);
        });
    }
}
