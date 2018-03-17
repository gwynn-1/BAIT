function sendAjax() {
    var search_input = $("#txtsearch").val();
    var category_input = $("#category option:selected").val();
    $.ajax({
        url:"search-ajax",
        type:"GET",
        data:{
            value: search_input,
            id_type:category_input
        }
    }).done(function (data) {
        $(".autocomplete").hide();
        if(data!=""){
            $(".autocomplete").hide();
            $(".autocomplete ul").html("");
            $.each(data,function (index,item) {
                $(".autocomplete ul").append("<li><a href='/b/"+item.id+"/"+ item.url_book+"'>"+item.name+"</a></li>");
            });
            $(".autocomplete").show();
        }
    });
}

function UpdateCartContent(data) {
    $("#cart-items").html(data.view);
    $(".borrow-box .link-to-borrow span span").html(data.count);
}

function getCartContent(){
    $.ajax({
        url:"checkout/getcontent",
        type:"GET",
        data:{},
        success: function(data){
            UpdateCartContent(data);
        }
    });
}

$(document).ready(function(){
    getCartContent();

    $('select').niceSelect();
    $(window).scroll(function() {
        if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
            $('.to-the-top').fadeIn(200);    // Fade in the arrow
        } else {
            $('.to-the-top').fadeOut(200);   // Else fade out the arrow
        }
    });

    $('.to-the-top').click(function() {      // When arrow is clicked
        $('body,html').animate({
            scrollTop : 0                       // Scroll to top of body
        }, 500);
    });

    $("#school").change(function () {
        if($(this).val() == "other"){
            $("#another-school").show(100);
        }
        else {
            $("#another-school").hide(100);
        }
    });

    $("#txtsearch").focus(function(){
        $("#btn-search").animate({
            backgroundColor:"#308C01"
        },400);
    });

    $("#txtsearch").focusout(function(){
        $("#btn-search").animate({
            backgroundColor:"white"
        },400);
    });

    $("#txtsearch").on("input",function () {
        // alert("clck");
        setTimeout(sendAjax,700);
    });

    $(".borrow-box").mouseover(function(){
        if($(".cart-item-block").length>0){
            $(".cart-block").stop();
            $(".cart-block").slideDown("fast");
        }
    });

    $(".borrow-box").mouseleave(function(){
        $(".cart-block").stop();
        $(".cart-block").slideUp("fast");
    });

    $(".menu-head").click(function(){
        if($(".menu-content").css("display")==="none"){
            $(".menu-content").stop();
            $(".menu-content").slideDown("fast");
        }
        else{
            $(".menu-content").stop();
            $(".menu-content").slideUp("fast");    
        }
    });

    $("#nav-category span").click(function(){
        if($("#nav-category ul").css("display")==="none"){
            $("#nav-category ul").stop();
            $("#nav-category ul").slideDown("fast");
        }
        else{
            $("#nav-category ul").stop();
            $("#nav-category ul").slideUp("fast");    
        }
    });

    $(".owl-carousel-blog").owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        autoHeight: true,
        responsive:{
            0:{
                items:1
            },
            500:{
                items:3
            },
            900:{
                items:5 
            }
        }
    });
    $(".owl-carousel-book").owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        autoHeight: true,
        responsive:{
            0:{
                items:1
            },
            590:{
                items:3
            },
            900:{
                items:4
            }
        }
    });

    $(".captcha-reset").click(function () {
       $.ajax({
           url:"signup/get-captcha",
           type:"GET",
           success: function (data) {
               $(".captcha-img").html(data)
           }
       });
    });

    $(document).on("click",".delete-item",function (e) {
        var rowId = $(this).attr("data-rowid");
        var current_element = $(this);
        var count = $(".borrow-box .link-to-borrow span span").html();
        // alert(parent);
        // alert(rowId);
        $.ajax({
            url:"checkout/deletecart",
            type:"GET",
            data:{
                rowid: rowId
            },
            success: function (data) {
                // alert(data);
                if(data == "success"){
                    if($(".cart-item-block").length>1) {
                        current_element.parents(".cart-item-block").animate({
                            "height": "0px",
                            "padding": "0px"
                        }, 200, function () {
                            $(".borrow-box .link-to-borrow span span").html(count - 1);
                            $(this).remove();
                            $(".cart-block").css("height", "100%");
                        });
                    }
                    else{
                        $(".borrow-box .link-to-borrow span span").html(count - 1);
                        current_element.parents(".cart-item-block").remove();
                        $(".cart-block").css("height", "100%");
                        $(".cart-block").slideUp("fast");
                    }
                }else{
                    swal({
                        text : data.failed,
                        icon : "error"
                    });
                }
            }
        });
    });
    
    $(document).on("click",".borrow-button",function (e) {
        var id_data = $(this).attr("data-id");
        var name_data = $(this).attr("data-name");
        var image_data = $(this).attr("data-image");
        var author_data = $(this).attr("data-author");
        $(this).prop("disabled",true);
        $.ajax({
            url:"checkout/addcart",
            type:"GET",
            data:{
                id: id_data,
                name:name_data,
                image:image_data,
                author:author_data
            },
            success: function(data){
                if (data.type == "failed") {
                    swal({
                        text : data.message,
                        icon : "error"
                    });
                } else if (data.type == "success_cartadd") {
                    if($(".borrow-box").length>0) {
                        $('body,html').animate({
                            scrollTop: 0                       // Scroll to top of body
                        }, 500);
                        UpdateCartContent(data);
                    }
                    if($(".cart-available").length>0){
                        location.href = "checkout/cart";
                    }
                }
            }
        }).done(function(data){
            $(this).prop("disabled",false);
        });
    });
});

function MenuClick(x) {
    $(".dropdown-category").stop();
    $(".dropdown-category").slideToggle(400);
    x.classList.toggle("change");
}