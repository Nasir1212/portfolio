@extends('layout.admin.layout')
@section('content')
<div class="row">
  <div class="col-lg-12 col-12">
    <div class="row my-4">
    
      @include('section.admin.home.slider',['sliders'=>$sliders])
      @include('section.admin.home.about',['about'=>$about])  
      @include('section.admin.home.workflow',['work_flow'=>$work_flow])
      @include('section.admin.home.specialty')
      @include('section.admin.home.faq')
      @include('section.admin.home.experience')
      </div>
    
    </div>
  
  </div>
 


 
  @endsection