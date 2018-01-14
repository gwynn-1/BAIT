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

$(document).ready(function(){
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
        $(".cart-block").stop();
        $(".cart-block").slideDown("fast");
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
            500:{
                items:3
            },
            900:{
                items:4
            }
        }
    });
});

function MenuClick(x) {
    $(".dropdown-category").stop();
    $(".dropdown-category").slideToggle(400);
    x.classList.toggle("change");
}