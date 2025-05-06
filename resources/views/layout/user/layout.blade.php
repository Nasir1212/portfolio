<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Jackson Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('assets/css/icomoon.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{asset('assets/css/flexslider.css')}}">
    <!-- Flaticons  -->
    <link rel="stylesheet" href="{{asset('assets/fonts/flaticon/font/flaticon.css')}}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
    <!-- Theme style  -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <!-- Modernizr JS -->
    <script src="{{asset('assets/js/modernizr-2.6.2.min.js')}}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

    <style>
        .btn_primary {
    background-color: #007bff;
    color: white;
    padding: 5px 12px;
    font-size: 12px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
}

.btn_primary:hover {
    background-color: #0056b3;
    color: white;
    font-weight: bold;
}
.services .desc h3 {
    text-align: start;
}


.c_navbar {
    background-color:#20477E;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 6px 0px;
}
        .c_navbar-brand {
            color: white;
            font-size: 24px;
            font-weight: bold;
            text-decoration: none;
        }
        .c_nav-links {
            list-style: none;
            display: flex;
        }
        .c_nav-links li {
            margin: 0 15px;
        }
        .c_nav-links a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            transition: color 0.3s;
        }
        .c_nav-links a:hover {
            color: #FFD700;
        }
        .c_menu-toggle {
            display: none;
            font-size: 24px;
            color: white;
            cursor: pointer;
        }
        @media (max-width: 768px) {
            /* .c_nav-links {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 60px;
                left: 0;
                width: 100%;
                background-color: #007BFF;
                text-align: center;
                padding: 10px 0;
            } */
            .c_nav-links.active {
                display: flex;
            }
            .c_menu-toggle {
                display: block;
            }
        }

        @media (max-width: 425px) {
            .c_nav-links li {
    margin: 0 9px;
}
        }

    </style>

</head>

<body>
    
    <div id="colorlib-page">
        <div class="container-wrap">
            <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
            @include("layout.user.aside")
            <div id="colorlib-main">
                <section class="custom_nav">
                    <nav class="c_navbar">
                        {{-- <a href="#" class="c_navbar-brand">My Portfolio</a> --}}
                        {{-- <span class="c_menu-toggle" onclick="toggleMenu()">☰</span> --}}
                        <ul class="c_nav-links" id="navLinks">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><a href="{{route('order')}}">Hire Me</a></li>
                            <li><a href="{{route('blogs')}}">Blog</a></li>
                            <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                         
                        </ul>
                    </nav>
                </section>
                @yield("content") 

            </div>
            <!-- end:colorlib-main -->
        </div>
        <!-- end:container-wrap -->
    </div>
    <!-- end:colorlib-page -->

    <!-- jQuery -->
    <script data-cfasync="false" src="{{url('/')}}/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <!-- jQuery Easing -->
    <script src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- Waypoints -->
    <script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
    <!-- Flexslider -->
    <script src="{{asset('assets/js/jquery.flexslider-min.js')}}"></script>
    <!-- Owl carousel -->
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <!-- Counters -->
    <script src="{{asset('assets/js/jquery.countTo.js')}}"></script>


    <!-- MAIN JS -->
    <script src="{{asset('assets/js/main.js')}}"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        // window.dataLayer = window.dataLayer || []; 
        // function gtag() {
        //     dataLayer.push(arguments);
        // } 
        // gtag('js', new Date());

        //  
        // gtag('config', 'UA-23581568-13');
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            @if (session('success'))
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    icon: 'success',
                    title: @json(session('success')),
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                });
            @elseif (session('warning'))
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    icon: 'warning',
                    title: @json(session('warning')),
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                });
            @endif
        });
    </script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"9246c5e14d5c7c40","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"version":"2025.3.0","token":"cd0b4b3a733644fc843ef0b185f98241"}'
        crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/d479b27924.js" crossorigin="anonymous"></script>

    </body>

</html>