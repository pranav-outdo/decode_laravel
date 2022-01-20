@extends('admin.layouts.master')
@section('title', 'Content Vault')

@push('style')
    @include('admin.partials.dataTable-files')
@endpush

@section('breadcrumb-title')
    <h1>Content Vault</h1>
@stop

@section('breadcrumb-items')
    <li class="breadcrumb-item" aria-current="page">{{ __('Content Vault')}}</li>
    <li class="breadcrumb-item active" aria-current="page">{{ __('Index')}}</li>
@stop

@section('content')
    @include('common.breadcrumb')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{route('admin.content-vault.create')}}" class="btn btn-primary">{{ __('Add Content Vault')}} <i class="fa fa-plus" aria-hidden="true"></i></a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="" class="vault-list table table-bordered table-striped">
                            <thead>
                                <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Link</th>
                                <th>Is Active</th>
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
            var table = $('.vault-list').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.content-vault.list') }}",
            columns: [
                {data: 'DT_RowIndex', 'orderable': false, 'searchable': false },
                {data: 'title', name: 'title'},
                {data: 'image', name: 'image'},
                {data: 'link', name: 'link'},
                {data: 'is_active', name: 'is_active'},
                {
                    data: 'action',
                    name: 'action',
                    orderable: true,
                    searchable: false
                },
            ]
        });
    });
    $('#confirm-delete').on('show.bs.modal', function(e) {
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
    });
</script>
@endpush
