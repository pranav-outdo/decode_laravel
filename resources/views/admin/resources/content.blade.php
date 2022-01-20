<div class="form-group col-md-6">
    <label for="title">{{ __('Title')}}</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Title" value="{{old('title', @$resource->title)}}" required="">
        <span></span>
    <span class="text-red hide" id="analysis-name-error"; role="alert"></span>
    @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group col-md-6">
    <label for="link">{{ __('Link')}}</label>
    <input type="text" class="form-control @error('link') is-invalid @enderror" id="link" name="link" placeholder="Link" value="{{old('link', @$resource->link)}}" required="">
        <span></span>
    <span class="text-red hide" id="link-error"; role="alert"></span>
    @error('link')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group col-md-6">
    <label for="description">{{ __('Description')}}</label>
    <textarea class="form-control @error('description') is-invalid @enderror"  name="description" id="description" required>{{old('description', @$resource->description)}}</textarea>
        <span></span>
    <span class="text-red hide" id="description-error"; role="alert"></span>
    @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group col-md-6">
    <label>{{ __('Is Featured')}}</label>
    @php
        $active = '';
        $inactive = '';
        if(isset($resource))
        {
            if($resource->is_active == 1)
            {   
                $active = 'selected';
            }else{
                $inactive = 'selected';
            }
        }    
    @endphp
    
    <select class="form-control" placeholder="Select Status" name="is_active" id="is_active">
        <option value="1" {{ $active }} ><b>Active</b></option>
        <option value="2" {{ $inactive }}><b>Inactive</b></option>
    </select>
</div>
<div class="form-group col-md-6">
    @yield('upload_input_image_tag')
    <br/>
    Width: <span id='width'></span><br/>
    Height: <span id='height'></span>
    {{--  <div id="response" class="text-danger"></div>  --}}
</div>

<button type="submit" class="btn btn-primary mr-2" style="margin-top: 10px;">{{ $page == 'create' ? 'Submit' : 'Update'}}</button>
@if($page =  'edit' && @$resource)
    {{-- <button type="submit" class="btn btn-danger mr-2" style="margin-top: 10px;"> <a href="{{ route('admin.books.destroy', $resource->id) }}" class="text-white">Remove E-Books</a></button> --}}
    <button type="submit" class="btn btn-danger mr-2" style="margin-top: 10px;"> <a data-href="{{ route('admin.books.destroy', $resource->id) }}" data-toggle="modal" data-target="#confirm-delete" class="text-white">Remove E-Books</a></button>

@endif

@include('common.delete-modal')