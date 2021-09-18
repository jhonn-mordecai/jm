$(document).ready(function(){

    $(window).scroll(function(){
        let scroll_trigger = $(window).scrollTop();

        if (scroll_trigger > 650) {
            $('header').slideDown();
        } else {
            $('header').slideUp();
        }
    });	
    
    // Scroll body to top when clicking .back-top
    $('header h1 a').click(function() {
        $('body,html').animate({scrollTop: 0}, 800);
        return false;
    });
});