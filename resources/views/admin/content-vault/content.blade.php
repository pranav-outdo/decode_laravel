<div class="form-group col-md-6">
    <label for="title">{{ __('Title')}}</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Title" value="{{isset($contentVault) ? $contentVault->title : ''}}" required="">
        <span></span>
    <span class="text-red hide" id="analysis-name-error"; role="alert"></span>
    @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group col-md-6">
    <label for="link">{{ __('Link')}}</label>
    <input type="text" class="form-control @error('link') is-invalid @enderror" id="link" name="link" placeholder="Link" value="{{isset($contentVault) ? $contentVault->link : ''}}" required="">
        <span></span>
    <span class="text-red hide" id="link-error"; role="alert"></span>
    @error('link')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

@if($page == 'edit')
    <div class="form-group col-md-6">
        <label>{{ __('Types')}}</label>
        <button type="button" onclick="addClick()" class="badge badge-primary" style="margin-bottom: 6px;
        margin-left: 10px;
        border-radius: 5px;float: right;" data-toggle="modal" data-target="#typeModal"><i class="fa fa-plus" aria-hidden="true"></i></button>
        <select required name="type_ids[]" id="type_ids" class="type-search select2 select2-hidden-accessible js-example-basic-single select2-search select2-search--dropdown form-control" multiple data-live-search="true" placeholder="Select Types">
            @foreach($types as $keytype => $type)
                <option value="{{$type->id}}" @if($type->id) {{ in_array($type->id, $contentVault->type_ids)? 'selected' : '' }} @endif>{{$type->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-md-6">
        <label>{{ __('Topics')}} </label>
        <button type="button" onclick="addClick()" class="badge badge-primary" style="margin-bottom: 6px;
        margin-left: 10px;
        border-radius: 5px;float: right;" data-toggle="modal" data-target="#topicModal"><i class="fa fa-plus" aria-hidden="true"></i></button>
        <select required name="topic_ids[]" id="topic_ids" class="topic-search select2 select2-hidden-accessible js-example-basic-single select2-search select2-search--dropdown form-control" multiple data-live-search="true" placeholder="Select Topics">
            @foreach($topics as $key => $top)
                <option value="{{$top->id}}" @if($top->id) {{ in_array($top->id, $contentVault->topic_ids)? 'selected' : '' }} @endif>{{$top->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group col-md-6">
        <label>{{ __('Image')}}</label>
        @if (File::exists(store_image_path().$contentVault->image)) 
        <input type="file" id="image" name="image" placeholder="Image" onchange="readURL(this);" value="{{old('image')}}" class="form-control @error('image') is-invalid @enderror">
        @else   
        <input required type="file" id="image" name="image" placeholder="Image" onchange="readURL(this);" value="{{old('image')}}" class="form-control @error('image') is-invalid @enderror">
        @endif  
        
        @error('logo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br />
        @if (File::exists(store_image_path().$contentVault->image)) 
            <img  id="blah" src="{{ image_public_path().$contentVault->image }}" height="200px">
        @else   
            <img  src="{{asset('img/no-image.png')}}" height="200px" id="blah">
        @endif  
        <br/>
        Width: <span id='width'></span><br/>
        Height: <span id='height'></span>
        <div id="response" class="text-danger"></div>
    </div>
@else
    <div class="form-group col-md-6">
        <label>{{ __('Types')}}</label>
        <button type="button" onclick="addClick()" class="badge badge-primary" style="margin-bottom: 6px;
        margin-left: 10px;
        border-radius: 5px;float: right;" data-toggle="modal" data-target="#typeModal"><i class="fa fa-plus" aria-hidden="true"></i></button>
        <select required name="type_ids[]" id="type_ids" class="type-search select2 select2-hidden-accessible js-example-basic-single select2-search select2-search--dropdown form-control" multiple data-live-search="true" placeholder="Select Types">
            @foreach($types as $keytype => $type)
                <option value="{{$type->id}}">{{$type->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-md-6">
        <label>{{ __('Topics')}}</label>
        <button type="button" onclick="addClick()" class="badge badge-primary" style="margin-bottom: 6px;
        margin-left: 10px;
        border-radius: 5px;float: right;" data-toggle="modal" data-target="#topicModal"><i class="fa fa-plus" aria-hidden="true"></i></button>
        <select required name="topic_ids[]" id="topic_ids" class="topic-search select2 select2-hidden-accessible js-example-basic-single select2-search select2-search--dropdown form-control" multiple data-live-search="true" placeholder="Select Topics">
            @foreach($topics as $key => $top)
                <option value="{{$top->id}}">{{$top->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-md-6">
        <label>{{ __('Image')}}</label>
        <input type="file" required id="image" name="image" placeholder="Image" onchange="readURL(this);" value="{{old('image')}}" class="form-control @error('image') is-invalid @enderror" >
        @error('logo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br />
            <img src="{{asset('img/no-image.png')}}" height="200px" id="blah">
        <br/>
        Width: <span id='width'></span><br/>
        Height: <span id='height'></span>
        <div id="response" class="text-danger"></div>
    </div>
@endif

<button type="submit" class="btn btn-primary mr-2" style="margin-top: 10px;">{{ $page == 'create' ? 'Submit' : 'Update'}}</button>
