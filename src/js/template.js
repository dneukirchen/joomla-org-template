jQuery(document).ready(function ($) {
    // Navbar shrink effect
    $(window).scroll(function () {
        if ($(document).scrollTop() > 150) {
            $('body').addClass('nav-shrinked');
        } else {
            $('body').removeClass('nav-shrinked');
        }
    });

    //===============
    // Waypoints
    //===============

    // Features
    $('.features').waypoint(function(direction) {
        
        this.destroy();
    }, {offset: 200});

    // Numbers
    $('.numbers').waypoint(function(direction) {
        $('.count-up').countTo({
            speed: 1500,
            refreshInterval: 40
        });
        this.destroy();
    }, {offset: 350});
});