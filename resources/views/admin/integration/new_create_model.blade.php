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