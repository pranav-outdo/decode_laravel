
@extends('admin.layouts.master')
@section('title', 'Add Integration')

@push('style')
@endpush

@section('breadcrumb-title')
    <h1>Integration Update</h1>
    <a href="{{ route('admin.integration.index') }}" class="badge badge-primary"><i class="fa fa-arrow-left"></i></a>
    <span>{{ __('Back')}}</span>
@stop
@section('breadcrumb-items')
    <li class="breadcrumb-item" aria-current="page"><a href="{{ route('admin.integration.index') }}">{{ __('Integration')}}</a></li>
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
                        <form class="forms-sample" id="analysisForm" action="{{ route('admin.integration.update', $integration->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @if(isset($integration))
                                @method('PUT')
                            @endif
                            
                            @include('admin.integration.content')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.integration.new_create_model')
@endsection
@push('script')
    @include('admin.integration.script')
@endpush
