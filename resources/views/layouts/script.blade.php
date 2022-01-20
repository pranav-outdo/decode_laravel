<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Testimonial_Slider -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<!-- Slick.Js -->
<script src="js/slick.js"></script>
<script>
    /* ----------------------- Top_Header ------------------------- */
    const openMenu = document.querySelector(".open-menu");
        const closeMenu = document.querySelector(".close-menu");
        const menuWrapper = document.querySelector(".menu-wrapper");
        const hasCollapsible = document.querySelectorAll(".has-collapsible");

        // Sidenav Toggle
        openMenu.addEventListener("click", function () {
            menuWrapper.classList.add("offcanvas");
        });

        closeMenu.addEventListener("click", function () {
            menuWrapper.classList.remove("offcanvas");
        });

        // Collapsible Menu
        $(document).mouseup(function(e){
            if($(e.target).hasClass('menu-name')){
                if($('.solution-menu').hasClass('active')){
                    $('.solution-menu').removeClass('active');
                }else{
                    $('.solution-menu').addClass('active');
                }
            }else{
                $('.solution-menu').removeClass('active');
            }
        });
        /* End */
</script>
