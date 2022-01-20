@extends('admin.layouts.master')
@section('title', 'Integration')

@push('style')
    @include('admin.partials.dataTable-files')
@endpush

@section('breadcrumb-title')
    <h1>Integrations</h1>
@stop

@section('breadcrumb-items')
    <li class="breadcrumb-item" aria-current="page">{{ __('Integrations')}}</li>
    <li class="breadcrumb-item active" aria-current="page">{{ __('Index')}}</li>
@stop

@section('content')
    @include('common.breadcrumb')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{route('admin.integration.create')}}" class="btn btn-primary">{{ __('Add Integration')}} <i class="fa fa-plus" aria-hidden="true"></i></a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="" class="integration-list table table-bordered table-striped">
                            <thead>
                                <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Logo</th>
                                <th>Is Featured</th>
                                <th>Description</th>
                                <th>Action</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
    </div>
@include('common.delete-modal')
@endsection

@push('script')
<!-- DataTables  & Plugins -->
<script>
    $(function () {
            var table = $('.integration-list').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.integration.list') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'name', name: 'name'},
                {data: 'logo_image', name: 'logo_image'},
                {data: 'featured', name: 'featured'},
                {data: 'description', name: 'description'},
                {
                    data: 'action',
                    name: 'action',
                    orderable: true,
                    searchable: true
                },
            ]
        });
    });
    $('#confirm-delete').on('show.bs.modal', function(e) {
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
    });
</script>
@endpush
