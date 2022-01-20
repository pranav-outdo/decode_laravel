<link rel="stylesheet" href="{{asset('/')}}admin/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="{{asset('/')}}admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<link rel="stylesheet" href="{{asset('/')}}admin/plugins/bs-stepper/css/bs-stepper.min.css">

<script src="{{asset('/')}}admin/plugins/select2/js/select2.full.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.category-search').select2();
        $('.js-example-basic-single').select2();
    });    
    
    var page = "{{ $page }}"; 
    if(page != 'edit'){
        $('#blah').hide();
    } 

    $(function () {
        $("body").on("keydown", "input", function (e) {
            if (e.which === 32 && e.target.selectionStart === 0) {
                return false;
            }
        });
        $("body").on("keydown", "textarea", function (e) {
            if (e.which === 32 && e.target.selectionStart === 0) {
                return false;
            }
        });
    });

    function readURL(input) {
        var fileName = document.getElementById("logo").value;
        var idxDot = fileName.lastIndexOf(".") + 1;
        var extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
        if (extFile=="jpg" || extFile=="jpeg" || extFile=="png"){
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#blah').show();
                    $('#blah')
                        .attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }else{
            document.getElementById("logo").value = null;
            $('#blah').attr('src', '')
            alert("Only jpg/jpeg and png image are allowed!");
        }
    }

    var _URL = window.URL || window.webkitURL;
    $("#logo").change(function () {
        var file = $(this)[0].files[0];
        img = new Image();
        var imgwidth = 0;
        var imgheight = 0;
        var maxwidth = 300;
        var maxheight = 300;

        img.src = _URL.createObjectURL(file);
        img.onload = function () {
            imgwidth = this.width;
            imgheight = this.height;
            $("#width").text(imgwidth);
            $("#height").text(imgheight);
            
        };
        img.onerror = function () {
        };
    });

    /* Add click */
    function addCategoryClick() {
        var element = document.getElementById("category-new");
        element.classList.remove("is-invalid");
        element.value = '';
        
        $('#category_update_error_message').hide();
        $('#category_update_error_message').html('')

        $('#category_new_error_message').hide();
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
                        var list = {
                            id: response.data.id,
                            text: response.data.name,
                            value: response.data.id,
                            color: "#c5efd0"
                        };
                        var newOption = new Option(list.text, list.id, list.value, list.color, false, false);
                        $('.category-search').append(newOption).trigger('change');                    
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
</script>