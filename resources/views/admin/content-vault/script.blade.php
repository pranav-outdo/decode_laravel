<link rel="stylesheet" href="{{asset('/')}}admin/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="{{asset('/')}}admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<link rel="stylesheet" href="{{asset('/')}}admin/plugins/bs-stepper/css/bs-stepper.min.css">

<script src="{{asset('/')}}admin/plugins/select2/js/select2.full.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.topic-search').select2();
        $('.type-search').select2();
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
        var fileName = document.getElementById("image").value;
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
            document.getElementById("image").value = null;
            $('#blah').attr('src', '')
            alert("Only jpg/jpeg and png image are allowed!");
        }
    }

    var _URL = window.URL || window.webkitURL;
    $("#image").change(function () {
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
            // if (imgwidth >= maxwidth && imgheight >= maxheight) { /*  */   }

            console.log('img height:', imgheight)
            console.log(',max height:', maxheight)
            // if (imgheight <= maxheight) {
            //     $("#response").text("");
            // } else {
            //     document.getElementById("image").value = null;
            //     $('#blah').attr('src', '')
            //     $('#blah').hide()
            //     $("#response").text("Content Vault image approx at list maximum height 300px required!");
            // }
        };
        img.onerror = function () {
            // $("#response").text("not a valid file: " + file.type);
        };
    });

    /* Add click */
    function addClick() {
        var element = document.getElementById("type-new");
        element.classList.remove("is-invalid");
        element.value = '';

        var element2 = document.getElementById("tagnew");
        element2.classList.remove("is-invalid");
        element2.value = '';
        
        $('#tagnew_error_message').hide();
        $('#tagnew_error_message').html('')

        $('#type_new_error_message').hide();
        $('#type_new_error_message').html('')
    };

    $('#newTypeForm').on('submit', function(e){
        console.log('form submit new Type');
        e.preventDefault();
        var tag = $('#type-new').val();
        $('#category_new_error_message').hide();
        var formdata = $("#newTypeForm").serialize()
        // console.log('formdata:', formdata)
        // console.log('tag:', tag)
        if(tag)
        {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('admin.resource-type.store') }}",
                type: "POST",
                data: formdata,
                success: function(response){
                    console.log('response:', response)
                    if(response.status == '200')
                    {
                        $('#typeModal').modal('hide');
                        var list = {
                            id: response.data.id,
                            text: response.data.name,
                            value: response.data.id,
                            color: "#c5efd0"
                        };

                        var newOption = new Option(list.text, list.id, list.value, list.color, false, false);
                        
                        // $('.filter-option-inner-inner').append(newOption).trigger('change');
                        $('.type-search').append(newOption).trigger('change');
                        // console.log(response.message);
                    
                    }else{
                        var v = document.getElementById("type-new");
                        v.className += " is-invalid";
                        $('#type_new_error_message').show()
                        $('#type_new_error_message').html(response.message)
                        // console.log(response.message);
                    }
                },
                errors: function(errors){
                    console.log('errors:', errors)
                    alert("not submitted.")
                }
            });
        }
    });

    $('#newTopicForm').on('submit', function(e){
        console.log('form submit new Topic');
        e.preventDefault();
        var tag = $('#tagnew').val();
        var formdata = $("#newTopicForm").serialize()
        // console.log('formdata:', formdata)
        // console.log('tag:', tag)
        if(tag)
        {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('admin.resource-topic.store') }}",
                type: "POST",
                data: formdata,
                success: function(response){
                    console.log('response:', response)
                    if(response.status == '200')
                    {
                        $('#topicModal').modal('hide');
                        var list = {
                            id: response.data.id,
                            text: response.data.name,
                            value: response.data.id,
                            color: "#c5efd0"
                        };

                        var newOption = new Option(list.text, list.id, list.value, list.color, false, false);
                        
                        // $('.filter-option-inner-inner').append(newOption).trigger('change');
                        $('.topic-search').append(newOption).trigger('change');
                        // console.log(response.message);
                    
                    }else{
                        var v = document.getElementById("tagnew");
                        v.className += " is-invalid";
                        $('#tagnew_error_message').show()
                        $('#tagnew_error_message').html(response.message)
                        // console.log(response.message);
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