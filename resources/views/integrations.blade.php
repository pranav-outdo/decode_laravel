@extends('layouts.master')
@section('content')
<!-- Integrations -->
<section class="integrations w-100 d-inline-block">
    <div class="container">
        <div class="integrations-box text-center">
            <h2 class="integrations-title fw-bold">Decode Integrations</h2>
            <p class="integrations-subtitles text-center">Decode conversations from a variety of platforms with different purposes - <br> <strong>meetings, collaboration, event management, CRM and more.</strong></p>
        </div>
        <div class="row">
        @foreach($featuredIntegrations as $featuredIntegration)
        <div class="col-md-4 d-md-flex">
            <div class="integrations-info position-relative">
                <span class="subtitles-featured d-inline-block w-100">FEATURED</span>
                <div class="integrations-images">
                    <img src="{{ logo_image_public_path().$featuredIntegration->logo  }}">
                </div>
                <p class="integrations-text">{{$featuredIntegration->description}}</p>
                <div class="learn-box">
                    <a href="javascript:void(0)" class="learn-btn font-weight-bold text-center d-inline-block">Learn more</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    </div>
</section>

<div class="allintegrations-main w-100 d-inline-block position-relative align-top">
    <div class="allintegrations-box">
        <img src="img/Integrations/allintegrations-banner copy.png" class="allintegrations-banner w-100">
    </div>
    <!-- All_Integrations -->
    <section class="all-integrations w-100 d-inline-block">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <ul class="tabs">
                        <h3 class="filter-title">FILTER BY:</h3>
                        <li class="tab-link current" data-tab="tab-2" onclick="changeContentHolder(0)">All Integration</li>
                        @foreach($categories as $key => $c)
                            <li class="tab-link" data-tab="tab-2" onclick="changeContentHolder({{$c->id}})">{{$c->name}}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-9">
                    <div class="search-container position-relative">
                        <input type="text" class="bg-whitecolor" placeholder="Search.." id="search">
                        <button type="button"><i class="fa fa-search"></i></button>
                    </div>
                    <div id="tab-1" class="tab-content current" style="display:block;">
                        <div class="row" id="content-holder">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Request_Integrations -->
    <section class="request-integrations w-100 d-inline-block position-relative">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-sm-6 mb-sm-0 mb-3">
                    <div class="request-box">
                        <h4 class="request-title text-center">Request Integrations</h4>
                        <a href="#" class="learn-btn request-btn font-weight-bold text-center d-table m-auto">Contact us</a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="request-box text-center">
                        <h4 class="request-title text-center">Try Decode</h4>
                        <a href="{{ route('/') }}#early-access" class="learn-btn request-btn font-weight-bold text-center d-inline-block">Get Beta</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@section('script')
<script type="text/javascript">
        changeContentHolder(0);
    /* ---------------------- All_Integrations_Tabbing ------------------------ */
        $(document).ready(function () {
            $("ul.tabs li").click(function () {
                var tab_id = $(this).attr("data-tab");

                $("ul.tabs li").removeClass("current");
                $(".tab-content").removeClass("current");

                $(this).addClass("current");
                $("#" + tab_id).addClass("current");
            });
            $("#search").keyup(function() {
                var filter = $(this).val();
                count = 0;
                console.log('filter', filter);
                $('#content-holder div b').each(function() {
                    if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                        $('#'+$(this).parent().attr('id')).hide();
                    } else {
                        $('#'+$(this).parent().attr('id')).show();
                        count++;
                    }
                    console.log('text-search:', $(this).text());
                });

            });
        });
        function changeContentHolder(id){
            var routeUrl = "integration/"+id;
            $.ajax({url: routeUrl, success: function(result){
                console.log('result:', result);
                $("#content-holder").html(result);
            }});
        }
</script>
@endsection
