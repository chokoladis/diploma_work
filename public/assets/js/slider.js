$(document).ready(function (){

    function next(){
        var currentImg = $('.slider_item.curry');
        var currentImgIndex = $('.slider_item.curry').index();
        var nextImgIndex = currentImgIndex+1;
        var nextImg = $('.slider_item').eq(nextImgIndex);
        currentImg.fadeOut(1000);
        currentImg.removeClass('curry');
        if(nextImgIndex == ($('.slider_item:last').index()+1)){
            $('.slider_item').eq(0).fadeIn(1000);
            $('.slider_item').eq(0).addClass('curry');
        }
        else{
            nextImg.fadeIn(1000);
            nextImg.addClass('curry');
        }
    }

    $('.next').click(function(){
        var currentImg = $('.slider_item.curry');
        var currentImgIndex = $('.slider_item.curry').index();
        var nextImgIndex = currentImgIndex+1;
        var nextImg = $('.slider_item').eq(nextImgIndex);
        currentImg.fadeOut(1000);
        currentImg.removeClass('curry');
        if(nextImgIndex == ($('.slider_item:last').index()+1)){
            $('.slider_item').eq(0).fadeIn(1000);
            $('.slider_item').eq(0).addClass('curry');
        }
        else{
            nextImg.fadeIn(1000);
            nextImg.addClass('curry');
        }
    });       
    $('.prev').click(function(){
        var currentImg = $('.slider_item.curry');
        var currentImgIndex = $('.slider_item.curry').index();
        var prevImgIndex = currentImgIndex-1;
        var prevImg = $('.slider_item').eq(prevImgIndex);

        currentImg.fadeOut(1000);
        currentImg.removeClass('curry');
        prevImg.fadeIn(1000);
        prevImg.addClass('curry');
    });
    setInterval(next, 8000);
    
});