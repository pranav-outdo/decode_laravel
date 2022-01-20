@extends('layouts.master')
@section('content')
<!-- Solution_Hero -->
<section class="solution-hero w-100 d-inline-block">
    <div class="container">
        <div class="hero-top w-100 d-inline-block p-0">
            <div class="row">
                <div class="col-md-6">
                    <div class="heor-content">
                        <span class="hero-subtitle text-uppercase d-inline-block">for candidates</span>
                        <h1 class="hero-title fw-bold mb-0">Get knowledge that helps hire better and drive employee retention</h1>
                        <p class="heor-discretion d-md-block d-none">Decode brings all your customer conversations together, so you can understand your pipeline's health, improve lead scoring and accelerate deal closures</p>
                        <div class="menu-btn d-flex align-items-center d-md-block d-none">
                            <a href="{{ route('/') }}#early-access" class="free-trail font-weight-bold text-center m-0">Get Beta</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-md-none text-center">
                    <img src="{{asset('img/solution-candidates/banner-candidates.png')}}">
                    <p class="heor-discretion d-md-none d-block">Decode brings all your customer conversations together, so you can understand your pipeline's health, improve lead scoring and accelerate deal closures</p>
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
            <h2 class="integrations-title fw-bold">Decode for Candidates</h2>
            <p class="integrations-subtitles text-center mt-0">Decode can help you</p>
        </div>
        <div class="row">
            <div class="col-md-4 d-md-flex">
                <div class="customer-box bg-whitecolor text-center w-100">
                    <img src="{{asset('img/solution-candidates/expedite-hiring.png')}}">
                    <div class="customer-content">
                        <div class="position-relative customermain-box">
                            <h6 class="customer-title mb-0">Expedite hiring processes</h6>
                            <p>Access conversations and leverage highlights, actionable tags and tasks to improve cross-functional productivity</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-md-flex">
                <div class="customer-box bg-whitecolor text-center w-100">
                    <img src="{{asset('img/solution-candidates/improve-employee.png')}}">
                    <div class="customer-content">
                        <div class="position-relative customermain-box">
                            <h6 class="customer-title mb-0">Improve employee retention</h6>
                            <p>Analyze candidate needs, intentions and pain areas so you can set good standards within the processes</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-md-flex">
                <div class="customer-box bg-whitecolor mb-0 text-center w-100">
                    <img src="{{asset('img/solution-candidates/employee-experience.png')}}">
                    <div class="customer-content">
                        <div class="position-relative customermain-box">
                            <h6 class="customer-title mb-0">Enhance employee experience</h6>
                            <p>Understand your employee engagement, distress levels and exit trends</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Decode_Help -->
<section class="decode-help solutions-candidates w-100 d-inline-block">
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
                        <img src="{{asset('img/solution-candidates/interviews-candidate.png')}}">
                    </div>
                </div>
            </div>
        </div>
        <div class="single-source">
            <div class="row align-items-center">
                <div class="col-md-6 order-2">
                    <div class="helping-box helpingbox-left">
                        <h4 class="helping-title">It lets you improve hiring <br> processes</h4>
                        <p class="single-subtitles m-0">Decode transcribes hiring and exit interviews, review meetings and sensitive calls in real-time. It lets you effortlessly search across transcriptions, highlight items and create and manage tags to get actionable insights</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="helping-images">
                        <img src="{{asset('img/solution-candidates/hiring-processes.png')}}">
                    </div>
                </div>
            </div>
        </div>
        <div class="single-source decode-draws">
            <div class="row align-items-center">
                <div class="col-md-6 order-md-0 order-1">
                    <div class="helping-box helpingbox-right">
                        <h4 class="helping-title">It offers insights into candidates' expectations</h4>
                        <p class="single-subtitles m-0">Decode analyses voice tonality, facial cues, and behavioral nuances so you know your candidate's interest and engagement levels during interviews</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="helping-images text-md-center">
                        <img src="{{asset('img/solution-candidates/candidates-expectations.png')}}">
                    </div>
                </div>
            </div>
        </div>
        <div class="multiple-items">
            <div class="testimonial">
                <div class="testimonial-source d-sm-flex justify-content-center bg-whitecolor">
                    <div class="helping-images text-center">
                        <img src="{{asset('img/solution/testimonial.png')}}" class="w-100">
                    </div>
                    <div class="testimonial-box helpingbox-right p-0">
                        <img src="{{asset('img/Integrations/highfive.png')}}">
                        <h4 class="testimonial-title">“Decode was really <br> helpful, made conversations <br> so much more impactful”</h4>
                        <p class="tems-subtitles m-0"><strong>John Doe</strong>CEO & founder</p>
                    </div>
                </div>
            </div>
            <div class="testimonial">
                <div class="testimonial-source d-sm-flex justify-content-center bg-whitecolor">
                    <div class="helping-images text-center">
                        <img src="{{asset('img/solution/testimonial.png')}}" class="w-100">
                    </div>
                    <div class="testimonial-box helpingbox-right p-0">
                        <img src="{{asset('img/Integrations/highfive.png')}}">
                        <h4 class="testimonial-title">“Decode was really <br> helpful, made conversations <br> so much more impactful”</h4>
                        <p class="tems-subtitles m-0"><strong>John Doe</strong>CEO & founder</p>
                    </div>
                </div>
            </div>
            <div class="testimonial">
                <div class="testimonial-source d-sm-flex justify-content-center bg-whitecolor">
                    <div class="helping-images text-center">
                        <img src="{{asset('img/solution/testimonial.png')}}" class="w-100">
                    </div>
                    <div class="testimonial-box helpingbox-right p-0">
                        <img src="{{asset('img/Integrations/highfive.png')}}">
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
