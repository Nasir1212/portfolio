<?php

namespace App\Http\Controllers;

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
}
