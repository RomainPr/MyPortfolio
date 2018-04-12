// jQuery to collapse the navbar on scroll
$(window).scroll(function () {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse opaque");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse opaque");
    }
});

$(document).ready(function(){
    $('a[href^="/#"]').on('click',function (e) {
        e.preventDefault();

        var target = this.hash;
        $target = $(target);

        $('html, body').stop().animate({
            'scrollTop':  $target.offset().top
        }, 900, 'swing', function () {
            window.location.hash = target;
        });
    });
});

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function () {
    $('.navbar-toggle:visible').click();
});

// ===== Scroll to Top ==== 
$(window).scroll(function () {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function () {      // When arrow is clicked
    $('body,html').animate({
        scrollTop: 0                       // Scroll to top of body
    }, 900);
});

// ===== Elements appears on scroll ==== 
$(function () {
    $('.post').addClass("hide_me").viewportChecker({
        classToAdd: 'visible animated fadeInUp',
        offset: 100
    });
    $('.post2').addClass("hide_me").viewportChecker({
        classToAdd: 'visible animated slideInLeft',
        offset: 100
    });
    $('.post3').addClass("hide_me").viewportChecker({
        classToAdd: 'visible animated slideInRight',
        offset: 100
    });
    $('.post4').addClass("hide_me").viewportChecker({
        classToAdd: 'visible animated slideInUp',
        offset: 100
    });
    $('post5').addClass("hide_me").viewportChecker({
        classToAdd: 'visible animated'
    });
});

// ajout de classe aux sections 

$(function() {
    $("#about").addClass("apropos"); 
    $("#services").addClass("services");
    $("#portfolio").addClass("experiences");
    $("#competences").addClass("skills");
    $("#contact").addClass("contact");
});
