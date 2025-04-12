<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
      return view('pages.admin.dashboard');
      
    }
    public function home_page()
    {
      return view('pages.admin.home_page');
      
    }


}
