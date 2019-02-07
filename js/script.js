$(window).scroll(function(){
    var b_top=$(document).scrollTop();

    if (b_top < 5){
        $(".customMenuWrap").css("border-bottom","0px solid #c7e0db");
        $(".arrowTop").hide(300);
    }
    else{
        $(".customMenuWrap").css("border-bottom","5px solid #c7e0db");
        $(".arrowTop").show(300);
    }

});

$(document).ready(function(){
    $('.arrowTop').click(function(){$(document).scrollTo('0px', 500);});
});

