@extends('admin.layouts.master')
@section('title', 'Resource Type')

@push('style')
  @include('admin.partials.dataTable-files')
@endpush

@section('breadcrumb-title')
    <h1>Resource Type</h1>
@stop

@section('breadcrumb-items')
    <li class="breadcrumb-item" aria-current="page">{{ __('Resource Type')}}</li>
    <li class="breadcrumb-item active" aria-current="page">{{ __('Index')}}</li>
@stop

@section('content')
    @include('common.breadcrumb')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="javascript:void(0)" class="btn btn-primary" data-toggle="modal" data-target="#typeModal">{{ __('Add Resource Type')}} <i class="fa fa-plus" aria-hidden="true"></i></a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="" class="table table-bordered table-striped resource-type-list">
                            <thead>
                                <tr>
                                  <th>Id</th>
                                  <th>Name</th>
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
    <div class="modal fade" id="typeModal" tabindex="-1" role="dialog" aria-labelledby="typeModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="typeModalLabel">Add Resource Type</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="{{route('admin.resource-type.store')}}">
          @csrf
        <div class="modal-body">
            <div class="form-group">
                <label for="name">Resource Type Name</label>
                <input type="text" class="form-control" id="name" placeholder="Resource Type Name" name="name" required>
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
<div class="modal fade" id="typeEditModal" tabindex="-1" role="dialog" aria-labelledby="typeEditModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="typeEditModalLabel">Edit Resource Type</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="" id="edit-cat-form">
          @csrf
          @method('put')
        <div class="modal-body">
            <div class="form-group">
                <label for="name">Resource Type Name</label>
                <input type="text" class="form-control" id="type-name" placeholder="Resource Type Name" name="name" value="" required>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>
@include('common.delete-modal')
@endsection

@push('script')
<!-- DataTables  & Plugins -->
<script type="text/javascript">
  $(function () {
    var table = $('.resource-type-list').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('admin.resource.type.list') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'name', name: 'name'},
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
  $('#typeEditModal').on('show.bs.modal', function(e) {
      var url = $(e.relatedTarget).data('href');
      $.ajax({
          type: 'GET',
          url: url,
          success: function (data) {
              var route = "{{route('admin.resource-type.update',':resource-type')}}";
              route = route.replace(':resource-type', data.data.id);
              $('#type-name').val(data.data.name);
              $('#edit-cat-form').attr('action', route);
          }
      });
  });
</script>
@endpush
