@extends('layout.admin.layout')
@section('content')
<div class="row">
  <div class="col-lg-12 col-12">
    <div class="row my-4">
    
    
      @include('section.admin.home.slider',['sliders'=>$sliders])
      @include('section.admin.home.about',['about'=>$about])  
      @include('section.admin.home.workflow',['workflow'=>$workflow])
      @include('section.admin.home.specialty',['specialty'=>$specialty])
      @include('section.admin.home.faq',['faq'=>$faq])
      @include('section.admin.home.experience')
      </div>
    
    </div>
  
  </div>
 


 
  @endsection