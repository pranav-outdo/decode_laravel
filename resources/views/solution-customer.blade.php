@extends('layouts.master')
@section('content')
<div class="solution-customerpages w-100 d-inline-block">
    <!-- Solution_Hero -->
    <section class="solution-hero w-100 d-inline-block">
        <div class="container">
            <div class="hero-top w-100 d-inline-block p-0">
                <div class="row">
                    <div class="col-md-6">
                        <div class="heor-content">
                            <span class="hero-subtitle text-uppercase d-inline-block">for customers</span>
                            <h1 class="hero-title fw-bold mb-0">Get deep insights into your customers from their conversations</h1>
                            <p class="heor-discretion d-md-block d-none">Decode brings all your customer conversations together, so you can understand your pipeline's health, improve lead scoring and accelerate deal closures</p>
                            <div class="menu-btn d-flex align-items-center d-md-block d-none">
                                <a href="{{ route('/') }}#early-access" class="free-trail font-weight-bold text-center m-0">Get Beta</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-md-none text-center">
                        <img src="{{asset('img/solution/video-gif.png')}}">
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
                <h2 class="integrations-title fw-bold">Decode for Customers</h2>
                <p class="integrations-subtitles text-center mt-0">Decode can help you</p>
            </div>
            <div class="row">
                <div class="col-md-4 d-md-flex">
                    <div class="customer-box bg-whitecolor text-center w-100">
                        <img src="{{asset('img/solution/filter-icon.png')}}">
                        <div class="position-relative customermain-box">
                            <h6 class="customer-title mb-0">Enhance lead quality:</h6>
                            <p>Enable a deep and exhaustive sales intelligence to create a robust pipeline</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-md-flex">
                    <div class="customer-box bg-whitecolor text-center w-100">
                        <img src="{{asset('img/solution/improve-sales.png')}}">
                        <div class="position-relative customermain-box">
                            <h6 class="customer-title mb-0">Improve sales <br> cadence and training: </h6>
                            <p>Track ongoing conversations, understand the winning formula and standardize the quality of sales calls and pitches</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-md-flex">
                    <div class="customer-box bg-whitecolor mb-0 text-center w-100">
                        <img src="{{asset('img/solution/customer.png')}}">
                        <div class="position-relative customermain-box">
                            <h6 class="customer-title mb-0">Increase customer retention:</h6>
                            <p>Understand your customers' pain areas and intentions on critical deals</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Decode_Help -->
    <section class="decode-help w-100 d-inline-block">
        <div class="container">
            <div class="integrations-box text-center">
                <h2 class="integrations-title fw-bold mb-0">How does Decode help?</h2>
            </div>
            <div class="single-source single-margin">
                <div class="row align-items-center">
                    <div class="col-md-6 order-md-0 order-1">
                        <div class="helping-box helpingbox-right text-md-start text-center">
                            <h4 class="helping-title d-md-block d-none">It creates a single source <br> of truth</h4>
                            <p class="single-subtitles m-0">Decode acts as one place to upload and sync all your customer conversations so you can find and sort all of them in one go</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h4 class="helping-title d-md-none d-block text-md-start text-center">It creates a single source <br> of truth</h4>
                        <div class="helping-images text-md-end text-center">
                            <img src="{{asset('img/solution/single-source-oftruth.png')}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-source">
                <div class="row align-items-center">
                    <div class="col-md-6 order-2">
                        <div class="helping-box helpingbox-left text-md-start text-center">
                            <h4 class="helping-title d-md-block d-none">It enables effortless <br> collaboration</h4>
                            <p class="single-subtitles m-0">Decode transcribes every customer conversation in real-time and lets you effortlessly search across transcriptions, highlight items and create and manage tags to get actionable insights</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h4 class="helping-title d-md-none d-block text-md-start text-center">It enables effortless <br> collaboration</h4>
                        <div class="helping-images text-md-start text-center">
                            <img src="{{asset('img/solution/Collaboration.png')}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-source decode-draws">
                <div class="row align-items-center">
                    <div class="col-md-6 order-md-0 order-1">
                        <div class="helping-box helpingbox-right text-md-start text-center">
                            <h4 class="helping-title d-md-block d-none">It taps into the customer's intent</h4>
                            <p class="single-subtitles m-0">Decode draws insights into your customer's interest levels at demos, pitches and sales calls by analysing voice tonality, facial cues and behavioral nuances</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h4 class="helping-title d-md-none d-block text-md-start text-center">It taps into the customer's intent</h4>
                        <div class="helping-images text-md-center text-center">
                            <img src="{{asset('img/solution/customer-intent.png')}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="multiple-items">
                <div class="testimonial">
                    <div class="testimonial-source bg-whitecolor d-sm-flex justify-content-center">
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
                    <div class="testimonial-source bg-whitecolor d-sm-flex justify-content-center">
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
                    <div class="testimonial-source bg-whitecolor d-sm-flex justify-content-center">
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

</div>

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
