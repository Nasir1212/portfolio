@extends('layout.user.layout')
@section('content')
    
    <style>
    
        .portfolio-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            max-width: 1000px;
            margin: 0 auto;
        }
        .portfolio-item {
            background: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .portfolio-item img {
            width: 100%;
            border-radius: 5px;
            height: 20rem
        }
        .portfolio-item h3 {
            margin: 10px 0;
            color: #333;
        }
        .portfolio-item p {
            color: #666;
            font-size: 14px;
        }
    </style>
<div class="container" style="max-width: 950px;width:100%;margin:0 auto;padding-left: 29px;">  
    <div class="row  ">
        <br>
    <h1>My Portfolio</h1>
    <div class="portfolio-container">
        @foreach ($all_portfolios as $portfolio)   
        <div class="portfolio-item">
            <img src="{{asset('storage/'.$portfolio->image)}}" alt="Work Image">
            <a href="{{$portfolio->target_link}}" target="_blank"> <h3>{{$portfolio->title}}</h3> </a>
            <p>{{$portfolio->description}}</p>
        </div>
        @endforeach
        {{-- <div class="portfolio-item">
            <img src="{{asset('assets/images/img-2.jpg')}}" alt="Work Image">
            <h3>Project Title 2</h3>
            <p>Description of the project goes here. Brief details about the work.</p>
        </div>
        <div class="portfolio-item">
            <img src="{{asset('assets/images/img-6.jpg')}}" alt="Work Image">
            <h3>Project Title 3</h3>
            <p>Description of the project goes here. Brief details about the work.</p>
        </div> --}}

    </div>

    </div>

</div>

    @endsection
