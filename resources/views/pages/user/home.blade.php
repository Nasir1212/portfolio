@extends('layout.user.layout')
@section('content')
<section id="colorlib-hero" class="js-fullheight" data-section="home">
    <div class="flexslider js-fullheight">
        <ul class="slides">
            @foreach ($sliders as $slider)
                
        
            <li style="background-image: url({{ asset('storage/' . $slider->slider_img) }});">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                            <div class="slider-text-inner js-fullheight">
                                <div class="desc">
                                    <h1>{{ $slider->title}}</h1>
                                    <h2>{{$slider->slug}} 
                                        {{-- <a href="https://colorlib.com/" target="_blank">colorlib.com</a> --}}
                                    </h2>
                                    {{-- <p><a class="btn btn-primary btn-learn">Download CV  <i class="fas fa-download"></i></a></p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
          
        </ul>
    </div>
</section>

<section class="colorlib-about" data-section="about">
    <div class="colorlib-narrow-content">
        <div class="row">
            <div class="col-md-12">
                <div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
                    <div class="col-md-12">
                        <div class="about-desc">
                            <span class="heading-meta">About Us</span>
                            <h2 class="colorlib-heading">Who Am I?</h2>
                            <p>{!!$about->about!!}</p>
                        </div>
                    </div>
                </div>
               
                <div class="row">
                    <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                        <div class="hire">
                            <h2>{{$about->hire_toast}}</h2>
                            <a href="{{route('order')}}" class="btn-sm  btn-hire">Hire me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="colorlib-services" data-section="services">
    <div class="colorlib-narrow-content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                <span class="heading-meta">What I do?</span>
                <h2 class="colorlib-heading">Here are some of my expertise</h2>
            </div>
        </div>

        <div class="row ">
            @foreach ($services as $service)
            <div class="col-md-4 text-center animate-box">
                
                <div class="services color-1">
                    <div>
                        <h6 style="margin-bottom:5px;text-align:start">My Service</h6>
                    </div>
                    <div>
                        <img style="height:10rem" src="{{ asset('storage/'.$service->image) }}" alt="">
                    </div>
               
                    <div class="desc">
                        <h3>{{$service->title}} </h3>
                        <p>{{$service->toast}}</p>
                    </div>
                    <div>
                        <h4 style="text-align: start">Price : <strong>{{$service->price}}</strong></h4>
                        <a href="{{route('order')}}?id={{Crypt::encrypt($service->id)}}" class=" btn_primary">👋 Hire Me</a>
                    </div>
                </div>
            </div>   
        @endforeach
         


        </div>
     
    </div>
</section>

<div id="colorlib-counter" class="colorlib-counters" style="background-image: url({{ 'storage/'.$workflow->banner }});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="colorlib-narrow-content">
        <div class="row">
        </div>
        <div class="row">
            <div class="col-md-3 text-center animate-box">
                <span class="colorlib-counter js-counter" data-from="0" data-to="{{ $workflow->got_tips }}" data-speed="5000" data-refresh-interval="50"></span>
                <span class="colorlib-counter-label">Got Tips</span>
            </div>
            <div class="col-md-3 text-center animate-box">
                <span class="colorlib-counter js-counter" data-from="0" data-to="{{ $workflow->projects }}" data-speed="5000" data-refresh-interval="50"></span>
                <span class="colorlib-counter-label">Projects</span>
            </div>
            <div class="col-md-3 text-center animate-box">
                <span class="colorlib-counter js-counter" data-from="0" data-to="{{ $workflow->clients }}" data-speed="5000" data-refresh-interval="50"></span>
                <span class="colorlib-counter-label">Clients</span>
            </div>
            <div class="col-md-3 text-center animate-box">
                <span class="colorlib-counter js-counter" data-from="0" data-to="{{ $workflow->partners }}" data-speed="5000" data-refresh-interval="50"></span>
                <span class="colorlib-counter-label">Partners</span>
            </div>
        </div>
    </div>
</div>

<section class="colorlib-skills" data-section="skills">
    <div class="colorlib-narrow-content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                <span class="heading-meta">My Specialty</span>
                <h2 class="colorlib-heading animate-box">My Skills</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                <p>{!! $specialty[0]?->content !!}</p>
            </div>
            @foreach ($specialty->slice(1) as $sp )
            @php
                $skill = json_decode($sp->content, true);
               
            @endphp
            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                <div class="progress-wrap">
                    <h3>{{ $skill[0] }}</h3>
                    <div class="progress">
                        <div class="progress-bar " role="progressbar" aria-valuenow="{{ $skill[1] }}" aria-valuemin="0" aria-valuemax="100" style="width:{{ $skill[1] }}%;background-color: {{  $skill[2]  }}">
                            <span>{{ $skill[1] }}%</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="colorlib-education" data-section="education">
    <div class="colorlib-narrow-content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                <span class="heading-meta">More Quation</span>
                <h2 class="colorlib-heading animate-box">FAQ </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                <div class="fancy-collapse-panel">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        @foreach ($faqs as $faq )
                            
                       
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $faq->id }}" aria-expanded="true" aria-controls="collapse{{ $faq->id }}">{{ $faq->question }}
                                </a>
                                </h4>
                            </div>
                            <div id="collapse{{ $faq->id }}" class="panel-collapse collapse " role="tabpanel" aria-labelledby="heading{{ $faq->id }}">
                                <div class="panel-body">
                                    <div class="row">
                                       {!! $faq->ans !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                     

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="colorlib-experience" data-section="experience">
    <div class="colorlib-narrow-content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                <span class="heading-meta">Experience</span>
                <h2 class="colorlib-heading animate-box">Work Experience</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="timeline-centered">

                    @foreach ($experiences as $experience )
                        
                    @endforeach

                    <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
                        <div class="timeline-entry-inner">

                            <div class="timeline-icon color-1">
                                <i class="fa fa-briefcase" style="color: white;"></i>
                            </div>

                            <div class="timeline-label">
                                <h2><a href="#">{{$experience->title}}</a> <span>{{ $experience->sub_title_or_time }}</span></h2>
                                <p>{!!  $experience->details !!}</p>
                            </div>
                        </div>
                    </article>


                    
                </div>
            </div>
        </div>
    </div>
</section>

<section class="colorlib-work" data-section="work">
    <div class="colorlib-narrow-content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                <span class="heading-meta">My Work</span>
                <h2 class="colorlib-heading animate-box">Recent Work</h2>
            </div>
        </div>
      
        <div class="row">
            @foreach ($portfolios as $portfolio)
                
         
            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                <div class="project" style="background-image: url({{asset("Storage/$portfolio->image")}});">
                    <div class="desc">
                        <div class="con">
                            <h3><a href="work.html">{{ $portfolio->title }}</a></h3>
                           <p style="color: white;text-align:justify">{{ $portfolio->description }}</p>
                           
                        </div>
                    </div>
                </div>
            </div>

            @endforeach

        </div>
        <div class="row">
            <div class="col-md-12 animate-box">
                <p><a href="{{ route('portfolio') }}" class="btn btn-primary btn-lg btn-load-more"> <i class="fa fa-eye"></i>  See more </i></a></p>
            </div>
        </div>
    </div>
</section>

<section class="colorlib-blog" data-section="blog">
    <div class="colorlib-narrow-content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                <span class="heading-meta">Read</span>
                <h2 class="colorlib-heading">Recent Blog</h2>
            </div>
        </div>
        <div class="row">
            @php
            use Illuminate\Support\Str;
            @endphp
            @foreach (  $blogs as $blog )
                
           
            <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                <div class="blog-entry">
                    <a href="blog.html" class="blog-img">
                        @if($blog->type==0)
                        <iframe width="250" height="115" 
                        src="{{ $blog->video }}" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen>
                    </iframe>
                        @else
                        <img src="{{asset("Storage/$blog->image")}}" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com">
                        @endif
                    </a>
                    <div class="desc">
                        <span><small>
                            {{ \Carbon\Carbon::parse($blog->created_at)->format('j F Y - h.ia') }}
                        </small>
                            <small></span>



                        <h3><a href=" {{  route('blog',['title'=>$blog->title,'id'=>urlencode(Crypt::encrypt($blog->id))]) }}  ">{{$blog->title}}</a></h3>
                     
                        <p>{!! Str::words($blog->blog, 30, '...') !!}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <div class="row">
            <div class="col-md-12 animate-box">
                <p><a href="#" class="btn btn-primary btn-lg btn-load-more"><i class="fa fa-eye"></i> See more </a></p>
            </div>
        </div>
    </div>
</section>

<section class="colorlib-contact" data-section="contact">
    <div class="colorlib-narrow-content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                <span class="heading-meta">Get in Touch</span>
                <h2 class="colorlib-heading">Contact</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                    <div class="colorlib-icon">
                        <i class="fa fa-paper-plane"></i>
                    </div>
                    <div class="colorlib-text">
                        <p><a href="#"><span class="__cf_email__" data-cfemail="2f464149406f4b40424e4641014c4042">{{$social_link?->email}}</span></a></p>
                    </div>
                </div>

                <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                    <div class="colorlib-icon">
                        <i class="fa fa-location-dot"></i>
                    </div>
                    <div class="colorlib-text">
                        <p>{{$social_link?->address}}</p>
                    </div>
                </div>

                <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                    <div class="colorlib-icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="colorlib-text">
                        <p><a href="tel://">{{$social_link?->phone}}</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-md-push-1">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInRight">
                        
                        <form action="{{ route('msgs.store') }}" method="POST">
                            @csrf
                        
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Name" required>
                            </div>
                        
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                        
                            <div class="form-group">
                                <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                            </div>
                        
                            <div class="form-group">
                                <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message" required></textarea>
                            </div>
                        
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-send-message" value="Send Message">
                            </div>
                        </form>

                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</section>



@endsection