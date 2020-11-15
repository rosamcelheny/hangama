$( document ).ready(function(){
    // background_hover();
    slide_hover();
    

    document.addEventListener('touchstart', handleTouchStart, false);        
    document.addEventListener('touchmove', handleTouchMove, false);

    var xDown = null;                                                        
    var yDown = null;

    function getTouches(evt) {
      return evt.touches ||             // browser API
             evt.originalEvent.touches; // jQuery
    }                                                     

    function handleTouchStart(evt) {
        const firstTouch = getTouches(evt)[0];                                      
        xDown = firstTouch.clientX;                                      
        yDown = firstTouch.clientY;                                      
    };                                                

    function handleTouchMove(evt) {
        if ( ! xDown || ! yDown ) {
            return;
        }

        var xUp = evt.touches[0].clientX;                                    
        var yUp = evt.touches[0].clientY;

        var xDiff = xDown - xUp;
        var yDiff = yDown - yUp;

        if ( Math.abs( xDiff ) > Math.abs( yDiff ) ) {/*most significant*/
            if ( xDiff > 0 ) {
                /* left swipe */ 
                window.location.replace( $(".next").attr('href') );
            } else {
                /* right swipe */
                window.location.replace( $(".previous").attr('href') );
            }                       
        } else {
            if ( yDiff > 0 ) {
                /* up swipe */ 
            } else { 
                /* down swipe */
            }                                                                 
        }
        /* reset values */
        xDown = null;
        yDown = null;                                             
    };
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
        $(this).find(".thumbnail").css('background-color', color);
        $(this).find("img").css('opacity', '0');
        var index = $(this).attr("data-number") - 1;
        $(".slide-description").eq(index).show();
        $('.project-description').hide();
    });
    $('.slide-link').mouseleave(function(){
        $(this).find(".thumbnail").css('background-color', 'initial');
        $(this).find("img").css('opacity', '1');
        $(".slide-description").hide();
        $('.project-description').show();
    });
}

