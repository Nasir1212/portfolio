@extends('layout.user.layout')
@section('content')
<div class="container" style="max-width: 950px;width:100%;margin:0 auto;padding-left: 29px;">  
    <div class="row  ">
<a href="{{ route('blogs') }}" class="btn btn-secondary mb-3">Back to Blogs</a>
        <div class="card shadow-sm">

            {{-- <img style="height: 27rem;width: 100%;" src="{{asset('assets/images/img-1.jpg')}}" class="card-img-top" alt="Blog Image"> --}}
            @if($blog->type==0)
            <iframe style="height: 27rem;width: 100%;" 
            src="{{ $blog->video }}" 
            title="YouTube video player" 
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
            allowfullscreen>
        </iframe>
            @else
            <img src="{{asset("Storage/$blog->image")}}" style="height: 27rem;width: 100%;" class="card-img-top" >
            @endif
            <div class="card-body">
                <h2 class="card-title">{{ $blog->title }}</h2>
                <p class="text-muted">Published on {{ \Carbon\Carbon::parse($blog->created_at)->format('j F Y - h.ia') }}</p>
               <div class="card-text text-justify">

                {!! $blog->blog!!}

               </div>
            </div>
        </div>
    </div>
    </div>

    @endsection 