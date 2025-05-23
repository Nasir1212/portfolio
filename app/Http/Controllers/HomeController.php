<?php

namespace App\Http\Controllers;
use App\Models\Slider;
use App\Models\About;
use App\Models\Blog;
use App\Models\Service;
use Illuminate\Support\Facades\Crypt;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
      
        return view('pages.user.home');
    }

    public function order(){
       if(request('id')){
        $service = Service::findOrFail(Crypt::decrypt(request('id')));
        return view('pages.user.order',compact('service'));

       }else{
        return view('pages.user.order');

       }
    }
    public function blogs(){
        return view('pages.user.blogs');
    }
    public function blog($title,$id){    
           
        $blog = Blog::findOrFail(Crypt::decrypt(urldecode($id)));
        return view('pages.user.blog',compact('blog'));
    }
    public function portfolio(){
        return view('pages.user.portfolio');
    }
}
