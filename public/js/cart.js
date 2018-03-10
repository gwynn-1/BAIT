$(document).ready(function(){

    $(".delete-button").mouseover(function(){
        $(this).children(".fa").removeClass("fa-trash");
        $(this).children(".fa").addClass("fa-trash-o");
    });

    $(".delete-button").mouseleave(function(){
        $(this).children(".fa").removeClass("fa-trash-o");
        $(this).children(".fa").addClass("fa-trash");
    });

    $(document).on("click",".delete-button",function () {
        var rowId = $(this).attr("data-rowid");
        var current_element = $(this);
        // alert($(".cart-item").length);
        $.ajax({
            url: "checkout/deletecart",
            type: "GET",
            data: {
                rowid: rowId
            },
            success: function (data) {
                if(data=="success"){
                    if($(".cart-item").length >1) {
                        current_element.parents(".cart-item").fadeOut(200, "linear", function () {
                            $(this).remove();
                            $(".title-cart p span").html($(".cart-item").length);
                        })
                    }else {
                        $(".cart-available").html("<p class='empty-cart'>Danh sách quan tâm trống, hãy trở lại trang chủ để tiếp tục.</p>")
                    }
                }else{
                    $("#cart-notification .modal-body p").html(data.failed);
                    $("#cart-notification").modal("show");
                }
            }
        })
    })
});