$( document ).ready(function(){
    background_hover();
    slide_hover();
})

function background_hover() {
    $('.project-link').mouseenter(function(){
        var color = $(this).attr("data-color");
        console.log(color);
        $('body').css('background-color', color);
    });
    $('.project-link').mouseleave(function(){
        $('body').css('background-color', 'white');
    });
}

function slide_hover() {
    $('.slide-link').mouseenter(function(){
        var color = $(this).attr("data-color");
        console.log(color);
        $(this).find(".thumbnail").css('background-color', color);
        $(this).find("img").css('opacity', '0');
    });
    $('.slide-link').mouseleave(function(){
        $(this).find(".thumbnail").css('background-color', 'initial');
        $(this).find("img").css('opacity', '1');
    });
}