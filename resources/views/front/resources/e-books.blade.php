<section class="book-download w-100 d-inline-block">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="book-info bg-whitecolor">
                    <div class="row align-items-center">
                        <div class="col-md-2">
                            <div class="bok-images">
                                @if (File::exists(store_resources_path().$resource->image)) 
                                    <img src="{{ resources_public_path().$resource->image }}" height="222px">
                                @endif  
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="solution-hero book-content py-0">
                                <h5 class="book-title">{{ $resource->title }}</h5>
                                <p class="heor-discretion">{{ $resource->description }}</p>
                                <div class="menu-btn d-flex align-items-center">
                                    <a href="{{ $resource->link }}" class="free-trail font-weight-bold text-center m-0" target="_blank">Download e-book</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>