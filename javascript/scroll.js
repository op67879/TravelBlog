/* SCROLL UP BUTTON */

$(function(){
    $(window).scroll(function(){
        if ($(this).scrollTop() > 300) {
            $('#scroll').fadeIn();
        } else {
            $('#scroll').fadeOut();
        }
    });
    $('#scroll').click(function(){
        $('html, body').animate({scrollTop:0}, 'slow');
        return false;
    });
});