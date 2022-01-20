<div class="modal fade" id="typeModal" tabindex="-1" role="dialog" aria-labelledby="typeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="typeModalLabel">Add Topic</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form id="newTypeForm">
            @csrf
            <span id="hrefPost" data-href="{{ route('admin.resource-type.store') }}"></span>
            <div class="modal-body">
                <div class="form-group">
                    <label for="name">Type Name</label>
                    <input type="text" class="form-control" id="type-new" name="name" required placeholder="Type Name" >
                    <div class="alert alert-danger" id="type_new_error_message" style="display:none;"></div>
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