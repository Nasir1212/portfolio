<?php

namespace App\Http\Controllers;
use App\Models\Slider;
use App\Models\About;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
      
        return view('pages.user.home');
    }

    public function order(){
        return view('pages.user.order');
    }
    public function blogs(){
        return view('pages.user.blogs');
    }
    public function blog(){
        return view('pages.user.blog');
    }
    public function portfolio(){
        return view('pages.user.portfolio');
    }
}
