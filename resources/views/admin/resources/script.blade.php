<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<script type="text/javascript">
   
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

            // console.log('img height:', imgheight)
            // console.log(',max height:', maxheight)
            // if (imgheight <= maxheight) {
            //     $("#response").text("");
            // } else {
            //     document.getElementById("image").value = null;
            //     $('#blah').attr('src', '')
            //     $('#blah').hide()
            //     $("#response").text("E-Books image approx at list maximum height 300px required!");
            // }
        };
        img.onerror = function () {
            // $("#response").text("not a valid file: " + file.type);
        };
    });

    $('#confirm-delete').on('show.bs.modal', function(e) {
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
    });
</script>
