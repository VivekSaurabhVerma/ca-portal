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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.1/dropzone.css">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon_logo.png') }}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/ca2k20.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <title>CA | Techfest, IITBombay</title>
    <style>
        .dropzone {
            background-color: transparent;
            border: 2px solid rgb(255,255,255,0.5);
        }
        #rule-box {
            background-color: #2B2C31;
            box-shadow: 0px 5px 15px 0px black;
            text-align: start;
        }
        #rule-box li {
            margin-top: 0;
            margin-bottom: 5px;
            font-size: 17px;
        }
        .upload-button, .cancel-button {
            width: 7rem;
            border-radius: 0;
            margin-left: 1rem;
            color: white;
        }
        .upload-button {background-color: #6f76fe;}
        .cancel-button {
            background-color: #ed3b3b;
        }
        #upload-buttons {
            justify-content: flex-end;
            position: relative;
            left: 15px;
        }
        @media screen and (max-width: 767.9px) {
            .upload-col {
                width: 80%;
                margin-left: auto;
                margin-right: auto;
            }
            #upload-buttons {
                justify-content: center;
                left: 0;
            }
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            @if ($status == 'uploaded')
            <div class="col-md-12 upload-col">
                <h2>You have already uploaded proofs!</h2>
            </div>
            @else
            <div class="col-md-12 upload-col" style="padding: 0;">
                <form action="{{ route('store1',['id'=>$task->id]) }}"
                    class="dropzone"
                    id="dropzoneForm">
                    @csrf
                </form>
            </div>
            @endif
            <div class="col-md-12 my-3 py-3 upload-col" id="rule-box">
                <h1>RULES FOR VERIFICATION</h1>
                <ul>
                    <li>First, make sure to Like and Share the post yourself. The links have been provided below, so make sure you like and share the post.</li>
                    <li>Comment and Tag your friends in the post on the Techfest page. Let us know how excited you feel about the theme!</li>
                    <li>Share the post to your Facebook timeline and to any and every students' facebook groups of which you may be a member.</li>
                    <li>Add it to your Facebook, Instagram, and WhatsApp stories.</li>
                    <li>Upload images(screenshots) of your sharing of posts on social media.</li>
                    <li>Make sure to share with as many people as possible on Whatsapp too!</li>
                    <li>If you are on Twitter and LinkedIn. Make sure to like, and share/retweet the post there also!</li>
                    <li style="color: red;">Duplicate or false images will be heavily penalized!</li>
                    <li>Submit an image of the poster on the noticeboard with the poster on it.</li>
                    <li>The image should give us an idea of the location of the poster as well as the number of viewers the poster is visible too.</li>
                    <li>The image file should be less than 2MB in size.</li>
                    <li>The Techfest name and logo should be clearly visible in the photograph.</li>
                </ul>
            </div>
        </div>
        <div class="mb-3" id="upload-buttons" style="display: flex; flex-direction: row;">
            @if ($status != 'uploaded')
            <button type="button" class="btn upload-button" id="submit-all">Upload</button>
            <a class="btn cancel-button" href="{{ route('home') }}">Cancel</a>
            @else
            <a class="btn cancel-button" href="{{ route('home') }}">Back</a>
            @endif


        </div>
    </div>

    <script>
        Dropzone.options.dropzoneForm={
            autoProcessQueue : false,
            acceptedFiles : ".png,.jpg,.gif,.bmp,.jpeg",

            init: function(){
                var submitButton = document.querySelector("#submit-all");
                myDropzone = this;

                submitButton.addEventListener('click', function(){
                    myDropzone.processQueue();
                });

                // this.on("complete", function(){
                //     window.location.href = '/home';
                // });
                this.on("complete", function(){
                    if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0)
                    {
                    var _this = this;
                    _this.removeAllFiles();
                    window.location.href = '/home';
                    }
                    load_images();
                });
            }
        };
    </script>

</body>
</html>
