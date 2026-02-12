
 $(".title_category").click(function(){
    var index = $('.title_category').index(this);
    var asks = $(".asks");
    if ($(".asks").eq(index).css("display")=="block"){
        $(".asks").eq(index).css("display","none");
    }
    else {
        $(".asks").eq(index).css("display","block");
    }
});