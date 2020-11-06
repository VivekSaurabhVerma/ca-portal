<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta property="og:url" content="https://techfest.org/ca" />
    <meta property="" content="https://techfest.org/ca" />
    <meta property="og:title" content=" Become a part of Asia's Largest Science and Technology Festival: Techfest, IIT Bombay today!" />
    <meta property="og:image" content="http://techfest.org/2019/ca/homepage/img/flicker.jpg" />
    <link rel="shortcut icon" type="image/x-icon" href="/2019/ca/images/favicon_logo.png" />
    <meta name="description" content="Become a part of Asia's Largest Science and Technology Festival: Techfest, IIT Bombay today! Join the Techfest College Ambassador Program NOW!">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Techfest">
    <meta name="keywords" content="cr, ca, college ambassador, job, student job, college job, summer inrern, summer job, college representative, college rep, campus ambassador, campus representative, campus intern, techfest, techfest IIT Bombay, IIT Bombay, techfest college ambassador, techfest college representative, iit intern, techfest intern, intern, campus abassador, campus representative, college, opportunity, ambassador, resume, skill development, intern opportunity,  Asia's largest science and technology festival, science, tecnology, STEM, engineering, campus, IIT, Indian Institute of Technology, network, India, Pan india, student ambassador, student representative, student intern, techfest 2019-2020">
    <meta name="viewport" content= "width=device-width, user-scalable=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#000000">

    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#000000">

    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#000000">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-81222017-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-81222017-1');
    </script> --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon_logo.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.5.0/materia/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <title>{{ config('app.name', 'CA | Techfest, IIT Bombay') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.1/dropzone.css">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon_logo.png') }}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/ca2k20.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <title>CA | Techfest, IIT-Bombay</title>
    <style>
        #heading{
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            text-align: right;
            padding-right: 15px;
        }
        .wel-head {
            color: #6f76fe;
        }
        .dashboard-row{
            width: 80%;
            margin-left: auto;
            margin-top: 5rem;
        }
        .dashboard-row > .column {
            padding-right: 0;
        }
        .card-body {
            background-color: #2B2C31;
            text-align: right;
            height: 10rem;
            box-shadow: 0px 5px 15px 0px black;
        }
        .avatar {
            height: 130px;
            width: 130px;
            border-radius: 50%;
            position: absolute;
            top: -35%;
            right: 33%;
        }
        .task-row {
            width: 76%;
            margin-left: auto;
            background-color: #2B2C31;
            text-align: right;
            margin-right: 0;
            box-shadow: 0px 5px 15px 0px black;
        }
        .task-desc {
            line-height: 1.4;
            font-size: 1rem;
        }
        .social-icon {
            font-size: 2.5rem;
            margin-left: 1rem;
            margin-right: 1rem;
            position: relative;
            top: 15px;
            opacity: 0.25;
        }
        a.social-icon, a.m-social-icon, a.tf-social-icon {
            color: white;
            text-decoration: none;
        }
        .social-icon:hover {
            opacity: 1;
        }
        .upload-button {
            background-color: #6f76fe;
            color: white;
            border-radius: 0;
            width: 10rem;
            margin-left: 1rem;
            margin-right: 1rem;
        }
        .points-button {
            cursor: default !important;
            width: 8rem;
            border-radius: 0;
            color: white;
            border: 1.5px solid white;
            margin-left: 1rem;
        }
        .points-button:hover{color:white;}
        .ca-details {
            display: flex;
            flex-direction: row;
            justify-content: flex-end;
        }
        .ca-pos {
            font-size: 1rem;
            position: relative;
            top: 3px;
            margin-right: 0.5rem;
        }
        .ca-details i, .contact-desc i {
            font-size: 1.5rem;
            margin-left: 1rem;
        }
        .terms-row, .contact-row {
            width: 76%;
            margin-left: auto;
            background-color: #2B2C31;
            text-align: right;
            margin-right: 0;
            box-shadow: 0px 5px 15px 0px black;
        }
        .nav-link.active {
            font-size: 1rem;
            font-weight: normal;
        }
        .terms-head, .contact-head {
            width: 76%;
            margin-left: auto;
            background-color: inherit;
            text-align: right;
            margin-right: 0;
            display: flex;
            justify-content: flex-end;
        }
        #terms-content {
            font-size: 1rem;
            opacity: 0.5;
        }
        .contact-desc {
            display: flex;
            flex-direction: row;
            justify-content: flex-end;
        }
        .contact-desc h3 {
            opacity: 0.5;
        }
        .tf-social-icon {
            font-size: 2.5rem;
            margin-left: 2rem;
            position: relative;
            opacity: 0.25;
        }
        .tf-social-icon:hover{
            opacity: 1;
        }
        /* For mobile */
        .task-body, .tandc-body {
            background-color: #2B2C31;
            text-align: right;
            box-shadow: 0px 5px 15px 0px black;
        }
        .task-body p, .tandc-body p {
            opacity: 0.5;
        }
        .m-social-icon {
            font-size: 2rem;
            margin-left: 1rem;
            margin-right: 1rem;
            position: relative;
            top: 0px;
            opacity: 0.25;
        }
    </style>
</head>
<body data-spy="scroll" data-target="#side-navbar" data-offset="0">
    <nav class="navbar navbar-expand-md navbar-dark fixed-left" id="side-navbar">
        <a class="navbar-brand" href="http://techfest.org/" target="_blank"><img id="logo" src="{{ asset('img/logo.png') }}"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#caNavbar" aria-controls="caNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="caNavbar">
            <ul class="navbar-nav">
                <li class="nav-item d-nav-item">
                    <a class="nav-link" href="{{ route('update') }}">UPDATE PROFILE</a>
                </li>
                <li class="nav-item m-nav-item">
                    <a class="nav-link" data-toggle="collapse" data-target="#caNavbar" href="{{ route('update') }}">UPDATE PROFILE</a>
                </li>
                <li class="nav-item d-nav-item">
                    <a class="nav-link" href="#dashboard">DASHBOARD</a>
                </li>
                <li class="nav-item m-nav-item">
                    <a class="nav-link" data-toggle="collapse" data-target="#caNavbar" href="#m-dashboard">DASHBOARD</a>
                </li>
                <li class="nav-item d-nav-item">
                    <a class="nav-link" href="#terms">TERMS & CONDITIONS</a>
                </li>
                <li class="nav-item m-nav-item">
                    <a class="nav-link" data-toggle="collapse" data-target="#caNavbar" href="#m-tandc">TERMS & CONDITIONS</a>
                </li>
                <li class="nav-item d-nav-item">
                    <a class="nav-link" href="#contact-us">CONTACT US</a>
                </li>
                <li class="nav-item m-nav-item">
                    <a class="nav-link" data-toggle="collapse" data-target="#caNavbar" href="#m-contact-us">CONTACT US</a>
                </li>
                <li class="nav-item d-nav-item">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">LOGOUT</a>
                </li>
                <li class="nav-item m-nav-item">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">LOGOUT</a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </ul>
        </div>
    </nav>
    <div id="mobile-container">
        @include('ca_m-dashboard')
    </div>
    <div id="desktop-container">
        <div class="container" id="dashboard" >
            <div class="row mt-5" id="heading">
                <h2 style="font-family: 'Catamaran';">Hi {{$user->name}},</h2>
                <h1 class="wel-head">Welcome back!</h1>
            </div>
        </div>
        <div class="container">
            <div class="row dashboard-row">
                <div class="column col-md-6 col-sm-12">
                    <div class="card-body px-3 mx-3">
                        <h2 class="card-title">QUEST</h2>
                        <p class="card-text"><h3 style="font-weight: normal;">100 points for the next milestone</h3></p>
                        <p class="card-text"><h5 style="font-weight: normal">You will get GrabOn coupons worth Rs. 500</h5></p>
                    </div>
                </div>
                <div class="column col-md-6 col-sm-12">
                    <div class="card-body px-3 mx-3">
                        @if($user->avatar)
                                <img src="{{ $user->avatar }}" class="avatar mr-1" alt="Techfest College Ambassador avatar">
                        @endif
                        <div style="display: flex; flex-direction: row; position: absolute; bottom: 5%;">
                            <i class="far fa-star ca-pos"></i>
                            <h4>Rank: {{$user->rank}}</h4>
                        </div>
                        <div style="display: flex; flex-direction: row; position: absolute; bottom: 5%; right: 7%">
                            <i class="fas fa-certificate ca-pos"></i>
                            <h4>Points: {{$user->points}}</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row dashboard-row mt-3">
                <div class="column col-md-6 col-sm-12">
                    <div class="card-body px-3 mx-3">
                        <h2 class="card-title">INCENTIVES</h2>
                        <p class="card-text">GOLD CERTI + INTERNSHIP + COUPONS + COURSES</p>
                    </div>
                </div>
                <div class="column col-md-6 col-sm-12">
                    <div class="card-body px-3 mx-3">
                        <div class="ca-details">
                            <h4>{{$user->name}}</h4>
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="ca-details">
                            <h4>{{$user->email}}</h4>
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="ca-details">
                            <h4>CA-20{{$user->id}}</h4>
                            <i class="far fa-id-card"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            @foreach ($tasks as $task)
            <div class="row task-row py-3">
                <div class="column col-md-12"><h2>{{$task->title}}</h2></div>
                <div class="column col-md-12 task-desc" style="opacity: 0.5;">{!! $task->desc !!}</div>
                <div class="column col-md-12">
                    <a class="fab fa-twitter social-icon" href="{{$task->twitter_link}}" target="_blank"></a>
                    <a class="fab fa-linkedin-in social-icon" href="{{$task->linkedin_link}}" target="_blank"></a>
                    <a class="fab fa-facebook-f social-icon" href="{{$task->fb_link}}" target="_blank"></a>
                    <a class="fab fa-instagram social-icon" href="{{$task->insta_link}}" target="_blank"></a>
                    <a href="{{ route('upload', ['id'=>$task->id]) }}" class="btn upload-button">Upload</a>
                    <button class="btn points-button">{{$task->points}} PTS</button>
                </div>
            </div>
            @endforeach
        </div>
        <div class="container my-5" id="terms">
            <div class="row terms-head">
                <h1>TERMS & CONDITIONS</h1>
            </div>
            <div class="row terms-row">
                <div class="col-md-12 py-3" id="terms-content">
                <p>All proofs submitted by you should be genuine to the fullest extent of your knowlegde.</p>
                <p>Certification and incentives except quest rewards will only be provided on successful completion of the tenure.</p>
                <p>Techfest, IIT Bombay holds the right to retract the Ambassadorship from you or appoint additional ambassadors if your performance is unsatisfactory you violate the aforementioned terms and conditions.</p>
                <p>Techfest, IIT Bombay shall have discretionary and final authority to determine the validity of any claim. Any decision made by Techfest in connection with the program is final and binding on all parties involved.</p>
                </div>
            </div>
        </div>
        <div class="container my-5" id="contact-us">
            <div class="row contact-head">
                <h1>CONTACT US</h1>
            </div>
            <div class="row contact-row p-3" style="flex-direction: column;">
                <div class="contact-desc">
                    <h3>Siddharth Singh</h3>
                    <i class="fas fa-user"></i>
                </div>
                <div class="contact-desc">
                    <h3>Publicity Manager, Techfest</h3>
                    <i class="fas fa-award"></i>
                </div>
                <div class="contact-desc">
                    <h3>ca@techfest.org</h3>
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="contact-desc">
                    <h3>+91 932 695 6401</h3>
                    <i class="fas fa-phone-alt"></i>
                </div>
                <div class="mt-3" style="display: flex; flex-direction: row; justify-content: flex-end;">
                    <a class="fab fa-twitter tf-social-icon" href="https://twitter.com/Techfest_IITB" target="_blank"></a>
                    <a class="fab fa-linkedin-in tf-social-icon" href="https://www.linkedin.com/company/techfest/" target="_blank"></a>
                    <a class="fab fa-facebook-f tf-social-icon" href="https://www.facebook.com/iitbombaytechfest" target="_blank"></a>
                    <a class="fab fa-instagram tf-social-icon" href="https://www.instagram.com/techfest_iitbombay/" target="_blank"></a>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Select all links with hashes
    $('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
        // On-page links
        if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
        &&
        location.hostname == this.hostname
        // console.log(this.hostname);
        ) {
        // Figure out element to scroll to
        var target = $(this.hash);
        // console.log(target[0].id);

        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        // Does a scroll target exist?
        if (target.length) {
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            $('html, body').animate({
            scrollTop: target.offset().top
            }, 1000, function() {
            // Callback after animation
            // Must change focus!
            // var $target = $(target);
            // $target.focus();
            // if ($target.is(":focus")) { // Checking if the target was focused
            //     return false;
            // } else {
            //     $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            //     $target.focus(); // Set focus again
             });
            };
        }

    });
    </script>
</body>
</html>
