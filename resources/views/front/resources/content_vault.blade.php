@forelse ($contentVaults as $vault)
    <div class="col-md-4 filters-padding d-xl-flex">
        <div class="filters-items text-center bg-whitecolor position-relative">
            @if (File::exists(store_image_path().$vault->image)) 
                <img src="{{ image_public_path().$vault->image }}" width="216.98px" height="121px">
            @else   
                <img src="{{asset('img/resources/topics-book.png')}}" width="100%">
            @endif  
            <h6 class="filters-title">{{ words($vault->title, $words = 15, $end = '...') }}</h6>
            <div class="product-download">
                <a href="{{ $vault->link }}" target="_blank" class="free-trail font-weight-bold text-center m-0">Read More</a>
            </div>
        </div>
    </div>
@empty
@endforelse
{{-- <div class="col-md-4 filters-padding d-xl-flex">
    <div class="filters-items text-center bg-whitecolor position-relative">
        <img src="{{asset('img/resources/topics-book.png')}}" width="100%">
        <h6 class="filters-title">Why Emotion AI is key to Business Productivity</h6>
        <div class="product-download">
            <a href="{{ route('/') }}#early-access" class="free-trail font-weight-bold text-center m-0">Download</a>
        </div>
    </div>
</div>
<div class="col-md-4 filters-padding d-xl-flex">
    <div class="filters-items text-center bg-whitecolor position-relative mb-0">
        <img src="{{asset('img/resources/topics-book.png')}}" width="100%">
        <h6 class="filters-title">Why Emotion AI is key to Business Productivity</h6>
        <div class="product-download">
            <a href="{{ route('/') }}#early-access" class="free-trail font-weight-bold text-center m-0">Download</a>
        </div>
    </div>
</div> --}}