$( document ).ready(function(){
    // background_hover();
    project_hover();
    slide_hover();
    
    // on mobile, show/hide menu on click
    $('.work').click(function(){
        $('.project-list').toggle();
    });

    (() => {
      'use strict';
      // Page is loaded
      const objects = document.getElementsByClassName('asyncImage');
      Array.from(objects).map((item) => {
        // Start loading image
        const img = new Image();
        img.src = item.dataset.src;
        // Once image is loaded replace the src of the HTML element
        img.onload = () => {
          item.classList.remove('asyncImage');
          return item.nodeName === 'IMG' ? 
            item.src = item.dataset.src :        
            item.style.backgroundImage = `url(${item.dataset.src})`;
        };
      });
    })();

    // swipe right / left to advance slide
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

function project_hover() {
    $('.project--title').mouseenter(function(){
        var link = $(this).find(".project-link");
        var color = link.attr("data-color");
        $(this).css('background-color', color);
    });
    $('.project--title').mouseleave(function(){
        $(this).css('background-color', 'white');
    });
}

function slide_hover() {
    $('.slide-link').mouseenter(function(){
        var color = $(this).attr("data-color");
        $(this).find(".thumbnail").css('background-color', color);
        $(this).find("img").css('opacity', '0');
        var index = $(this).attr("data-number") - 1;
    });
    $('.slide-link').mouseleave(function(){
        $(this).find(".thumbnail").css('background-color', 'initial');
        $(this).find("img").css('opacity', '1');
    });
}

