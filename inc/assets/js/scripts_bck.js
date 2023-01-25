$( document ).ready(function() {
    console.log( "ready!" );

    $("#changeFilter").on("change",function(){
        var value = $(this).val();
        location.href = value;
    });

    $(document).on("change", ".product-header-info .item.active .changeVariant",function(){
        var variant = $(this).val();
        $(".product-header-info .item[data-variant='" + variant + "']").find('.changeVariant option').removeAttr("selected");
        $(".product-header-info .item[data-variant='" + variant + "']").find('.changeVariant option[value="' + variant + '"]').attr("selected",true);
        $(".product-header-info .item.active").removeClass("active");
        $(".product-header-info .item[data-variant='" + variant + "']").addClass("active");
    })
    $(document).on("mouseenter", ".product-header-info .item.active .thumbs img",function(){
        $(".product-header-info .item.active .thumbs img").removeClass("active");
        $(this).addClass("active");
        $(".product-header-info .item.active .ctn-carousel-img .bg-category.ext > img").attr("src",$(this).attr("src"));
    });

    if( $('.carousel-hp-evidence')){  
        if( $(window).width() > 767 ) {
            $('.carousel-hp-evidence').owlCarousel({
                items : 1
            });
        }else{
            $('.carousel-hp-evidence').owlCarousel({
                items : 1,
                autoHeight:true
            });
        }
        
    }
    $('.carousel-hp-reel').owlCarousel({
        items : 1,
        autoHeight:true
    });

    if($('.video-thumb').length){
        $(document).on('click', '.cta-video', function(e){
        //$('.videoOverlay').bind('click', function(e){
            var jWindow = $(window).width();
            //if ( jWindow >= 768 ) {

                e.preventDefault();
                var idVideo = $(this).attr('rel');
                var overlayTemplate = $('.overlayTemplate');
                var video = $('.overlayTemplate iframe').attr('src',idVideo);

                overlayTemplate.fadeIn('fast',function(){
                    //$("video:not(.background)").get(0).play();
                });
            //}
        });
        $('.closeOverlayTemplate').bind('click', function(e){
            e.preventDefault();
            $('.overlayTemplate').fadeOut('fast',function(){
                $('.overlayTemplate iframe').attr('src','');
            });
        });
    }
    

    $(".discover-all a").on("click",function(){
        $(".archive .product-preview-list .product-preview").not(".active").slice(0,10).addClass("active");
        if($(".archive .product-preview-list .product-preview").not(".active").length == 0)
            $(".discover-all").hide();
    })

    if($('.wow').length){
        new WOW().init();
    }

    $("#brand-cooker-hood").on("change",function(e){
        
        var brand = $(this).val();
        
        $(".filterable").hide();
        var count = $(".filterable").length;
       
        for(var i =  0; i < count; i++) {
            var $obj = $($(".filterable").get(i));
            if($obj.data('brand').indexOf(brand) > -1)
                $obj.show(); 
        }

        $("#model-cooker-hood option").not('.no-remove').remove();
        if(brand == '') {
            for(var i = 0; i < models.length; i++) {
                $("#model-cooker-hood").append('<option value="'+models[i].model+'">'+models[i].model+'</option>');  
            }
        } else {
            var array = brandModel[brand].model.split(',');
            for(var i = 0; i < array.length; i++) {
                $("#model-cooker-hood").append('<option value="'+array[i]+'">'+array[i]+'</option>');  
            }
        }
        $("#model-cooker-hood option").removeAttr("selected");
        $("#model-cooker-hood option").first().removeAttr("selected");
        $(".archive .product-preview-list .product-preview").addClass("active");
        $(".discover-all").hide();
    })

    $("#model-cooker-hood").on("change",function(e){
        var model = $(this).val();
        var brand = $("#brand-cooker-hood").val();
        $(".filterable").hide();
        var count = $(".filterable").length;
        for(var i =  0; i < count; i++) {
            var $obj = $($(".filterable").get(i));
            if(brand) {
                if($obj.data('model').indexOf(model) > -1 && $obj.data('brand').indexOf(brand) > -1)
                    $obj.show();
            } else if($obj.data('model').indexOf(model) > -1)
                    $obj.show();
            
        }
        $(".archive .product-preview-list .product-preview").addClass("active");
        $(".discover-all").hide();

    });
    if($('.table-filter').length > 0) {

        var datatable;
        var lang = langTable == 'it' ? 'Italian' : 'English';
        var initDataTable = function() {
            datatable = $('.table-filter').DataTable({
                "scrollY": "450px",
                "scrollCollapse": true,
                "paging": false,
                "retrieve": true,
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/"+lang+".json"
                },
                "initComplete": function(settings, json) {
                    $(".dataTables_filter label").prepend('<i class="fas fa-search"></i>');
                    $(".dataTables_filter label input").attr("placeholder",placeholderTable);
                }
            });
            //var input = $(".dataTables_filter label").children('input');
        // $(".dataTables_filter label").html(input);
            
        }
        initDataTable();
        $(window).resize(function(){
            datatable.destroy();
            initDataTable();
        })
    };
});