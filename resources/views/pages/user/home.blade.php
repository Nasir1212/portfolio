@extends('layout.user.layout')
@section('content')
<section id="colorlib-hero" class="js-fullheight" data-section="home">
    <div class="flexslider js-fullheight">
        <ul class="slides">
            <li style="background-image: url({{asset('assets/images/img_bg_1.jpg')}});">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                            <div class="slider-text-inner js-fullheight">
                                <div class="desc">
                                    <h1>Hi! <br>I'm Tasfia</h1>
                                    <h2>100% html5 bootstrap templates Made by <a href="https://colorlib.com/" target="_blank">colorlib.com</a></h2>
                                    <p><a class="btn btn-primary btn-learn">Download CV  <i class="fas fa-download"></i></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url({{asset('assets/images/img_bg_2.jpg')}});">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                            <div class="slider-text-inner">
                                <div class="desc">
                                    <h1>I am <br>a Marketer</h1>
                                    <h2>100% html5 bootstrap templates Made by <a href="https://colorlib.com/" target="_blank">colorlib.com</a></h2>
                                    <p><a class="btn btn-primary btn-learn">View Portfolio <i class="fas fa-briefcase"></i></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
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
                            <p><strong>Hi I'm Jackson Ford</strong> On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from
                                its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country.</p>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World
                                of Grammar.</p>
                        </div>
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
                        <div class="services color-1">
                            <span class="icon2"><i class="icon-bulb"></i></span>
                            <h3>Graphic Design</h3>
                        </div>
                    </div>
                    <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                        <div class="services color-2">
                            <span class="icon2"><i class="icon-globe-outline"></i></span>
                            <h3>Web Design</h3>
                        </div>
                    </div>
                    <div class="col-md-3 animate-box" data-animate-effect="fadeInTop">
                        <div class="services color-3">
                            <span class="icon2"><i class="icon-data"></i></span>
                            <h3>Software</h3>
                        </div>
                    </div>
                    <div class="col-md-3 animate-box" data-animate-effect="fadeInBottom">
                        <div class="services color-4">
                            <span class="icon2"><i class="icon-phone3"></i></span>
                            <h3>Application</h3>
                        </div>
                    </div>
                </div> --}}
                <div class="row">
                    <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                        <div class="hire">
                            <h2>I am happy to know you <br>that 300+ projects done sucessfully!</h2>
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
            <div class="col-md-4 text-center animate-box">
                <div class="services color-1">
                    <div>
                        <h6 style="margin-bottom:5px;text-align:start">My Service</h6>
                    </div>
               
                    <div class="desc">
                        <h3>Facebook Business Page Optimization </h3>
                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
                    </div>
                    <div>
                        <h4 style="text-align: start">Price : <strong>100$</strong></h4>
                        <a href="#" class=" btn_primary">👋 Hire Me</a>
                    </div>
                </div>
            </div>   

            
            <div class="col-md-4 text-center animate-box">
                <div class="services color-1">
                    <div>
                        <h6 style="margin-bottom:5px;text-align:start">My Service</h6>
                    </div>
               
                    <div class="desc">
                        <h3>Server Side Tracking</h3>
                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
                    </div>
                    <div>
                        <h4 style="text-align: start">Price : <strong>435$</strong></h4>
                        <a href="#" class=" btn_primary">👋 Hire Me</a>
                    </div>
                </div>
            </div>   



            <div class="col-md-4 text-center animate-box">
                <div class="services color-1">
                    <div>
                        <h6 style="margin-bottom:5px;text-align:start">My Service</h6>
                    </div>
               
                    <div class="desc">
                        <h3>Pixel Setup</h3>
                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
                    </div>
                    <div>
                        <h4 style="text-align: start">Price : <strong>100$</strong></h4>
                        <a href="#" class=" btn_primary">👋 Hire Me</a>
                    </div>
                </div>
            </div>   



            <div class="col-md-4 text-center animate-box">
                <div class="services color-1">
                    <div>
                        <h6 style="margin-bottom:5px;text-align:start">My Service</h6>
                    </div>
               
                    <div class="desc">
                        <h3>Facebook Page Monthly Package</h3>
                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
                    </div>
                    <div>
                        <h4 style="text-align: start">Price : <strong>9600$</strong></h4>
                        <a href="#" class=" btn_primary">👋 Hire Me</a>
                    </div>
                </div>
            </div>   



            <div class="col-md-4 text-center animate-box">
                <div class="services color-1">
                    <div>
                        <h6 style="margin-bottom:5px;text-align:start">My Service</h6>
                    </div>
               
                    <div class="desc">
                        <h3>Conversion API</h3>
                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
                    </div>
                    <div>
                        <h4 style="text-align: start">Price : <strong>5600$</strong></h4>
                        <a href="#" class=" btn_primary">👋 Hire Me</a>
                    </div>
                </div>
            </div>   
            <div class="col-md-4 text-center animate-box">
                <div class="services color-1">
                    <div>
                        <h6 style="margin-bottom:5px;text-align:start">My Service</h6>
                    </div>
               
                    <div class="desc">
                        <h3>Facebook Ads Campaign </h3>
                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
                    </div>
                    <div>
                        <h4 style="text-align: start">Price : <strong>5600$</strong></h4>
                        <a href="#" class=" btn_primary">👋 Hire Me</a>
                    </div>
                </div>
            </div>   


        </div>
     
    </div>
</section>

<div id="colorlib-counter" class="colorlib-counters" style="background-image: url({{asset('assets/images/cover_bg_1.jpg')}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="colorlib-narrow-content">
        <div class="row">
        </div>
        <div class="row">
            <div class="col-md-3 text-center animate-box">
                <span class="colorlib-counter js-counter" data-from="0" data-to="309" data-speed="5000" data-refresh-interval="50"></span>
                <span class="colorlib-counter-label">Got Tips</span>
            </div>
            <div class="col-md-3 text-center animate-box">
                <span class="colorlib-counter js-counter" data-from="0" data-to="356" data-speed="5000" data-refresh-interval="50"></span>
                <span class="colorlib-counter-label">Projects</span>
            </div>
            <div class="col-md-3 text-center animate-box">
                <span class="colorlib-counter js-counter" data-from="0" data-to="30" data-speed="5000" data-refresh-interval="50"></span>
                <span class="colorlib-counter-label">Clients</span>
            </div>
            <div class="col-md-3 text-center animate-box">
                <span class="colorlib-counter js-counter" data-from="0" data-to="10" data-speed="5000" data-refresh-interval="50"></span>
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
                <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into
                    the belt and made herself on the way.</p>
            </div>
            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                <div class="progress-wrap">
                    <h3>Photoshop</h3>
                    <div class="progress">
                        <div class="progress-bar color-1" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%">
                            <span>75%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                <div class="progress-wrap">
                    <h3>jQuery</h3>
                    <div class="progress">
                        <div class="progress-bar color-2" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                            <span>60%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                <div class="progress-wrap">
                    <h3>HTML5</h3>
                    <div class="progress">
                        <div class="progress-bar color-3" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                            <span>85%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                <div class="progress-wrap">
                    <h3>CSS3</h3>
                    <div class="progress">
                        <div class="progress-bar color-4" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                            <span>90%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                <div class="progress-wrap">
                    <h3>WordPress</h3>
                    <div class="progress">
                        <div class="progress-bar color-5" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                            <span>70%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                <div class="progress-wrap">
                    <h3>SEO</h3>
                    <div class="progress">
                        <div class="progress-bar color-6" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                            <span>80%</span>
                        </div>
                    </div>
                </div>
            </div>
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
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Master Degree Graphic Design
                                </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Bachelor Degree of Computer Science
                                </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <p>Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics,
                                        a large language ocean.</p>
                                    <ul>
                                        <li>Separated they live in Bookmarksgrove right</li>
                                        <li>Separated they live in Bookmarksgrove right</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Diploma in Information Technology
                                </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <p>Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics,
                                        a large language ocean.</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Diploma in Information Technology
                                </a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                <div class="panel-body">
                                    <p>Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics,
                                        a large language ocean.</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFive">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">High School Secondary Education
                                </a>
                                </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                <div class="panel-body">
                                    <p>Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics,
                                        a large language ocean.</p>
                                </div>
                            </div>
                        </div>
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
                    <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
                        <div class="timeline-entry-inner">

                            <div class="timeline-icon color-1">
                                <i class="fa fa-briefcase" style="color: white;"></i>
                            </div>

                            <div class="timeline-label">
                                <h2><a href="#">Full Stack Developer</a> <span>2017-2018</span></h2>
                                <p>Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how cordial two promise. Greatly who affixed suppose but enquire compact prepare all put. Added forth chief trees
                                    but rooms think may.</p>
                            </div>
                        </div>
                    </article>


                    <article class="timeline-entry animate-box" data-animate-effect="fadeInRight">
                        <div class="timeline-entry-inner">
                            <div class="timeline-icon color-2">
                                <i class="fa fa-briefcase" style="color: white;"></i>
                            </div>
                            <div class="timeline-label">
                                <h2><a href="#">Front End Developer at Google Company</a> <span>2017-2018</span></h2>
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far
                                    World of Grammar.</p>
                            </div>
                        </div>
                    </article>

                    <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
                        <div class="timeline-entry-inner">
                            <div class="timeline-icon color-3">
                                <i class="fa fa-briefcase" style="color: white;"></i>
                            </div>
                            <div class="timeline-label">
                                <h2><a href="#">System Analyst</a> <span>2017-2018</span></h2>
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far
                                    World of Grammar.</p>
                            </div>
                        </div>
                    </article>

                    <article class="timeline-entry animate-box" data-animate-effect="fadeInTop">
                        <div class="timeline-entry-inner">
                            <div class="timeline-icon color-4">
                                <i class="fa fa-briefcase" style="color: white;"></i>
                            </div>
                            <div class="timeline-label">
                                <h2><a href="#">Creative Designer</a> <span>2017-2018</span></h2>
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far
                                    World of Grammar.</p>
                            </div>
                        </div>
                    </article>

                    <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
                        <div class="timeline-entry-inner">
                            <div class="timeline-icon color-5">
                                <i class="fa fa-briefcase" style="color: white;"></i>
                            </div>
                            <div class="timeline-label">
                                <h2><a href="#">UI/UX Designer at Envato</a> <span>2017-2018</span></h2>
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far
                                    World of Grammar.</p>
                            </div>
                        </div>
                    </article>

                    <article class="timeline-entry begin animate-box" data-animate-effect="fadeInBottom">
                        <div class="timeline-entry-inner">
                            <div class="timeline-icon color-none">
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
            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                <div class="project" style="background-image: url({{asset('assets/images/img-1.jpg')}});">
                    <div class="desc">
                        <div class="con">
                            <h3><a href="work.html">My Portfolio Work</a></h3>
                           <p style="color: white;text-align:justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam eligendi numquam nostrum, asperiores deleniti possimus quam aliquam aspernatur recusandae quas expedita consequuntur at deserunt magnam totam, similique iste repellat blanditiis.</p>
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                <div class="project" style="background-image: url({{asset('assets/images/img-2.jpg')}});">
                    <div class="desc">
                        <div class="con">
                            <h3><a href="work.html">Work 02</a></h3>
                            <h3><a href="work.html">My Portfolio Work</a></h3>
                            <p style="color: white;text-align:justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam eligendi numquam nostrum, asperiores deleniti possimus quam aliquam aspernatur recusandae quas expedita consequuntur at deserunt magnam totam, similique iste repellat blanditiis.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 animate-box" data-animate-effect="fadeInTop">
                <div class="project" style="background-image: url({{asset('assets/images/img-3.jpg')}});">
                    <div class="desc">
                        <div class="con">
                            <h3><a href="work.html">Work 03</a></h3>
                            <h3><a href="work.html">My Portfolio Work</a></h3>
                            <p style="color: white;text-align:justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam eligendi numquam nostrum, asperiores deleniti possimus quam aliquam aspernatur recusandae quas expedita consequuntur at deserunt magnam totam, similique iste repellat blanditiis.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 animate-box" data-animate-effect="fadeInBottom">
                <div class="project" style="background-image: url({{asset('assets/images/img-4.jpg')}});">
                    <div class="desc">
                        <div class="con">
                            <h3><a href="work.html">Work 04</a></h3>
                            <h3><a href="work.html">My Portfolio Work</a></h3>
                            <p style="color: white;text-align:justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam eligendi numquam nostrum, asperiores deleniti possimus quam aliquam aspernatur recusandae quas expedita consequuntur at deserunt magnam totam, similique iste repellat blanditiis.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                <div class="project" style="background-image: url({{asset('assets/images/img-5.jpg')}});">
                    <div class="desc">
                        <div class="con">
                            <h3><a href="work.html">Work 05</a></h3>
                            <h3><a href="work.html">My Portfolio Work</a></h3>
                            <p style="color: white;text-align:justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam eligendi numquam nostrum, asperiores deleniti possimus quam aliquam aspernatur recusandae quas expedita consequuntur at deserunt magnam totam, similique iste repellat blanditiis.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                <div class="project" style="background-image: url({{asset('assets/images/img-6.jpg')}});">
                    <div class="desc">
                        <div class="con">
                            <h3><a href="work.html">Work 06</a></h3>
                            <h3><a href="work.html">My Portfolio Work</a></h3>
                            <p style="color: white;text-align:justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam eligendi numquam nostrum, asperiores deleniti possimus quam aliquam aspernatur recusandae quas expedita consequuntur at deserunt magnam totam, similique iste repellat blanditiis.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
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
            <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                <div class="blog-entry">
                    <a href="blog.html" class="blog-img"><img src="{{asset('assets/images/blog-1.jpg')}}" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                    <div class="desc">
                        <span><small>April 14, 2018 </small> | <small> Web Design </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
                        <h3><a href="blog.html">Renovating National Gallery</a></h3>
                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInRight">
                <div class="blog-entry">
                    <a href="blog.html" class="blog-img"><img src="{{asset('assets/images/blog-2.jpg')}}" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                    <div class="desc">
                        <span><small>April 14, 2018 </small> | <small> Web Design </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
                        <h3><a href="blog.html">Wordpress for a Beginner</a></h3>
                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                <div class="blog-entry">
                    <a href="blog.html" class="blog-img"><img src="{{asset('assets/images/blog-3.jpg')}}" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                    <div class="desc">
                        <span><small>April 14, 2018 </small> | <small> Inspiration </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
                        <h3><a href="blog.html">Make website from scratch</a></h3>
                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                </div>
            </div>
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
                        <p><a href="#"><span class="__cf_email__" data-cfemail="2f464149406f4b40424e4641014c4042">FreelancerTasfia@gmail.com</span></a></p>
                    </div>
                </div>

                <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                    <div class="colorlib-icon">
                        <i class="fa fa-location-dot"></i>
                    </div>
                    <div class="colorlib-text">
                        <p>198 West 21th Street, Suite 721 New York NY 10016</p>
                    </div>
                </div>

                <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                    <div class="colorlib-icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="colorlib-text">
                        <p><a href="tel://">+123 456 7890</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-md-push-1">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInRight">
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>
                            <div class="form-group">
                                <textarea name="" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
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