@extends('admin.layouts.master')
@section('title', 'Resource Topic')

@push('style')
  @include('admin.partials.dataTable-files')
@endpush

@section('breadcrumb-title')
    <h1>Resource Topic</h1>
@stop

@section('breadcrumb-items')
    <li class="breadcrumb-item" aria-current="page">{{ __('Resource Topic')}}</li>
    <li class="breadcrumb-item active" aria-current="page">{{ __('Index')}}</li>
@stop

@section('content')
    @include('common.breadcrumb')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="javascript:void(0)" class="btn btn-primary" data-toggle="modal" data-target="#topicModal">{{ __('Add Resource Topic')}} <i class="fa fa-plus" aria-hidden="true"></i></a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="" class="table table-bordered table-striped resource-topic-list">
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
    <div class="modal fade" id="topicModal" tabindex="-1" role="dialog" aria-labelledby="topicModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="topicModalLabel">Add Resource Topic</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="{{route('admin.resource-topic.store')}}">
          @csrf
        <div class="modal-body">
            <div class="form-group">
                <label for="name">Resource Topic Name</label>
                <input type="text" class="form-control" id="name" placeholder="Resource Topic Name" name="name" required>
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
<div class="modal fade" id="topicEditModal" tabindex="-1" role="dialog" aria-labelledby="topicEditModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="topicEditModalLabel">Edit Resource Type</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="" id="edit-cat-form">
          @csrf
          @method('put')
        <div class="modal-body">
            <div class="form-group">
                <label for="name">Resource Topic Name</label>
                <input type="text" class="form-control" id="topic-name" placeholder="Resource Topic Name" name="name" value="" required>
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
    var table = $('.resource-topic-list').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('admin.resource.topic.list') }}",
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
  $('#topicEditModal').on('show.bs.modal', function(e) {
      var url = $(e.relatedTarget).data('href');
      $.ajax({
          type: 'GET',
          url: url,
          success: function (data) {
              var route = "{{route('admin.resource-topic.update',':resource-topic')}}";
              route = route.replace(':resource-topic', data.data.id);
              $('#topic-name').val(data.data.name);
              $('#edit-cat-form').attr('action', route);
              // $('#edit-cat-form').attr('data-action', route);
          }
      });
  });
</script>
@endpush
