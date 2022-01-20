
@extends('admin.layouts.master')
@section('title', 'Add Content Vault')

@push('style')
@endpush

@section('breadcrumb-title')
    <h1>{{isset($contentVault) ? 'Content Vault Update' : 'Content Vault Add'}}</h1>
    <a href="{{ route('admin.content-vault.index') }}" class="badge badge-primary"><i class="fa fa-arrow-left"></i></a>
    <span>{{ __('Back')}}</span>
@stop
@section('breadcrumb-items')
    <li class="breadcrumb-item" aria-current="page"><a href="{{ route('admin.content-vault.index') }}">{{ __('Content Vault')}}</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{isset($contentVault) ?  __('Update') : __('Add')}}</li>
@stop
@section('content')
    @include('common.breadcrumb')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card">
                    <div class="card-body">
                        @include('common.any_error')
                        <form class="forms-sample" id="analysisForm" action="{{isset($contentVault) ? route('admin.content-vault.update',$contentVault->id) : route('admin.content-vault.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            @include('admin.content-vault.content')
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="topicModal" tabindex="-1" role="dialog" aria-labelledby="topicModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="topicModalLabel">Add Topic</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="newTopicForm">
                @csrf
                <span id="hrefPost" data-href="{{ route('admin.resource-topic.store') }}"></span>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Topic Name</label>
                        <input type="text" class="form-control" id="tagnew" name="name" required placeholder="Topic Name" >
                        <div class="alert alert-danger" id="tagnew_error_message" style="display:none;"></div>
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

    @include('admin.content-vault.new_create_model')
@endsection
@push('script')
    @include('admin.content-vault.script')
@endpush