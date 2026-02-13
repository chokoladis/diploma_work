var i=false;
$(window).scroll(function() {
    if ($(this).scrollTop() > 1){
        $('header').addClass("glide");
        $('div.on_top').css("right","1%");
    }
    else{
        $('div.on_top').css("right","-10%");
        $('header').removeClass("glide");
    }
});

$(".vk_menu").click(function(){
    if (!i){
        $(".vk").css("top","7vh");
        i=true;
    }
    else {
        $(".vk").css("top","-20vh");
        i=false;
    }

});
$(".on_top").click(function(){
    $(window).scrollTop(0);
});