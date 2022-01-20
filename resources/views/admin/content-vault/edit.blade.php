
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
                            @if(isset($contentVault))
                                @method('PUT')
                            @endif
                            
                            @include('admin.content-vault.content')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.content-vault.new_create_model')
@endsection
@push('script')
    @include('admin.content-vault.script')
@endpush
