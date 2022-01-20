
@extends('admin.layouts.master')
@section('title', 'Edit Resource E-Books')

@push('style')
@endpush

@section('breadcrumb-title')
    <h1>E-Books Update</h1>
@stop
@section('breadcrumb-items')
    <li class="breadcrumb-item" aria-current="page">Resources</li>
    <li class="breadcrumb-item" aria-current="page">E-Books</li>
    <li class="breadcrumb-item active" aria-current="page">Update</li>
@stop
@section('content')
    @include('common.breadcrumb')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card">
                    <div class="card-body">
                        @include('common.any_error')
                        <form class="forms-sample" id="analysisForm" action="{{ route('admin.resource-books.update',$resource->id)  }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @if(isset($resource))
                                @method('PUT')
                            @endif
                            <input type="hidden" name="type" value="e-books">
                            
                            @section('upload_input_image_tag')
                                <label for="image">{{ __('Image')}}</label>
                                @if (File::exists(store_resources_path().$resource->image)) 
                                    <input type="file" id="image" name="image" placeholder="Image" onchange="readURL(this);" value="{{old('image')}}" class="form-control @error('image') is-invalid @enderror">
                                @else  
                                    <input type="file" required id="image" name="image" placeholder="Image" onchange="readURL(this);" value="{{old('image')}}" class="form-control @error('image') is-invalid @enderror">
                                @endif  
                                @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <br />
                                @if (File::exists(store_resources_path().$resource->image)) 
                                    <img  id="blah" src="{{ resources_public_path().$resource->image }}" height="200px">
                                @else   
                                    <img src="{{asset('img/no-image.png')}}" height="200px" id="blah">
                                @endif  
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
