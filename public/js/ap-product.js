$(document).ready(function () {
   $(".expand-button").click(function () {
       if($(".book-detail-content").css("height") == $(".book-detail-content p").css("height")){
           // $(".book-detail-content").css("height","100px");
           $(".book-detail-content").animate({
                "height":"100px"
           },250);
       }
       else{
           // $(".book-detail-content").css("height",$(".book-detail-content p").css("height"));
           $(".book-detail-content").animate({
               "height":$(".book-detail-content p").css("height")
           },250);
       }
   });
});