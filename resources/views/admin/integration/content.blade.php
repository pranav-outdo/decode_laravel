<div class="form-group col-md-6">
    <label for="name">{{ __('Name')}}</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Name" value="{{isset($integration) ? $integration->name : ''}}" required="">
        <span></span>
    <span class="text-red hide" id="name-error"; role="alert"></span>
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group col-md-6">
    <label for="description">{{ __('Description')}}</label>
    <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" placeholder="Description" value="{{isset($integration) ? $integration->description : ''}}" required="">
        <span></span>
    <span class="text-red hide" id="description-error"; role="alert"></span>
    @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
@if($page == 'edit')
    <div class="form-group col-md-6">
        <label>{{ __('Categories')}}</label>
        <button type="button" onclick="addCategoryClick()" class="badge badge-primary" style="margin-bottom: 6px;
        margin-left: 10px;
        border-radius: 5px;float: right;" data-toggle="modal" data-target="#categoryModal"><i class="fa fa-plus" aria-hidden="true"></i></button>
        <select required name="category_ids[]" id="category_ids" class="category-search select2 select2-hidden-accessible js-example-basic-single select2-search select2-search--dropdown form-control" multiple data-live-search="true" placeholder="Select Types">
            @foreach($categories as $category)
            <option value="{{$category->id}}" @if($category->id) {{ in_array($category->id, $integration->category_ids) ? 'selected' : '' }} @endif>{{$category->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group col-md-6">
        <label>{{ __('Logo Image')}}</label>
        @if (File::exists(store_logo_image_path().$integration->logo)) 
            <input type="file" id="logo" name="logo" placeholder="logo" onchange="readURL(this);" value="{{old('logo')}}" class="form-control @error('logo') is-invalid @enderror">
        @else   
            <input required type="file" id="logo" name="logo" placeholder="Logo Image" onchange="readURL(this);" value="{{old('logo')}}" class="form-control @error('logo') is-invalid @enderror">
        @endif  
        
        @error('logo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br />
        @if (File::exists(store_logo_image_path().$integration->logo)) 
            <img  id="blah" src="{{ logo_image_public_path().$integration->logo }}" height="40px">
        @else   
            <img  src="{{asset('img/no-image.png')}}" height="40px" id="blah">
        @endif  
        <br/>
        Width: <span id='width'></span><br/>
        Height: <span id='height'></span>
        <div id="response" class="text-danger"></div>
    </div>
@else 
    <div class="form-group col-md-6">
        <label>{{ __('Categories')}}</label>
        <button type="button" onclick="addCategoryClick()" class="badge badge-primary" style="margin-bottom: 6px;
        margin-left: 10px;
        border-radius: 5px;float: right;" data-toggle="modal" data-target="#categoryModal"><i class="fa fa-plus" aria-hidden="true"></i></button>
        <select required name="category_ids[]" id="category_ids" class="category-search select2 select2-hidden-accessible js-example-basic-single select2-search select2-search--dropdown form-control" multiple data-live-search="true" placeholder="Select Types">
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-md-6">
        <label>{{ __('Logo Image')}}</label>
        <input type="file" required id="logo" name="logo" placeholder="Logo Image" onchange="readURL(this);" value="{{old('logo')}}" class="form-control @error('logo') is-invalid @enderror" >
        @error('logo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br />
            <img src="{{asset('img/no-image.png')}}" height="40px" id="blah">
        <br/>
        Width: <span id='width'></span><br/>
        Height: <span id='height'></span>
        <div id="response" class="text-danger"></div>
    </div>
@endif

<div class="form-group col-md-6">
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

<button type="submit" class="btn btn-primary mr-2" style="margin-top: 10px;">{{ $page == 'create' ? 'Submit' : 'Update'}}</button>
