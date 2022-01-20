@extends('layouts.master')
@section('content')


    <!-- Solution_Hero -->
    <section class="solution-hero w-100 d-inline-block">
        <div class="container">
            <div class="hero-top w-100 d-inline-block p-0">
                <div class="row">
                    <div class="col-md-6">
                        <div class="heor-content">
                            <span class="hero-subtitle text-uppercase d-inline-block">for teams</span>
                            <h1 class="hero-title fw-bold mb-0">Bring all team conversations together to collaborate better</h1>
                            <p class="heor-discretion d-md-block d-none">Decode creates a single source of truth for all your team conversations so that you can make them more collaborative, reduce meeting fatigue, avoid redundancy and enable actionable insights</p>
                            <div class="menu-btn d-flex align-items-center d-md-block d-none">
                                <a href="{{ route('/') }}#early-access" class="free-trail font-weight-bold text-center m-0">Get Beta</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-md-none text-center">
                        <img src="{{asset('img/solution-teams/banner-teams.png')}}">
                        <p class="heor-discretion d-md-none d-block">Decode creates a single source of truth for all your team conversations so that you can make them more collaborative, reduce meeting fatigue, avoid redundancy and enable actionable insights</p>
                        <div class="menu-btn d-flex align-items-center justify-content-md-start justify-content-center d-md-none d-block">
                            <a href="{{ route('/') }}#early-access" class="free-trail font-weight-bold text-center m-0">Get Beta</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Decode_Customers -->
    <section class="decode-customer w-100 d-inline-block">
        <div class="container">
            <div class="integrations-box text-center">
                <h2 class="integrations-title fw-bold">Decode for Teams</h2>
                <p class="integrations-subtitles text-center mt-0">Decode can help you</p>
            </div>
            <div class="row">
                <div class="col-md-4 d-md-flex">
                    <div class="customer-box bg-whitecolor text-center w-100">
                        <img src="{{asset('/')}}img/solution-teams/team-collaboration.png">
                        <div class="position-relative customermain-box">
                            <h6 class="customer-title mb-0">Improve team collaboration</h6>
                            <p>Bring all your team conversations under one roof and have them ready to be consumed as actionable insights</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-md-flex">
                    <div class="customer-box bg-whitecolor text-center w-100">
                        <img src="{{asset('/')}}img/solution-teams/eliminate-fatigue.png">
                        <div class="position-relative customermain-box">
                            <h6 class="customer-title mb-0">Eliminate fatigue</h6>
                            <p>Reduce team follow-ups, highlight key takeaways and make collaboration seamless by searching across the transcriptions effortlessly</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-md-flex">
                    <div class="customer-box bg-whitecolor text-center w-100 mb-0">
                        <img src="{{asset('/')}}img/solution-teams/enhance-experience.png">
                        <div class="position-relative customermain-box">
                            <h6 class="customer-title mb-0">Enhance employee experiences</h6>
                            <p>Understand subtle changes in engagement and interest levels to tailor team communication strategies and improve their experience</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Decode_Help -->
    <section class="decode-help solutions-candidates solution-teams w-100 d-inline-block">
        <div class="container">
            <div class="integrations-box text-center">
                <h2 class="integrations-title fw-bold mb-0">How does Decode help?</h2>
            </div>
            <div class="single-source single-margin">
                <div class="row align-items-center">
                    <div class="col-md-6 order-md-0 order-1">
                        <div class="helping-box helpingbox-right">
                            <h4 class="helping-title">It creates a single source <br> of truth</h4>
                            <p class="single-subtitles m-0">Decode acts as one place to upload and sync all your candidate interviews and conversations so you can find and sort all of them in one go</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="helping-images text-md-end">
                            <img src="img/solution-teams/teams-work.png">
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-source">
                <div class="row align-items-center">
                    <div class="col-md-6 order-2">
                        <div class="helping-box helpingbox-left">
                            <h4 class="helping-title">It reduces redundancy <br> and fatigue</h4>
                            <p class="single-subtitles m-0">Decode transcribes all your team conversations, so that any information can be effortlessly accessed via search, highlighted and then assigned tags. This helps you collaborate and manage assigning tasks seamlessly</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="helping-images">
                            <img src="img/solution-teams/overview-teams.png">
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-source decode-draws">
                <div class="row align-items-center">
                    <div class="col-md-6 order-md-0 order-1">
                        <div class="helping-box helpingbox-right">
                            <h4 class="helping-title">It offers insights into <br> teams' expectations</h4>
                            <p class="single-subtitles m-0">Decode analyses voice tonality, facial cues, and behavioral nuances so you know your team's interest and engagement levels across stand-ups, townhall meetings and more</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="helping-images text-md-center">
                            <img src="img/solution-teams/customer-engagment.png">
                        </div>
                    </div>
                </div>
            </div>
            <div class="multiple-items">
                <div class="testimonial">
                    <div class="testimonial-source d-sm-flex justify-content-center bg-whitecolor">
                        <div class="helping-images text-center">
                            <img src="img/solution/testimonial.png" class="w-100">
                        </div>
                        <div class="testimonial-box helpingbox-right p-0">
                            <h4 class="testimonial-title">“Decode was really <br> helpful, made conversations <br> so much more impactful”</h4>
                            <p class="tems-subtitles m-0"><strong>John Doe</strong>CEO & founder</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="testimonial-source d-sm-flex justify-content-center bg-whitecolor">
                        <div class="helping-images text-center">
                            <img src="img/solution/testimonial.png" class="w-100">
                        </div>
                        <div class="testimonial-box helpingbox-right p-0">
                            <h4 class="testimonial-title">“Decode was really <br> helpful, made conversations <br> so much more impactful”</h4>
                            <p class="tems-subtitles m-0"><strong>John Doe</strong>CEO & founder</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="testimonial-source d-sm-flex justify-content-center bg-whitecolor">
                        <div class="helping-images text-center">
                            <img src="img/solution/testimonial.png" class="w-100">
                        </div>
                        <div class="testimonial-box helpingbox-right p-0">
                            <h4 class="testimonial-title">“Decode was really <br> helpful, made conversations <br> so much more impactful”</h4>
                            <p class="tems-subtitles m-0"><strong>John Doe</strong>CEO & founder</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="integrations-box sounds-box text-center mt-0">
                <h2 class="integrations-title fw-bold mb-0">Sounds Interesting?</h2>
                <a href="{{ route('/') }}#early-access" class="free-trail font-weight-bold text-center mb-0">Get Beta</a>
            </div>
        </div>
    </section>


@endsection
@section('script')
<script type="text/javascript">
    $('.multiple-items').slick({
        infinite: true,
        slidesToShow: 1,
        dots: true,
        arrows: false,
        speed: 300
    });
</script>
@endsection
