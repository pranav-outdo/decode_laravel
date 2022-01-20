@extends('admin.layouts.master')
@section('title', 'Add Integration')

@push('style')
@endpush

@section('breadcrumb-title')
    <h1>{{isset($integration) ? 'Integration Update' : 'Integration Add'}}</h1>
    <a href="{{ route('admin.integration.index') }}" tooltip="Blogs List" class="badge badge-primary"><i class="fa fa-arrow-left"></i></a>
    <span>{{ __('Back')}}</span>
@stop
@section('breadcrumb-items')
    <li class="breadcrumb-item" aria-current="page"><a href="{{ route('admin.integration.index') }}">{{ __('Integration')}}</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{isset($integration) ?  __('Update') : __('Add')}}</li>
@stop
@section('content')
    @include('common.breadcrumb')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card">
                    <div class="card-body">
                        <form class="forms-sample" id="analysisForm" action="{{isset($integration) ? route('admin.integration.update',$integration->id) : route('admin.integration.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @if(isset($integration))
                                @method('PUT')
                            @endif
                            <div class="form-group col-md-6">
                                <label for="name">{{ __('Name')}}</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Name" value="{{isset($integration) ? $integration->name : ''}}" required="">
                                    <span></span>
                                <span class="text-red hide" id="analysis-name-error"; role="alert"></span>
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="description">{{ __('Description')}}</label>
                                <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" placeholder="Description" value="{{isset($integration) ? $integration->description : ''}}" required="">
                                    <span></span>
                                <span class="text-red hide" id="video-link-error"; role="alert"></span>
                                @error('description')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label>{{ __('Category')}}</label>
                                <button type="button" class="badge badge-primary" style="margin-bottom: 6px;
                                margin-left: 10px;
                                border-radius: 5px;float: right;" data-toggle="modal" data-target="#categoryModal"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                <select class="selectpicker form-control" multiple data-live-search="true" placeholder="Select Categories" name="category[]" id="category">
                                    @foreach($categories as $key => $c)
                                        <option value="{{$key}}">{{$c}}</option>
                                    @endforeach
                                </select>
                                <!-- <select id="choices-multiple-remove-button" placeholder="Select Categories" name="category" id="category" multiple>
                                    @foreach($categories as $key => $c)
                                        <option value="{{$key}}">{{$c}}</option>
                                    @endforeach
                                </select> -->
                            </div>
                            <div class="form-group col-md-6">
                                  <label>{{ __('Logo Image')}}</label>
                                  <input type="file" class="form-control @error('logo') is-invalid @enderror" id="logo" name="logo" placeholder="Logo Image" onchange="readURL(this);" value="{{old('logo')}}">
                                  @error('logo')
                                      <div class="alert alert-danger">{{ $message }}</div>
                                  @enderror
                                @if(isset($integration))
                                    <img src="{{asset($integration->logo)}}" style="margin: 10px;" id="added">
                                @endif
                                <img id="blah" src="#" alt="your image" style="margin: 10px;"/>
                            </div>
                            <?php

                                use App\Models\Integration;

                                $integrationCount = Integration::orderBy('name', 'asc')->where('is_feature', 1)->count();
                            ?>
                            @if(!isset($integration))
                              <div class="col-sm-12">
                                <div class="form-check">
                                @if($integrationCount >= 3)
                                    <input type="checkbox" class="form-check-input" id="isFeatured 1" disabled="disabled" title="Allows a maximum of 3 featured integrations, it already exists.">
                                    <label class="form-check-label" for="isFeatured" title="Allows a maximum of 3 featured integrations, it already exists.">Is Featured</label>
                                    @else
                                    <input type="checkbox" class="form-check-input" id="isFeatured 2" name="is_featured" name="is_featured" {{isset($integration) && $integration->is_feature ? 'checked' : ''}}>
                                    <label class="form-check-label" for="isFeatured">Is Featured</label>
                                    @endif
                                </div>
                              </div>
                            @else
                            <div class="col-sm-12">
                                <div class="form-check">
                                @if($integrationCount >= 3)
                                        @if(isset($integration) && $integration->is_feature)
                                        <input type="checkbox" class="form-check-input" id="isFeatured 3" name="is_featured" {{isset($integration) && $integration->is_feature ? 'checked' : ''}}>
                                        <label class="form-check-label" for="isFeatured">Is Featured</label>
                                        @else
                                        <input type="checkbox" class="form-check-input" id="isFeatured 4" disabled="disabled" name="is_featured" title="Allows a maximum of 3 featured integrations, it already exists.">
                                        <label class="form-check-label" for="isFeatured" title="Allows a maximum of 3 featured integrations, it already exists.">Is Featured</label>
                                        @endif
                                @else
                                        @if(isset($integration) && $integration->is_feature)
                                        <input type="checkbox" class="form-check-input" id="isFeatured 3" name="is_featured" {{isset($integration) && $integration->is_feature ? 'checked' : ''}}>
                                        <label class="form-check-label" for="isFeatured">Is Featured</label>
                                        @else
                                        <input type="checkbox" class="form-check-input" id="isFeatured 4" name="is_featured">
                                        <label class="form-check-label" for="isFeatured">Is Featured</label>
                                        @endif
                                @endif
                                </div>
                            </div>
                            @endif
                            <button type="submit" class="btn btn-primary mr-2" style="margin-top: 10px;">{{ __('Submit')}}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="categoryModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="categoryModalLabel">Add Category</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form method="post" action="{{route('admin.category.store')}}">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="name">Category Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Category Name" name="name" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
        </div>
    </div>
    </div>
@endsection
@push('script')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<script type="text/javascript">
    var array = @json($selectedCategory);
    $("#category").val(array);
    $('#blah').hide();
    function readURL(input) {
        $('#added').hide();
        var fileName = document.getElementById("logo").value;
        var idxDot = fileName.lastIndexOf(".") + 1;
        var extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
        if (extFile=="jpg" || extFile=="jpeg" || extFile=="png"){
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#blah').show();
                    $('#blah')
                        .attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }else{
            document.getElementById("image").value = null;
            $('#blah').attr('src', '')
            alert("Only jpg/jpeg and png Image are allowed!");
        }
    }
</script>
@endpush
