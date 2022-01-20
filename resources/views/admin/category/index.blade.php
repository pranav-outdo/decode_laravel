@extends('admin.layouts.master')
@section('title', 'Category')

@push('style')
  @include('admin.partials.dataTable-files')
@endpush

@section('breadcrumb-title')
    <h1>Category</h1>
@stop

@section('breadcrumb-items')
    <li class="breadcrumb-item" aria-current="page">{{ __('Category')}}</li>
    <li class="breadcrumb-item active" aria-current="page">{{ __('Index')}}</li>
@stop

@section('content')
    @include('common.breadcrumb')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="javascript:void(0)" onclick="addEditcategoryClick()" class="btn btn-primary" data-toggle="modal" data-target="#categoryModal">{{ __('Add Category')}} <i class="fa fa-plus" aria-hidden="true"></i></a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="" class="integration-list table table-bordered table-striped category-list">
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
<div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="categoryModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="categoryModalLabel">Add Category</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form id="newCategoryForm">
            @csrf
            <span id="hrefPost" data-href="{{ route('admin.category.store') }}"></span>
            <div class="modal-body">
                <div class="form-group">
                    <label for="name">Category Name</label>
                    <input type="text" class="form-control" id="category-new" name="name" required placeholder="Category Name" >
                    <div class="alert alert-danger" id="category_new_error_message" style="display:none;"></div>
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


<div class="modal fade" id="categoryEditModal" tabindex="-1" role="dialog" aria-labelledby="categoryEditModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="categoryEditModalLabel">Edit Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="edit-cat-form" data-action="">
        @csrf
        <div class="modal-body">
            <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" class="form-control" id="category-name" placeholder="Category Name" name="name" value="" required>
                <div class="alert alert-danger" id="category_update_error_message" style="display:none;"></div>
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
@include('admin.category.script')

<!-- DataTables  & Plugins -->
<script type="text/javascript">
  $(function () {
    var table = $('.category-list').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('admin.category.list') }}",
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
  
  $('#categoryEditModal').on('show.bs.modal', function(e) {
      var url = $(e.relatedTarget).data('href');
      $.ajax({
          type: 'GET',
          url: url,
          success: function (data) {
              var route = "{{route('admin.category.update',':category')}}";
              route = route.replace(':category', data.data.id);
              $('#category-name').val(data.data.name);
              $('#edit-cat-form').attr('data-action', route);
          }
      });
  });
</script>
@endpush
