
@extends('admin.layouts.master')
@section('title', 'Add Resource E-Books')

@push('style')
@endpush

@section('breadcrumb-title')
    <h1>Resource E-Books Add</h1>
@stop
@section('breadcrumb-items')
    <li class="breadcrumb-item" aria-current="page">Resources</li>
    <li class="breadcrumb-item" aria-current="page">E-Books</li>
    <li class="breadcrumb-item active" aria-current="page">Add</li>
@stop
@section('content')
    @include('common.breadcrumb')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card">
                    <div class="card-body">
                        @include('common.any_error')
                        <form class="forms-sample" id="analysisForm" action="{{ route('admin.resource-books.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="type" value="e-books">

                            @section('upload_input_image_tag')
                                <label for="image">{{ __('Image')}}</label>
                                <input type="file" id="image" name="image" placeholder="Image" onchange="readURL(this);" value="{{old('image')}}" required class="form-control @error('image') is-invalid @enderror">
                                
                                @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <br />
                                <img  src="{{asset('img/no-image.png')}}" height="200px" id="blah">
                            @endsection

                            @include('admin.resources.content')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    @include('admin.resources.script')
@endpush