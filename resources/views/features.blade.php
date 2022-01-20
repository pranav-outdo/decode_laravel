@extends('layouts.master')
@section('content')
    <!-- Header -->
    <header class="features-conversations header position-relative p-0">
        <div class="container">
            <div class="solution-hero hero-top w-100 d-inline-block pb-0">
                <div class="row">
                    <div class="col-12">
                        <div class="features-source heor-content w-100 d-inline-block text-center">
                            <h1 class="hero-title fw-bold" id="">Your single source to decode
                                <div id="myTypewriter" class="typewriter">
                                    <p class="mb-0 bg-greedent">conversations</p>
                                </div>
                            </h1>
                            <p class="heor-discretion">Decode is your complete conversational intelligence platform that you can integrate into your present ecosystem seamlessly to get insights into your conversations like never before. It's everything you need to derive the maximum value out of your recordings, all in one place.</p>
                            <div class="menu-btn d-flex align-items-center justify-content-center">
                                <a href="{{ route('/') }}#early-access" class="free-trail font-weight-bold text-center m-0">Get Beta</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Conversations -->
        <section class="conversations w-100 d-inline-block">
            <div class="container">
                <div class="center-padding row">
                    <div class="col-md-3">
                        <div class="conversations-box bg-whitecolor">
                            <h6 class="conversations-title fw-bold">"What do I do now?"</h6>
                            <p class="integrations-text mb-0">Decode brings all your conversations together under one roof so that you can extract the information you need that lets you collaborate and gain insights</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="conversations-box bg-whitecolor">
                            <h6 class="conversations-title fw-bold">"What did I miss?"</h6>
                            <p class="integrations-text mb-0">Decode provides real-time transcriptions for live and pre-recorded conversations across which you can search for what you need, so you never miss a thing</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="conversations-box bg-whitecolor">
                            <h6 class="conversations-title fw-bold">"What did we decide?"</h6>
                            <p class="integrations-text mb-0">Decode helps you highlight important segments in your conversations, so you can quickly consume and share information without having to rewatch the whole recording </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="conversations-box bg-whitecolor">
                            <h6 class="conversations-title fw-bold">"Who will do what?"</h6>
                            <p class="integrations-text mb-0">Decode lets you create, group and manage tags so you can gain actionable insights quickly</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!-- Upload_Conversations -->
        <section class="upload-converstions w-100 d-inline-block align-top">
            <div class="container">
                <div class="integrations-box text-center align-top w-100 d-inline-block mb-0">
                    <h2 class="integrations-title fw-bold mb-0">What you can do with Decode?</h2>
                    <div class="conversations-subtitles upload-banner">
                        <h4 class="helping-title">Host or upload conversations</h4>
                        <img src="img/features/upload-conversations.png" class="host-images">
                    </div>
                </div>
                <div class="integrations-box text-center align-top w-100 d-inline-block mb-0">
                    <div class="conversations-subtitles mt-0">
                        <h4 class="helping-title">Bring all your conversations together</h4>
                        <p class="conversations-deception mb-0">Upload and sync all your meetings so you can sort, manage <br> and find all them at one place, in one go</p>
                        <img src="img/features/video-upload.png" class="host-images">
                    </div>
                </div>
                <div class="integrations-box text-center align-top w-100 d-inline-block mb-0">
                    <div class="conversations-subtitles mt-0">
                        <h4 class="helping-title">Transcribe your conversations in real-time</h4>
                        <p class="conversations-deception mb-0">Transcribe live or pre-recorded conversations in real-time and search across <br> conversation transcriptions effortlessly, so you never miss a detail</p>
                        <img src="img/features/real-time.png" class="host-images">
                    </div>
                </div>
                <div class="integrations-box text-center align-top w-100 d-inline-block mb-0">
                    <div class="conversations-subtitles mt-0">
                        <h4 class="helping-title">Create highlights that matter</h4>
                        <p class="conversations-deception mb-0">Highlight important sections in your conversations, so you can bring the spotlight <br> to what matters without having to go through the whole recording</p>
                        <img src="img/features/create-highlights.png" class="host-images">
                    </div>
                </div>
                <div class="integrations-box text-center align-top w-100 d-inline-block mb-0">
                    <div class="conversations-subtitles mt-0">
                        <h4 class="helping-title">Create tags and collaborate better</h4>
                        <p class="conversations-deception mb-0">Create, manage and group tags to enable actionable insights and <br> facilitate seamless collaboration across teams</p>
                        <img src="img/features/collaborate-better.png" class="host-images">
                    </div>
                </div>
                <div class="integrations-box text-center align-top w-100 d-inline-block mb-0">
                    <div class="conversations-subtitles mt-0">
                        <h4 class="helping-title">Understand intent</h4>
                        <p class="conversations-deception mb-0">Analyse voice tonality, facial cues and behavioral nuances, so you know your <br> participants interest and engagement levels</p>
                        <img src="img/features/Understand-intent.png" class="host-images">
                    </div>
                </div>
                <div class="integrations-box sounds-box text-center mt-0">
                    <h2 class="integrations-title fw-bold mb-3">Sounds Interesting?</h2>
                    <a href="{{ route('/') }}#early-access" class="free-trail font-weight-bold text-center mb-0">Get Beta</a>
                </div>
            </div>
        </section>
@endsection
@section('script')
<script type="text/javascript">
    $('.center-padding').slick({
        centerMode: true,
        centerPadding: "0px",
        slidesToShow: 3,
        arrows: true,
        autoplay: false,
        responsive: [
        {
        breakpoint: 1200,
        settings: {
        centerMode: true,
        centerPadding: "0px",
        slidesToShow: 3,
        },
        },
        {
        breakpoint: 767,
        settings: {
        centerMode: true,
        centerPadding: "0px",
        slidesToShow: 1,
        },
        },
        {
        breakpoint: 575,
        settings: {
        centerMode: true,
        centerPadding: "0px",
        slidesToShow: 1,
        },
        },
        {
        breakpoint: 480,
        settings: {
        centerMode: true,
        centerPadding: "0px",
        slidesToShow: 1,
        },
        },
    ],
    });
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

    var messages = ["conversations ", "conversations", "conversations "];
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
@endsection
