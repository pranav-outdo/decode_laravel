//modal show
function modalShowFun(id) {
    // console.log('id:', id)
    $.ajax({
       type:'POST',
       url: modalRoutesShow,
       data:{id:id},
       headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
       success:function(data){
            console.log('data:', data)
            $('#msgnotshow').html(data);
            $("#showModal").modal();
            var element = document.getElementById("showModal");
            element.classList.add("show");
       }
    });
}


function deleteShowFun(id)
{
    console.log('id:', id)
        swal({
            title: "Are you sure?",
            text: "Do you really want to delete this list?",
            icon: "warning",
            buttons: ["Cancel", "Delete Now"],
            dangerMode: true,
        })
        .then((willDelete) => {
             console.log('id', id)
            if (willDelete) {
                $.ajax({
                   type:'POST',
                   url: deleteRoute,
                   data:{id:id},
                   headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                   success:function(data){
                    console.log('data:', data )
                    if(data == 1)
                    {
                        swal({
                            title: "Deleted",
                            text: "The list has been deleted!",
                            icon: "success",
                        });
                        location.reload(true);
                    }else{
                         swal("The list is not deleted!");
                     }
                   }
                });
            } else {
                swal("The list is not deleted!");
            }
        });
    // $('.html-editor').summernote({
    //   height: 300,
    //   tabsize: 2
    // });
}