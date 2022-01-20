<script>
    /* Add & edit click */
    function login() {
        var element = document.getElementById("category-new");
        element.classList.remove("is-invalid");
        element.value = '';
    
        var element2 = document.getElementById("category-name");
        element2.classList.remove("is-invalid");
        element2.value = '';
        
        $('#category_update_error_message').hide()
        $('#category_update_error_message').html('')
    
        $('#category_new_error_message').hide()
        $('#category_new_error_message').html('')
    };
    
    $('#newCategoryForm').on('submit', function(e){
        // console.log('form submit new Category');
        e.preventDefault();
        var tag = $('#category-new').val();
        $('#category_new_error_message').hide();
        var formdata = $("#newCategoryForm").serialize();
        if(tag)
        {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('admin.category.store') }}",
                type: "POST",
                data: formdata,
                success: function(response){
                    if(response.status == '200')
                    {
                        $('#categoryModal').modal('hide');
                        $('.category-list').DataTable().ajax.reload();
                        toastr.options =
                        {
                            "closeButton" : true,
                            "progressBar" : true
                        }
                        toastr.success("Category Created!");
                        
                    }else{
                        var v = document.getElementById("category-new");
                        v.className += " is-invalid";
                        $('#category_new_error_message').show()
                        $('#category_new_error_message').html(response.message)
                    }
                },
                errors: function(errors){
                    console.log('errors:', errors)
                    alert("not submitted.")
                }
            });
        }
    });
    
    $('#edit-cat-form').on('submit', function(e){
        // console.log('form submit update Category');
        e.preventDefault();
        var tag = $('#category-name').val();
        var url = $('#edit-cat-form').attr('data-action');
    
        $('#category_update_error_message').hide();
        var formdata = $("#edit-cat-form").serialize();
        if(tag)
        {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                type: "POST",
                data: formdata,
                success: function(response){
                    if(response.status == '200')
                    {
                        $('#categoryEditModal').modal('hide');
                        $('.category-list').DataTable().ajax.reload();
                        toastr.options =
                        {
                            "closeButton" : true,
                            "progressBar" : true
                        }
                        toastr.success("Category Created!");
                        
                    }else{
                        var v = document.getElementById("category-name");
                        v.className += " is-invalid";
                        $('#category_update_error_message').show()
                        $('#category_update_error_message').html(response.message)
                    }
                },
                errors: function(errors){
                    console.log('errors:', errors)
                    alert("not submitted.")
                }
            });
        }
    });
    </script>