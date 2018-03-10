var second = 10;

$(document).ready(function () {
    countDowntoHome();
});

function countDowntoHome() {
    second--;
    $(".second").html(second);
    if(second > 0)
        setTimeout("countDowntoHome()",1000);
    else{
        window.location.replace("http://bait.vn");
    }
}
