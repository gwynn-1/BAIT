$(document).ready(function () {
    $(document).on("click",".pagination li a",function (e) {
        e.preventDefault();
        if($(".txtsort").val() ==""){
            $.ajax({
                method: "get",
                url : $(this).attr('href'),
                data:{
                    typevalue:"radiosort",
                    radiovalue: $("input[type=radio][name=sort]").val()
                }
            }).done(function (data) {
                $(".book-wrapper").html(data);
            });
        }
        else{
            $.ajax({
                method: "get",
                url : $(this).attr('href'),
                data:{
                    typevalue:"textsort",
                    textvalue: $(".txtsort").val()
                }
            }).done(function (data) {
                $(".book-wrapper").html(data);
            });
        }
    });

    $("input[type=radio][name=sort]").change(function () {
        $.ajax({
            method: "get",
            url : "",
            data:{
                typevalue:"radiosort",
                radiovalue: $(this).val()
            }
        }).done(function (data) {
            $(".book-wrapper").html(data);
        });
    });

    $("#form-sort").submit(function (e) {
        e.preventDefault();
        $("#all-sort").prop("checked", true);
        $.ajax({
            method: "get",
            url : "",
            data:{
                typevalue:"textsort",
                textvalue: $(".txtsort").val()
            }
        }).done(function (data) {
            $(".book-wrapper").html(data);
        });
    });
});
