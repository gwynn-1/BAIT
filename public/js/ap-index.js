$(document).ready(function () {
    $(document).on("click",".pagination li a",function (e) {
        e.preventDefault();
        $.ajax({
            method: "get",
            url : $(this).attr('href')
        }).done(function (data) {
            $(".book-wrapper").html(data);
        });
    });
});
