jQuery(document).ready(function ($) {
    // Navbar shrink effect
    $(window).scroll(function () {
        if ($(document).scrollTop() > 80) {
            $('nav').addClass('nav-shrinked');
        } else {
            $('nav').removeClass('nav-shrinked');
        }
    });
});