@extends('layout.user.layout')
@section('content')
@php
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;

@endphp
<style>
 .card-img-top {
    width: 100%;
    height: 15rem;
}
.card.shadow-sm {
    height: 33rem;
    overflow: hidden;
}

.card {
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        .card-body {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .btn-primary {
            margin-top: auto;
        }
</style>
<div class="container" style="max-width: 950px;width:100%;margin:0 auto;padding-left: 29px;">  
    <div class="row  ">
<h2 class="text-center mb-4">All Blogs</h2>
<div class="row">

    @foreach ($all_blogs as $blog)
        
        <div class="col-md-4">
        <div class="card shadow-sm">
            @if($blog->type==0)
                        <iframe width="250" height="115" 
                        src="{{ $blog->video }}" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen>
                    </iframe>
                        @else
                        <img src="{{asset("$blog->image")}}" class="card-img-top" alt="HTML5 Bootstrap Template by colorlib.com">
                        @endif
          
            <div class="card-body">
                <h5 class="card-title">{{ $blog->title }}</h5>
                <p class="card-text">{!! Str::words($blog->blog, 30, '...') !!}</p>
                <a href=" {{  route('blog',['title'=>$blog->title,'id'=>urlencode(Crypt::encrypt($blog->id))]) }}" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>

    @endforeach


</div>

    </div>
</div>

@endsection