jQuery(document).ready(function ($) {
    // Navbar shrink effect
    $(window).scroll(function () {
        if ($(document).scrollTop() > 80) {
            $('body').addClass('nav-shrinked');
        } else {
            $('body').removeClass('nav-shrinked');
        }
    });
});