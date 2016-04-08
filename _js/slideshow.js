$(document).ready(function(){

/* Slideshow */


    console.log();

    function fade() {

        var lastImg = $('#container .slides img:last');

        $('#container .slides img:last').animate({'opacity':'0'}, 4000, function() {
            lastImg.prependTo('#container .slides');
            lastImg.css({'opacity':'1'});
            setTimeout(fade, 4000);
        });
    }

    setTimeout(fade, 4000);
    
});