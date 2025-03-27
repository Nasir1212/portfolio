@extends('layout.user.layout')
@section('content')
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
<h2 class="text-center mb-4">Latest Blogs</h2>
<div class="row">
    <div class="col-md-4">
        <div class="card shadow-sm">
            <img src="{{asset('assets/images/img-1.jpg')}}" class="card-img-top" alt="Blog Image">
            <div class="card-body">
                <h5 class="card-title">Blog Title 1</h5>
                <p class="card-text">A short description of the blog post goes here...</p>
                <a href="{{ route('blog') }}" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm">
            <img src="{{ asset('assets/images/img-2.jpg')}}" class="card-img-top" alt="Blog Image">
            <div class="card-body">
                <h5 class="card-title">350-year-old fair cancelled due to BNP factional dispute</h5>
                <p class="card-text">A short description of the blog post goes here...</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm">
            <img src="{{asset('assets/images/img-3.jpg')}}" class="card-img-top" alt="Blog Image">
            <div class="card-body">
                <h5 class="card-title">Two 'student coordinators' accused of extortion in police custody in Ctg</h5>
                <p class="card-text">A short description of the blog post goes here...</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm">
            <img src="{{asset('assets/images/img-2.jpg')}}" class="card-img-top" alt="Blog Image">
            <div class="card-body">
                <h5 class="card-title">350-year-old fair cancelled due to BNP factional dispute</h5>
                <p class="card-text">A short description of the blog post goes here...</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm">
            <img src="{{asset('assets/images/img-3.jpg')}}" class="card-img-top" alt="Blog Image">
            <div class="card-body">
                <h5 class="card-title">Two 'student coordinators' accused of extortion in police custody in Ctg</h5>
                <p class="card-text">A short description of the blog post goes here...</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm">
            <img src="{{asset('assets/images/img-2.jpg')}}" class="card-img-top" alt="Blog Image">
            <div class="card-body">
                <h5 class="card-title">350-year-old fair cancelled due to BNP factional dispute</h5>
                <p class="card-text">A short description of the blog post goes here...</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm">
            <img src="{{asset('assets/images/img-3.jpg')}}" class="card-img-top" alt="Blog Image">
            <div class="card-body">
                <h5 class="card-title">Two 'student coordinators' accused of extortion in police custody in Ctg</h5>
                <p class="card-text">A short description of the blog post goes here...</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm">
            <img src="{{asset('assets/images/img-2.jpg')}}" class="card-img-top" alt="Blog Image">
            <div class="card-body">
                <h5 class="card-title">350-year-old fair cancelled due to BNP factional dispute</h5>
                <p class="card-text">A short description of the blog post goes here...</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm">
            <img src="{{asset('assets/images/img-3.jpg')}}" class="card-img-top" alt="Blog Image">
            <div class="card-body">
                <h5 class="card-title">Two 'student coordinators' accused of extortion in police custody in Ctg</h5>
                <p class="card-text">A short description of the blog post goes here...</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm">
            <img src="{{asset('assets/images/img-2.jpg')}}" class="card-img-top" alt="Blog Image">
            <div class="card-body">
                <h5 class="card-title">350-year-old fair cancelled due to BNP factional dispute</h5>
                <p class="card-text">A short description of the blog post goes here...</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm">
            <img src="{{asset('assets/images/img-3.jpg')}}" class="card-img-top" alt="Blog Image">
            <div class="card-body">
                <h5 class="card-title">Two 'student coordinators' accused of extortion in police custody in Ctg</h5>
                <p class="card-text">A short description of the blog post goes here...</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>
</div>

    </div>
</div>

@endsection