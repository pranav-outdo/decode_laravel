
<!doctype html>
<!doctype html>
<html lang="en" theme="LIGHT">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/favicon.png" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font_Awsome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- My_Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

    <!-- Hotjar Tracking Code for https://entropiktech.com -->

    <script>

        (function (h, o, t, j, a, r) {

            h.hj = h.hj || function () { (h.hj.q = h.hj.q || []).push(arguments) };

            h._hjSettings = { hjid: 2637869, hjsv: 6 };

            a = o.getElementsByTagName('head')[0];

            r = o.createElement('script'); r.async = 1;

            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;

            a.appendChild(r);

        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');

    </script>
    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KKHHVH3');
    </script>
    <!-- End Google Tag Manager -->
    <title>Home</title>
    <script>
        function createFcn(nm) { (window.freshsales)[nm] = function () { (window.freshsales).push([nm].concat(Array.prototype.slice.call(arguments, 0))) }; } (function (url, appToken, formCapture) { window.freshsales = window.freshsales || []; if (window.freshsales.length == 0) { list = 'init identify trackPageView trackEvent set'.split(' '); for (var i = 0; i < list.length; i++) { var nm = list[i]; createFcn(nm); } var t = document.createElement('script'); t.async = 1; t.src = 'https://assets.freshsales.io/assets/analytics.js'; var ft = document.getElementsByTagName('script')[0]; ft.parentNode.insertBefore(t, ft); freshsales.init('https://entropik.freshsales.io', '08c02c419b995f66205f78ed88202ee71d0674a2014780fb2b9ba3edf7391ae4', true); } })();
    </script>
</head>

<body class="home-page">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KKHHVH3" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- Header -->
    @include('layouts.header')

    <header class="header position-relative">
        <div class="banner-shape-top d-sm-block d-none"><img src="img/banner-shape-top.png"></div>
        <div class="banner-shape-top d-sm-none d-block"><img src="img/banner-shapemobile.png"></div>
        <div class="container">
            <div class="hero-top w-100 d-inline-block">
                <div class="row">
                    <div class="col-md-6 order-sm-0 order-2">
                        <div class="heor-content">
                            <h1 class="hero-title fw-bold " id="">Your Single Source To Decode
                                <div id="myTypewriter" class="typewriter">
                                    <p class="mb-0 bg-greedent">Customer</p>
                                </div>
                                Conversations
                            </h1>
                            <p class="heor-discretion">Tap into all your Meetings and capture insights on your <br>
                                Consumers, Employees and Business - all in one place.</p>
                            <div class="easy-use d-xl-flex align-items-center">
                                <p class="m-xl-0"><img src="img/easy-tuch.png" class="ms-0"><a href="#"
                                        class="source-btn font-weight-bold text-center m-0">Easy to Use</a></p>
                                <p class="m-xl-0"><img src="img/emotion.png"><a href="#"
                                        class="source-btn font-weight-bold text-center m-0">Emotion AI-driven
                                        insight</a></p>
                                <p class="m-xl-0"><img src="img/no-traning.png"><a href="#"
                                        class="source-btn font-weight-bold text-center m-0">No Training Required</a></p>
                            </div>
                            <div class="menu-btn d-flex align-items-center">
                                <a href="{{ route('/') }}#early-access" class="free-trail font-weight-bold text-center">Get Beta</a>
                                <p class="play-icon m-0 position-relative">
                                    <button type="button" class="watch-video font-weight-bold" data-toggle="modal"
                                        data-target="#VideoPop">
                                        watch the film <img src="img/play-btn.png">
                                    </button>
                                <div class="modal fade VideoPopup" id="VideoPop" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body p-0">
                                                <iframe width="560" height="315"
                                                    src="https://www.youtube.com/embed/-TygmCs1gW4"
                                                    title="YouTube video player" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="hero-images position-relative">
                            <img class="hero-bg" src="img/hero_video.gif">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <ul class="user-logo list-unstyled ps-0 m-0">
                            <li><img src="img/GDPR-badge.png"></li>
                            <li><img src="img/iso-iec-27001.png"></li>
                            <li><img src="img/Soc2.png"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Every_Function -->
    <section class="every-function position-relative">
        <div class="every-shape-top"><img src="img/solution-shapetop.png"></div>
        <div class="team-right-shape d-sm-none d-block"><img src="img/team-right-shape.png"></div>
        <div class="container">
            <div class="function-box text-center">
                <h2 class="solution-title fw-bold">Solutions for Every Function</h2>
            </div>
            <div class="every-solution">
                <div class="row">
                    <div class="col-md-4">
                        <div class="tem-solution candidates-solution">
                            <div class="tem-images text-center">
                                <img src="img/customer.png">
                            </div>
                            <div class="solution-info" style="bottom: 15px;position: relative;">
                                <h6 class="text-center"><b>Candidate</b> <span>Conversations</span></h6>
                                <p>Analyze qualitative interviews</p>
                                <p>Assess candidates</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="tem-solution">
                            <div class="tem-images text-center">
                                <img src="img/team.png">
                            </div>
                            <div class="solution-info">
                                <h6 class="text-center"><b>Team</b> <span>Conversations</span></h6>
                                <p>Bring all meetings and recordings together</p>
                                <p>Collaborate better within and across organisations</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="tem-solution">
                            <div class="tem-images text-center">
                                <img src="img/candidate .png">
                            </div>
                            <div class="solution-info" style="top: 15px;position: relative;">
                                <h6 class="text-center"><b>Customer</b> <span>Conversations</span></h6>
                                <p>Draw untapped customer insights</p>
                                <p>Enhance sales and customer satisfaction</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="customer-shape-botttom d-sm-none d-block"><img src="img/customer-shape-bottom.png"></div>
    </section>


    <!-- Place_Metting -->
    <section class="place-metting position-relative">
        <div class="container">
            <div class="place-box position-relative">
                <img src="img/every-function.png">
                <div class="function-box text-start">
                    <h2 class="solution-title fw-bold mb-0 p-0">One place to see all <br> your <span
                            class="bg-greedent">Conversations</span> <br> from everywhere</h2>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology_Drives -->
    <section class="technology-drives position-relative">
        <div class="container">
            <div class="function-box text-start d-sm-none d-block">
                <h2 class="solution-title fw-bold p-0">AI Technology that <br> drives <span
                        class="bg-greedent">Insights</span></h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="technology-box mt-0">
                        <img src="img/speech-recognition.png">
                        <h3>Automatic Speech <br>Recognition</h3>
                        <p class="mb-0">Recognize and convert speech to text in real time</p>
                    </div>
                    <div class="technology-box technology-top">
                        <img src="img/emotion-recognition.png">
                        <h3>Facial Emotion <br>Recognition</h3>
                        <p class="mb-0">Measure emotions expressed by facial expressions</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="function-box text-start d-sm-block d-none">
                        <h2 class="solution-title fw-bold">AI Technology that <br> drives <span
                                class="bg-greedent">Insights</span></h2>
                    </div>
                    <div class="technology-box">
                        <img src="img/anguage-processing.png">
                        <h3>Natural Language <br> Processing</h3>
                        <p class="mb-0">Use sentiment analysis for transcriptions and captions</p>
                    </div>
                    <div class="technology-box technology-top">
                        <img src="img/machine-learning.png">
                        <h3>Advanced Machine <br>Learning</h3>
                        <p class="mb-0">Mine deep human insights from video conversations</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Rewatch -->
    <section class="rewatch">
        <div class="container">
            <div class="function-box text-center">
                <h2 class="solution-title fw-bold">All that <span class="bg-greedent">you can do</span></h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="rewatch-info">
                        <img src="img/Upload-rewatch.gif" class="img-border" width="100%">

                        <div class="rewatch-text">
                            <h5>Host or Upload Conversations</h5>
                            <p>Host-Record-Share conversations or upload recorded ones</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="rewatch-info">
                        <img src="img/Assign-tasks.gif" class="img-border" width="100%">
                        <div class="rewatch-text">
                            <h5>Bring all Conversations Together</h5>
                            <p>Sync conversations from all your meeting platforms with Decode</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="rewatch-info">
                        <img src="img/Get-transcriptions.gif" class="img-border" width="100%">
                        <div class="rewatch-text">
                            <h5>Transcribe Conversations in Real Time</h5>
                            <p>Get searchable and real-time transcriptions of all conversations</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="rewatch-info mb-md-0">
                        <img src="img/Search-across-videos.gif" class="img-border" width="100%">
                    </div>
                    <div class="rewatch-info mb-md-0">
                        <div class="rewatch-text">
                            <h5>Collaborate and Take Actions</h5>
                            <p>Highlight important conversations, create tags and assign tasks</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="rewatch-info mb-0">
                        <img src="img/analyse-emotions.gif" class="img-border" width="100%">
                        <!-- <video width="100%" height="240" src="img/search-across-videos.mp4" controls muted autoplay loop></video> -->

                        <div class="rewatch-text">
                            <h5>Get Deep Conversation Insights</h5>
                            <p>Untapped meeting insights, emotional analytics, and MOMs</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Business course -->
    <section class="busniess-course" id="early-access">
        <div class="container">
            <div class="function-box text-center">
                <h2 class="solution-title fw-bold p-0">Change the course of <span class="bg-greedent">your
                        business</span><br>Get in touch.</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="get-touch text-md-start text-center">
                        <img src="img/title-text.png">
                    </div>
                </div>
                <div class="col-md-4 befor-success">
                    <iframe src="https://go.pardot.com/l/945823/2021-11-19/2qrd7z" width="100%" height="350"
                    type="text/html" frameborder="0" allowTransparency="true" style="border: 0" class="iframe-contact-form"></iframe>
                </div>
                <div class="col-md-4 after-success">
                    <div class="tem-solution candidates-solution">
                        <div class="solution-info" style="bottom: 15px;position: relative;">
                            <!-- <h6 class="text-center"><b>Thanks!</b></h6> -->
                            <p>Welcome to the Future of Conversations! You're on our waitlist now. We will soon send you
                                the access link to Decode Beta.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--platforms integrate -->
    <section class="platforms-integrate">
        <div class="container">
            <div class="row align-items-center  ">
                <div class="col-lg-4 col-md-4">
                    <img src="img/platforms-integrate.png" alt="">
                </div>
                <div class="col-lg-8 col-md-8">
                    <h2 class="solution-title fw-bold"> <span class="bg-greedent"> which platforms </span> can <br> you
                        integrate?
                    </h2>
                    <p class="">take a look at how Decode works with a host of <br> platforms for meetings,
                        collaboration, event <br>
                        management, CRM, cloud communication and more.</p>
                    <a href="{{ route('integrations.index') }}" class="btn btn-bg know-more">Know more</a>
                </div>
            </div>
        </div>
    </section>

    <!--Need to decode-->
    <section class="need-to-decode">
        <div class="need-to-decode-bg-1 ">
            <div class="need-to-decode-bg-2">
                <div class="container">
                    <div class="text-center">
                        <h2 class="solution-title fw-bold">The need to decode</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 main-need-to-decode-content-box">
                            <div class="position-relative">
                                <img src="{{asset('img/home/powerful-tips.png')}}" alt="" class="w-100">
                                <div class="inner-need-to-decode-content-box position-absolute">
                                    <a href="https://entropiktech.com/blogs/11-powerful-virtual-collaboration-tips-you-need-to-know/"> <h3> 11 Powerful Virtual Collaboration Tips You Need to Know </h3></a>
                                    <p> 20 Dec, 2021 | 9 MIN </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 main-need-to-decode-content-box">
                            <div class="position-relative">
                                <img src="{{asset('img/home/video-conference.png')}}" alt="" class="w-100">
                                <div class="inner-need-to-decode-content-box position-absolute">
                                  <a href="https://entropiktech.com/blogs/5-video-conferencing-features-that-will-make-your-meetings-better/"><h3>5 Video Conferencing Features That Will Make Your Meetings Better</h3></a>  
                                    <p>20 Dec, 2021 | 5 MIN</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4  col-md-4 main-need-to-decode-content-box">
                            <div class="position-relative">
                                <img src="{{asset('img/home/virtual-meeting.png')}}" alt="" class="w-100">
                                <div class="inner-need-to-decode-content-box position-absolute">
                                    <a href="https://entropiktech.com/blogs/7-common-virtual-meeting-mistakes-and-how-to-avoid-them/"><h3>7 Common Virtual Meeting Mistakes (And How to Avoid Them)</h3></a> 
                                    <p>20 Dec, 2021 | 6 MIN</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center index-blog">
                        <button class="btn btn-bg know-more"><a href="https://entropiktech.com/blogs/" class="text-white" target="_blank"> See more </a> </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <!-- Asked_Question -->
    <section class="asked-quetion">
        <div class="container">
            <div class="function-box text-start d-flex justify-content-center align-items-center">
                <img src="img/asked-questions.png">
                <h2 class="solution-title fw-bold m-0">Frequently <br> Asked <br> Questions</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="accordion-main">
                        <div class="set">
                            <a href="#Jquery">
                                How does the integration work?
                                <img src="img/down-icon.png">
                            </a>
                            <div class="content">
                                <p>We collect meetings and recordings from all your meeting platforms through API
                                    integration. You can also join upcoming meetings on these platforms through Decode.
                                </p>
                            </div>
                        </div>
                        <div class="set">
                            <a href="#Jquery">
                                How safe is our conversations with you?
                                <img src="img/down-icon.png">
                            </a>
                            <div class="content">
                                <p>Your conversations and associated data are completely safe with us. We take stringent
                                    data privacy measures to comply with GDPR. Decode is also ISO SOC2 certified for
                                    data security and privacy.</p>
                            </div>
                        </div>
                        <!-- <div class="set">
                               <a href="#Jquery">
                                    Can we have meetings on Decode?
                                   <img src="img/down-icon.png">
                               </a>
                               <div class="content">
                                   <p>Yes, if all the parties in the meeting or call have a Decode account. Transcriptions and collaboration can happen simultaneously while the platform records and decodes deep human insights.</p>
                               </div>
                           </div> -->
                        <!-- <div class="set">
                               <a href="#Jquery">
                                    How and whose emotions are captured?
                                   <img src="img/down-icon.png">
                               </a>
                               <div class="content">
                                   <p>The emotions of the participants are captured with three methods: Facial Emotion Recognition, Voice Tonality, and Sentiment Analysis. Emotion data is then quantified and aggregated for each meeting.</p>
                               </div>
                           </div> -->
                        <div class="set">
                            <a href="#Jquery">
                                How does one search for specific conversations?
                                <img src="img/down-icon.png">
                            </a>
                            <div class="content">
                                <p>Decode's powerful search can fetch specific conversations without you having to view
                                    entire recordings again. You can further add highlights, tags and notes for easy
                                    collaboration. </p>
                            </div>
                        </div>
                        <!-- <div class="set">
                               <a href="#Jquery">
                                    Can Decode be used in Online Classrooms?
                                   <img src="img/down-icon.png">
                               </a>
                               <div class="content">
                                   <p>Yes, Decode can be used in Online Classrooms to measure online student engagement. Features such as transcriptions, highlights and tags can help students with notes and assignments.</p>
                               </div>
                           </div> -->
                        <div class="set">
                            <a href="#Jquery">
                                How can we collaborate on Transcriptions?
                                <img src="img/down-icon.png">
                            </a>
                            <div class="content">
                                <p>Once the voice recordings are transcribed, your team members or peers can recap
                                    recordings easily, skip to and highlight important conversations, create tags, add
                                    notes and assign tasks.</p>
                            </div>
                        </div>
                        <div class="set">
                            <a href="#Jquery">
                                What if it's just an audio call and not video?
                                <img src="img/down-icon.png">
                            </a>
                            <div class="content">
                                <p>Decode is a one-stop platform to store, analyze and act on all your conversations, be
                                    it audio or video. We use speech-to-text to provide transcriptions and analyze voice
                                    tonality to measure emotions.</p>
                            </div>
                        </div>
                        <!-- <div class="set">
                               <a href="#Jquery">
                                    Can Decode be used for TeleHealth?
                                   <img src="img/down-icon.png">
                               </a>
                               <div class="content">
                                   <p>Yes, Decode can be used in Telehealth consultations to keep a track of doctor-patient engagement over time. Features such as transcriptions and searchability can help doctors revisit patient records with ease.</p>
                               </div>
                           </div> -->
                        <div class="set mb-0">
                            <a href="#Jquery">
                                How accurate are the transcriptions?
                                <img src="img/down-icon.png">
                            </a>
                            <div class="content">
                                <p>Transcriptions happen in real-time for both live meetings and recorded conversations.
                                    Voice is recognized and converted to text in real time with a word accuracy rate of
                                    up to 95%. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer_Bottom -->
    <section class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2">
                    <div class="footerbottom-info text-lg-start text-center">
                        <img src="img/navbar-brand.svg">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="footerbottom-info bottom-padding d-md-flex justify-content-center">
                        <p class="text-md-start text-center">
                            <li style="color: #787878; list-style: none;">Copyright 2021 Entropik Technologies Pvt.Ltd.
                            </li>
                        <ul
                            class="d-flex justify-content-md-start justify-content-center list-unstyled copyright-pages mb-0">
                            <li><a href="https://entropiktech.com/terms-of-use">Terms Of Use</a></li>
                            <li><a href="https://entropiktech.com/privacy-policy">Privacy Policy</a></li>
                            <li><a href="https://entropiktech.com/cookies-policy">Cookies</a></li>
                        </ul>
                        </p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footerbottom-info">
                        <ul
                            class="list-unstyled d-flex justify-content-lg-end justify-content-center justify-content-center mb-0">
                            <li><a href="https://www.facebook.com/Decode_Entropiktech-100211929162490"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://www.linkedin.com/showcase/decode-by-entropik-tech/"><i
                                        class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="https://www.instagram.com/decode_entropik/"><i
                                        class="fab fa-instagram"></i></a></li>
                            <!-- <li><a href="https://www.youtube.com/channel/UCw0wW9HKZ70VhBdzA6JprYg"><i class="fab fa-youtube"></i></a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <style>
        .typewriter p {
            animation: typing 0.9s steps(7), infinite;
        }

        @keyframes typewriter {
            0% {
                width: 0
            }

            25% {
                width: 90%
            }

            48% {
                width: 100%
            }

            50% {
                width: 100%
            }

            55% {
                width: 100%
            }

            75% {
                width: 40%;
            }

            85% {
                width: 10%;
            }

            100% {
                width: 0;
            }
        }

    </style>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src='https://code.jquery.com/jquery-3.5.1.slim.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js'></script>
    <!-- Accordion -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-146305833-1"></script>
    <script>
    /* ----------------------- Top_Header ------------------------- */
        const openMenu = document.querySelector(".open-menu");
            const closeMenu = document.querySelector(".close-menu");
            const menuWrapper = document.querySelector(".menu-wrapper");
            const hasCollapsible = document.querySelectorAll(".has-collapsible");

            // Sidenav Toggle
            openMenu.addEventListener("click", function () {
                menuWrapper.classList.add("offcanvas");
            });

            closeMenu.addEventListener("click", function () {
                menuWrapper.classList.remove("offcanvas");
            });

            // Collapsible Menu
            $(document).mouseup(function(e){
                if($(e.target).hasClass('menu-name')){
                    if($('.solution-menu').hasClass('active')){
                        $('.solution-menu').removeClass('active');
                    }else{
                        $('.solution-menu').addClass('active');
                    }
                }else{
                    $('.solution-menu').removeClass('active');
                }
            });
            /* End */
    </script>
    <script type="text/javascript">

        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'UA-146305833-1');

        $(".OnlyNumber").keypress(function (evt) {
            var charCode = (evt.which) ? evt.which : evt.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                return false;
            }
            return true;
        });
        $(document).ready(function () {
            $('.after-success').hide();
            $(".submit-btn").on("click", function () {
                if ($('#firstname').val() == '' || $('#lastname').val() == '' || $('#email').val() == '' || $('#phone').val() == '' || $('#subject').val() == '') {
                    $('.befor-success').show();
                    $('.after-success').hide();
                } else {
                    $('.befor-success').hide();
                    $('.after-success').show();
                }
            });

            $(".set > a").on("click", function () {
                if ($(this).hasClass("active")) {
                    $(this).removeClass("active");
                    $(this).siblings(".content").slideUp(200);
                    $(".set > a i").removeClass("fa-minus").addClass("fa-plus");
                } else {
                    $(".set > a i")
                        .removeClass("fa-minus")
                        .addClass("fa-plus");
                    $(this)
                        .find("i")
                        .removeClass("fa-plus")
                        .addClass("fa-minus");
                    $(".set > a").removeClass("active");
                    $(this).addClass("active");
                    $(".content").slideUp(200);
                    $(this)
                        .siblings(".content")
                        .slideDown(200);
                }
            });

        });

        var messages = ["Customer ", "Candidate", "Team "];
        var rank = 1;
        // Code for Chrome, Safari and Opera
        document.getElementById("myTypewriter").addEventListener("webkitAnimationEnd", changeTxt);
        // // Standard syntax
        document.getElementById("myTypewriter").addEventListener("animationend", changeTxt);

        function changeTxt(e) {
            _h1 = this.getElementsByTagName("p")[0];
            _h1.style.webkitAnimation = 'none'; // set element animation to none
            setTimeout(function () { // you surely want a delay before the next message appears
                _h1.innerHTML = messages[rank];
                var speed = 0.9 * messages[rank].length / 10; // adjust the speed (3.5 is the original speed, 20 is the original string length
                // var speed = 0;
                _h1.style.webkitAnimation = 'typing ' + speed + 's steps(7),infinite';
                (rank === messages.length - 1) ? rank = 0 : rank++; // if you have displayed the last message from the array, go back to the first one, else go to next message
            }, 1000);
        }
        $(".VideoPopup").on('hidden.bs.modal', function (e) {
            $(".VideoPopup iframe").attr("src", $(".VideoPopup iframe").attr("src"));
        });
    </script>
</body>
</html>
