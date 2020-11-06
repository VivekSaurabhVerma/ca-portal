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

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.1/dropzone.js"></script>
    @yield('javascript')

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Catamaran&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.1/dropzone.css">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon_logo.png') }}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/ca2k20.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <title>CA | Techfest, IIT-Bombay</title>
    <style>
        body {
            font-family: 'Open Sans';
        }
        #update-form {
            background-color:#2B2C31;
            box-shadow: 0px 5px 15px 0px black;
        }
        .form-group > label{
            color: white;
            font-size: 1rem;
        }
        .form-group > input {
            color: white;
            font-size: 1.5rem;
        }
        ::-webkit-input-placeholder { /* Chrome/Opera/Safari */
            color:  white;
        }
            ::-moz-placeholder { /* Firefox 19+ */
            color:  white;
        }
            :-ms-input-placeholder { /* IE 10+ */
            color:  white;
        }
            :-moz-placeholder { /* Firefox 18- */
            color:  white;
        }
        input[placeholder], [placeholder], *[placeholder] {
            color: white !important;
        }
        input:focus {
            color: white;
            opacity: 1;
        }
        .btn {
            border-radius: 0;
            width: 7rem;
            color: white;
            box-shadow: 5px 5px 15px 5px #121212;
        }
        .submit-button {
            background-color: #6f76fe;
        }
        .cancel-button {
            background-color: #ed3b3b;
        }
        @media screen and (min-width: 768px){
            #logo {
                width: 17%;
                position: relative;
                top: 2.5rem;
                left: 1rem;
            }
        }

        @media screen and (max-width: 767.99px) {
            #update-form {
                width: 100% !important;
                margin-left: auto;
                margin-right: auto;
            }
            #update-box {
                padding-left: 30px;
                padding-right: 30px;
            }
            #update-title {
                font-size: 1.5rem;
            }
            #button-container {
                display: flex;
                justify-content: center;
            }
            #logo {
                width: 40%;
                position: relative;
                top: 1.5rem;
                left: 1rem;
            }
        }
    </style>
</head>
<body>
    <a class="" href="http://techfest.org/" target="_blank"><img id="logo" src="{{ asset('img/logo.png') }}"></a>
    <div class="container mb-5" style="margin-top: 4rem;" id="update-box">
        <h1 id="update-title" style="text-align: right; font-family: 'Catamaran;'">UPDATE YOUR DETAILS</h1>
        @isset($user)
            <form action="{{ route('updateca',['id'=>$user->id]) }}" method="post">
                @csrf
                <div class="row py-3" id="update-form">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{$user->name}}" >
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="number" class="form-control" id="phone" min="1000000000" max="9999999999" placeholder="Phone Number" name="phone" value="{{$user->phone ?? ''}}" >
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="college">College Name</label>
                            <input type="text" class="form-control" id="college" placeholder="College Name" name="college" value="{{$user->college ?? ''}}">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="pincode">Pincode</label>
                            <input type="number" class="form-control" id="pincode" min="100001" max="999999" placeholder="Pincode" name="pincode" value="{{$user->pincode ?? ''}}">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="phone">Address</label>
                            <input type="text" class="form-control" id="address" placeholder="Address" name="address" value="{{$user->address ?? ''}}">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="year">Year of study</label>
                            <input type="number" class="form-control" id="year" min="1" max="5" placeholder="Year" name="year" value="{{$user->year ?? ''}}">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="referral">CA Reference email</label>
                            @if ($user->referral != NULL)
                            <input type="text" class="form-control" id="referral" placeholder="CA Reference Email" name="referral" disabled value="{{$user->referral ?? ''}}">
                            @else
                            <input type="text" class="form-control" id="referral" placeholder="CA Reference Email" name="referral" value="{{$user->referral ?? ''}}">
                            @endif

                        </div>
                    </div>
                </div>
                <div class="mt-3" id="button-container">
                    <button type="submit" class="btn form-button submit-button mr-3" >Submit</button>
                    <a class="btn form-button cancel-button" href="{{ route('home') }}">Cancel</a>
                </div>
            </form>
        @endisset
    </div>
</body>



