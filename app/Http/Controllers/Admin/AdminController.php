<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\About;
use App\Models\WorkFlow;
use App\Models\Specialty;
use App\Models\FAQ;
use App\Models\Experience;
class AdminController extends Controller
{
    public function dashboard()
    {
      
      return view('pages.admin.dashboard');
      
    }
    public function home_page()
    {
      $sliders = Slider::all();
      $about  = About::first();
      $work_flow = WorkFlow::first();
      $specialty = Specialty::all();
      $faq = FAQ::all();
      $experience = Experience::all();
      
      return view('pages.admin.home_page', ['sliders'=>$sliders,'about'=>$about,'work_flow'=>$work_flow,'specialty'=>$specialty,'faq'=>$faq,'experience'=>$experience]);
    }


}
