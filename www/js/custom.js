$( document ).ready(function() {
    // $(function () {
    //     var options = {
    //         cell_height: 60,
    //         vertical_margin: 20
    //     };
    //     $('.grid-stack').gridstack(options);
    // });

    // $("#cont_f1ef76bb04d7e51c38b5f72356aab153").attr("style", "width: 100%;");
    // $("#f1ef76bb04d7e51c38b5f72356aab153").attr("style", "width: 100%; min-height: 250px; margin: 0 auto;");
   
    
        $('.dropdown-submenu a.test').on("click", function(e){
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
   
    $(function () {
        
    });
    
});

