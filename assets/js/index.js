$( document ).ready(function(){
    background_hover();
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