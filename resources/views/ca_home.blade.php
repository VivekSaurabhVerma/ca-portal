<!DOCTYPE html>
<html lang="en">

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
    <link href="https://fonts.googleapis.com/css2?family=Catamaran&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/ca2k20.css') }}">
    <link rel="stylesheet" href="{{asset('css/jquery.flipster.min.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="{{ asset('js/jquery.flipster.min.js') }}"></script>
    <title>CA | Techfest, IIT-Bombay</title>
</head>
<body data-spy="scroll" data-target="#side-navbar" data-offset="0">
    <nav class="navbar navbar-expand-md navbar-dark fixed-left" id="side-navbar">
        <a class="navbar-brand" href="http://techfest.org/"><img id="logo" src="{{ asset('img/logo.png') }}"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav">
                <li class="nav-item d-nav-item">
                    <a class="nav-link" href="#about-us">ABOUT US</a>
                </li>
                <li class="nav-item m-nav-item">
                    <a class="nav-link" data-toggle="collapse" data-target="#navbarsExampleDefault" href="#m-about-us">ABOUT US</a>
                </li>
                <li class="nav-item d-nav-item">
                    <a class="nav-link" href="#why-ca">WHY BECOME A CA?</a>
                </li>
                <li class="nav-item m-nav-item">
                    <a class="nav-link" data-toggle="collapse" data-target="#navbarsExampleDefault" href="#m-why-ca">WHY BECOME A CA?</a>
                </li>
                <li class="nav-item d-nav-item">
                    <a class="nav-link" href="#incent-section">INCENTIVES</a>
                </li>
                <li class="nav-item m-nav-item">
                    <a class="nav-link" data-toggle="collapse" data-target="#navbarsExampleDefault" href="#m-incentives">INCENTIVES</a>
                </li>
                <li class="nav-item d-nav-item">
                    <a class="nav-link" href="#responsibilities">RESPONSIBILITES</a>
                </li>
                <li class="nav-item m-nav-item">
                    <a class="nav-link" data-toggle="collapse" data-target="#navbarsExampleDefault" href="#m-responsibilities">RESPONSIBILITES</a>
                </li>
                <li class="nav-item d-nav-item">
                    <a class="nav-link" href="#testimonials">TESTIMONIALS</a>
                </li>
                <li class="nav-item m-nav-item">
                    <a class="nav-link" data-toggle="collapse" data-target="#navbarsExampleDefault" href="#m-testimonials">TESTIMONIALS</a>
                </li>
                <li class="nav-item d-nav-item">
                    <a class="nav-link" href="#faqs">FAQS</a>
                </li>
                <li class="nav-item m-nav-item">
                    <a class="nav-link" data-toggle="collapse" data-target="#navbarsExampleDefault" href="#m-faqs">FAQS</a>
                </li>
                <li class="nav-item d-nav-item">
                    <a class="nav-link" href="#contact">CONTACT US</a>
                </li>
                <li class="nav-item m-nav-item">
                    <a class="nav-link" data-toggle="collapse" data-target="#navbarsExampleDefault" href="#m-contact">CONTACT US</a>
                </li>
            </ul>
            <a href="{{ url('auth/google') }}"><img id="google-xl" src="{{asset('img/google.svg') }}" alt=""></a>
        </div>
    </nav>
    <div class="container-fluid" id="mobile-container" style="padding: 0;">
        @include('ca_m-home')
    </div>
    <div class="container-fluid" id="desktop-container" style="padding: 0;">
        <div id="home">
            <div id="home-title">
                <h1>College</h1>
                <h1>Ambassador</h1>
                <h1 style="font-weight: normal;font-size: 3.5rem; opacity: 0.7;">Portal</h1>
                <a href="{{ url('auth/google') }}"><img id="google-sm" src="{{asset('img/google.svg') }}" alt=""></a>
            </div>
        </div>

        <div id="about-us">
            <h1 id="aboutus-title">About Us</h1>
            <p id="aboutus-desc">Techfest, IIT Bombay is an annual, open-to-all college fest first held in 1998 with a mission to promote technology, scientific thinking, and innovation. Today, Techfest is Asia's Largest Science and Technology Festival with an astounding annual footfall of 1.75+ lakh, and a reach spread out over 2500 colleges, including more than 500 international universities. With a plethora of workshops, competitions, lectures, conferences, exhibitions, performances, and various other events, Techfest is a College festival you surely want to be a part of!</p>
        </div>
        <div class="container">

        </div>
        <div id="why-ca">
            <h1 id="whyca-title">Why become a CA?</h1>
            <div id="whyca-blocks">
                <div class="whyca-block">
                    <h3>You are</h3>
                    <h2>INQUISITIVE</h2>
                    <p>You want to improve your skill set and are open to exploring new opportunities to learn & grow</p>
                </div>
                <div class="whyca-block">
                    <h3>You are</h3>
                    <h2>INNOVATIVE</h2>
                    <p>You are creative, tech-savy, enjoy analytical problem solving and thinking outside the box</p>
                </div>
                <div class="whyca-block">
                    <h3>You are</h3>
                    <h2>LEADER</h2>
                    <p>Improve your management skills and enhance your image</p>
                </div>
                <div class="whyca-block">
                    <h3>You are</h3>
                    <h2>UP TO DATE</h2>
                    <p>You are curious about science and technology in general and tuned in to recent trends in science and technology</p>
                </div>
            </div>
        </div>

        <div id="incent-section">
            <h1 id="incentives-title">Incentives</h1>
            <div id="incentives-blocks"  >
                <div class="incentive-block">
                    <h3>INTERNSHIP WITH</h3>
                    <h3>TECHFEST</h3>
                    <p>Top 1000 CAs shall get a Social Media Marketing Internship certificate from Techfest, IIT Bombay</p>
                    <img class="incent-image" src="{{ asset('img/fast-food.svg') }}" alt="">
                </div>
                <div class="incentive-block">
                    <h3>INTERNSHIP</h3>
                    <h3>OPPORTUNITIES</h3>
                    <p>Top 100 CAs shall get internship opportunities with fast rising starting-startups</p>
                    <img class="incent-image" src="{{ asset('img/internship.svg') }}" alt="">
                </div>
                <div class="incentive-block">
                    <h3>QUESTS</h3>
                    <p>More points mean More rewards, complete quests before other CAs to get exclusive rewards during the CA program</p>
                    <img class="incent-image" src="{{ asset('img/certificate.svg') }}" alt="">
                </div>
                <div class="incentive-block">
                    <h3>FREE COURSES</h3>
                    <p>Free Microsoft courses worth INR 1,40,000 from Millionlights to be given to top 20 College Ambassadors</p>
                    <img class="incent-image" src="{{ asset('img/fast-food.svg') }}" alt="">
                </div>
                <div class="incentive-block">
                    <h3>FREE FOOD</h3>
                    <h3>COUPONS</h3>
                    <p>Coupons worth INR 30,000 will be given to top performing College Ambassadors.</p>
                    <img class="incent-image" src="{{ asset('img/internship.svg') }}" alt="">
                </div>
            </div>
        </div>

        <div id="responsibilities">
            <h1 id="responsibilities-title">Responsibilities</h1>
            <div id="responsibilities-block">
                <div class="responsibility">
                    <div class="responsibility-desc">
                        <h3>Publicize</h3>
                        <p>Spread awareness about Techfest's events and competitions in your college</p>
                    </div>
                    <img src="{{ asset('img/publicize.svg') }}" alt="">
                </div>
                <div class="responsibility">
                    <div class="responsibility-desc">
                        <h3>Ideate</h3>
                        <p>Strategize and drive innovative word of mouth campaigns in college activities and events</p>
                    </div>
                    <img src="{{ asset('img/publicize.svg') }}" alt="">
                </div>
                <div class="responsibility">
                    <div class="responsibility-desc">
                        <h3>Promote</h3>
                        <p>Ensure enthusiastic participation from your college at Techfest 2020-2021</p>
                    </div>
                    <img src="{{ asset('img/publicize.svg') }}" alt="">
                </div>
                <div class="responsibility">
                    <div class="responsibility-desc">
                        <h3>Organize</h3>
                        <p>Plan and organize events in your college with the support of Techfest, IIT Bombay</p>
                    </div>
                    <img src="{{ asset('img/publicize.svg') }}" alt="">
                </div>
                <div class="responsibility">
                    <div class="responsibility-desc">
                        <h3>Represent</h3>
                        <p>Act as a representative for Techfest, IIT Bombay promoting the festival in your circles</p>
                    </div>
                    <img src="{{ asset('img/publicize.svg') }}" alt="">
                </div>
            </div>
        </div>

        <div id="testimonials">
            <h1 id="testimonials-title">Testimonials</h1>
            <div id="testimonials-blocks"  >
                <div id="carousel">
                    <ul class="flip-items">
                        <li>
                            <div class="flipster-card">
                                <img class="mb-3" src="{{ asset('img/person1.jpg') }}">
                                <h4 style="text-align: center;">Prateek Bhongade</h4>
                                <p>Being a CA helped me grow from a shy and quiet person to someone who can speak up freely. So, I would encourage anyone that likes meeting new people and wants to learn something new, to join our CA family next year.</p>
                            </div>
                        </li>
                        <li>
                            <div class="flipster-card">
                                <img class="mb-3" src="{{ asset('img/person1.jpg') }}">
                                <h4 style="text-align: center;">Rajnandini Yadav</h4>
                                <p>Being a CA of Techfest, IIT Bombay was a great learning curve for me and I learned skills like social media marketing, communication skills, and networking. The people and the culture of techfest are equally amazing.</p>
                            </div>
                         </li>
                        <li>
                            <div class="flipster-card">
                                <img class="mb-3" src="{{ asset('img/person1.jpg') }}">
                                <h4 style="text-align: center;">Yashad Margaj</h4>
                                <p>The experience gained through this CA program has not only helped me secure internship opportunities but will also help me when I apply for jobs in the future. I would encourage students to apply for this program and jumpstart their journey to a successful career.</p>
                            </div>
                        </li>
                        <li>
                            <div class="flipster-card">
                                <img class="mb-3" src="{{ asset('img/person1.jpg') }}">
                                <h4 style="text-align: center;">Saurabh Bhandari</h4>
                                <p>Working with a great team of staff and fellow students on varied events made each day different and exciting. It is a great way to meet new people and develop yourself as a person.</p>
                            </div>
                        </li>
                        <li>
                            <div class="flipster-card">
                                <img class="mb-3" src="{{ asset('img/person1.jpg') }}">
                                <h4 style="text-align: center;">Pradip Bade</h4>
                                <p>Throughout my time as a Senior Ambassador, I’ve enjoyed being the first contact for students. I’ve not only enjoyed being able to share my personal experience here but also be the person that often brings a sense of ease about the stress of university.</p>
                            </div>
                        </li>
                    </ul>
                </div>

            <script>
                var carousel = $("#carousel").flipster({
                    style: 'carousel',
                    spacing: -0.5,
                    nav: false,
                    buttons:   true,
                    loop: true,
                    scrollwheel: false,
                });
            </script>

            <pre class="code">$("#carousel").flipster({
                style: 'carousel',
                spacing: -0.5,
                nav: true,
                buttons: true,
            });</pre>
            </div>
        </div>

        <div id="faqs">
            <h1 id="faqs-title">FAQS</h1>
            <div id="faqs-container">
                <div class="question" id="qa">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    <h3>What does it mean to be a College Ambassador?</h3>
                </div>
                <div class="answer" id="aa">
                    <p>A College Ambassador is a representative of Techfest at their institution. They act as the crucial link between the two and are the first point of contact for any student who requires information or assistance with regards to Techfest.</p>
                </div>
                <div class="question" id="qb">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    <h3>Am I eligible to be a College Ambassador?</h3>
                </div>
                <div class="answer" id="ab">
                    <p>As long as you have a valid college ID, you are set to become a CA.</p>
                </div>
                <div class="question" id="qc">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    <h3>How can I apply for the post of a College Ambassador?</h3>
                </div>
                <div class="answer" id="ac">
                    <p>Click on the registration button above to apply now! A Google account is mandatory and once the registration is complete, the email address is fixed. Allow any pop-ups if asked for.</p>
                </div>
                <div class="question" id="qd">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    <h3>What are my responsibilities as a CA?</h3>
                </div>
                <div class="answer" id="ad">
                    <p>As a College Ambassador, you will be required to share Techfest’s posts on all social media platforms and put up the posters on your college notice boards. You will also be instrumental in conducting workshops under Techfest, IIT Bombay in your college.</p>
                </div>
                <div class="question" id="qe">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    <h3>How long is the College Ambassador program? How much time and effort would I have to invest?</h3>
                </div>
                <div class="answer" id="ae">
                    <p>You are expected to put in 1-2 hours a week, until the dates of Techfest. Consistent commitment and sincerity toward the assigned tasks are required.</p>
                </div>
                <div class="question" id="qf">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    <h3>Can there be multiple College Ambassadors from one college?</h3>
                </div>
                <div class="answer" id="af">
                    <p>As per necessity Techfest, IIT Bombay can appoint more than one college ambassador from one institution.</p>
                </div>
                <div class="question" id="qg">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    <h3>How will my progress be monitored?</h3>
                </div>
                <div class="answer" id="ag">
                    <p>An online CA portal will be maintained where we will track you as and when you update the progress of your tasks. You can also feel free to contact your mentors.</p>
                </div>
                <div class="question" id="qh">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    <h3>My points aren’t updated, what do I do?</h3>
                </div>
                <div class="answer" id="ah">
                    <p>Send in a mail to ca@techfest.org including the exact problem, or fill in a query. We shall look into it and get back to you at the earliest.</p>
                </div>
            </div>
        </div>

        <div id="contact">
            <h1 id="contact-title">Contact Us</h1>
            <div id="contact-block">
                <div class="contact-content">
                    <h3>Siddharth Singh</h3>
                    <i class="fas fa-user"></i>
                </div>
                <div class="contact-content">
                    <h3>Publicity Manager, Techfest</h3>
                    <i class="fas fa-award"></i>
                </div>
                <div class="contact-content">
                    <h3>ca@techfest.org</h3>
                    <i class="far fa-envelope"></i>
                </div>
                <div class="contact-content">
                    <h3>+91 932 695 6401</h3>
                    <i class="fas fa-phone"></i>
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
        ) {
        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        // Does a scroll target exist?
        if (target.length) {
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            $('html, body').animate({
            scrollTop: target.offset().top
            }, 1000, function(){});
            // Callback after animation
            // Must change focus!
            // var $target = $(target);
            // $target.focus();
            // if ($target.is(":focus")) { // Checking if the target was focused
            //     return false;
            // } else {
            //     $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            //     $target.focus(); // Set focus again

            }
        }
    });
    </script>
    <script>
        var ansOpen = false;
        // console.log('Value is set to', ansOpen);
        $('i').click(function(){
            var target = '#a'+$(this).parent().attr('id')[1];
            // console.log(target);
            if (ansOpen == false) {
                $(this).css('transform','rotate(45deg)');
                $(target).toggle("slow");
                $(target).addClass("open");
                ansOpen = true;
                // console.log('Value changed to',ansOpen);
            } else {
                $(this).css('transform','rotate(45deg)');
                // set already opened faq to normal
                var opened = $('.open');
                var openCross = $('#q'+opened.attr('id')[1]).find("i");
                // console.log(openCross);

                if (target[2] == opened.attr('id')[1]) {
                    // when closing the same ques
                    $(target).hide("slow");
                    $(target).removeClass("open");
                    openCross.css('transform', 'rotate(0deg)');
                    ansOpen = false;
                    // console.log('Value changed to',ansOpen);

                } else {
                    // opening other ques and closing prev one
                    opened.toggle("slow");
                    opened.removeClass("open");
                    openCross.css('transform', 'rotate(0deg)');
                    $(target).toggle("slow");
                    $(target).addClass("open");
                }


            }
        });
    </script>
</body>
</html>
