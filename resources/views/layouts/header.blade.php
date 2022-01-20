<!-- Top_Header -->
<div class="top-header">
    <div class="container">
        <nav class="navbar p-0 align-items-center">
            <div class="nav-brand">
                <span class="open-menu">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16">
                        <g fill="#252a32" fill-rule="evenodd">
                            <path d="M0 0h24v2H0zM0 7h24v2H0zM0 14h24v2H0z" />
                        </g>
                    </svg>
                </span>
                <h1><a href="{{env('APP_URL')}}" class="brand"><img src="{{asset('img/decode-logo.png')}}" class="d-lg-block d-none" style="max-width: 80%;"><img src="{{asset('img/mobile-logo.png')}}" class="d-lg-none d-block"></a></h1>
            </div>
            <div class="menu-wrapper">
                <ul class="menu list-unstyled">
                    <li class="menu-block">
                        <span class="close-menu">
                            close
                            <i class="fas fa-times"></i>
                        </span>
                        <div class="mobile-menu"><img src="img/mobile-logo.png" class="d-lg-none d-block"></a></div>
                    </li>
                    <li class="menu-item has-collapsible solution-menu">
                        <a href="javascript:void(0)" class="menu-name"><span></span>Solution <i class="fas fa-chevron-down menu-name"></i></a>
                        <ul class="menu-child mobile-menu bg-whitecolor list-unstyled">
                            <li class="menu-child-item"><a href="{{route('solution-customer.index')}}">For Customers</a></li>
                            <li class="menu-child-item"><a href="{{route('solution-candidate.index')}}">For Candidates</a></li>
                            <li class="menu-child-item"><a href="{{route('solution-teams.index')}}">For Teams</a></li>
                        </ul>
                    </li>
                    <li class="menu-item has-collapsible"><a href="{{route('feature.index')}}"><span></span>Features</a></li>
                    <li class="menu-item has-collapsible"><a href="{{route('integrations.index')}}"><span></span>Integrations</a></li>
                    <li class="menu-item has-collapsible"><a href="{{route('resources.index')}}"><span></span>Resources</a></li>
                </ul>
            </div>
            <span class="header-btn"><a href="{{ route('/') }}#early-access" class="free-trail font-weight-bold text-center d-lg-block d-none m-0">Get Beta</a></span>
            <span class="header-btn"><a href="{{ route('/') }}#early-access" class="free-trail font-weight-bold text-center d-lg-none d-block m-0">Get Beta</a></span>
        </nav>
    </div>
</div>
