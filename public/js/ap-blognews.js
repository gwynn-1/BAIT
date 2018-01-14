$(document).ready(function () {
    $(document).on("click",".pagination li a",function (e) {
        e.preventDefault();
            $.ajax({
                method:"GET",
                url : $(this).attr('href'),
            }).done(function (data) {
                $(".blog-wrapper").html(data)
            });
    });

});