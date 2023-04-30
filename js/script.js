/*========================================================================
                    Show and Hide Navigation Color
==========================================================================*/
$(function () {

    // show/hide nav on page load
    showHideNav();

    $(window).scroll(function () {

        // show/hide nav on window's scroll
        showHideNav();

    });

    function showHideNav() {


        if ($(window).scrollTop() > 50) {

            // Show White nav
            $("nav").addClass("bg-secondary");

            $(".nav-link, .navbar-brand").addClass("text-white");

            // Show Dark logo
            $(".navbar-brand img").attr("src", "image/logo/logo-dark.png");

            // Show back to top button
            // $("#back-to-top").fadeIn();
        } else {

            // Hide White nav
            $("nav").removeClass("bg-secondary");



            $(".nav-link, .navbar-brand").removeClass("text-white");

            // Show Dark logo
            $(".nav-link, .navbar-brand").addClass("text-dark");

            // Show logo
            $(".navbar-brand img").attr("src", "image/logo/logo.png");



            // Hide back to top button
            // $("#back-to-top").fadeOut();
        }
    }
});


/*=========================================
               Preloader
========================================*/

$(window).on('load', function () {
    $("#status").fadeOut();
    $("#preloader").delay(550).fadeOut();
})


/*=========================================
               Particles js
========================================*/

particlesJS('particles-js', {
    "particles": {
        "number": {
            "value": 100,
            "density": {
                "enable": true,
                "value_area": 800
            }
        },
        "color": {
            "value": "#6bb5e8"
        },
        "shape": {
            "type": "circle",
            "stroke": {
                "width": 0,
                "color": "#6bb5e8"
            },
            "polygon": {
                "nb_sides": 5
            },
            "image": {
                "src": "img/github.svg",
                "width": 100,
                "height": 100
            }
        },
        "opacity": {
            "value": 0.5,
            "random": false,
            "anim": {
                "enable": false,
                "speed": 1,
                "opacity_min": 0.1,
                "sync": false
            }
        },
        "size": {
            "value": 3,
            "random": true,
            "anim": {
                "enable": false,
                "speed": 40,
                "size_min": 0.1,
                "sync": false
            }
        },
        "line_linked": {
            "enable": true,
            "distance": 150,
            "color": "#6bb5e8",
            "opacity": 0.4,
            "width": 1
        },
        "move": {
            "enable": true,
            "speed": 6,
            "direction": "none",
            "random": false,
            "straight": false,
            "out_mode": "out",
            "bounce": false,
            "attract": {
                "enable": false,
                "rotateX": 600,
                "rotateY": 1200
            }
        }
    },
    "interactivity": {
        "detect_on": "canvas",
        "events": {
            "onhover": {
                "enable": true,
                "mode": "repulse"
            },
            "onclick": {
                "enable": true,
                "mode": "push"
            },
            "resize": true
        },
        "modes": {
            "grab": {
                "distance": 400,
                "line_linked": {
                    "opacity": 1
                }
            },
            "bubble": {
                "distance": 400,
                "size": 40,
                "duration": 2,
                "opacity": 8,
                "speed": 3
            },
            "repulse": {
                "distance": 200,
                "duration": 0.4
            },
            "push": {
                "particles_nb": 4
            },
            "remove": {
                "particles_nb": 2
            }
        }
    }
})


/*=========================================
               Home
========================================*/



/*   =====================================
                Progress Bars
   =====================================*/

$(".progressElement").waypoint(function () {

    // code to execute when the waypoint is triggered
    $(".progress-bar").each(function () {
        $(this).animate({
            width: $(this).attr("aria-valuenow") + "%"
        }, 1000);
    });
    this.destroy();
}, { offset: 'bottom-in-view' });




/*=========================================
             Smooth Scrolling
========================================*/

$(function () {

    $(".smooth-scroll").click(function (event) {

        event.preventDefault();

        // get section id like #home, #about, #team, #service and etc

        var section_id = $(this).attr("href");

        $("html, body").animate({
            scrollTop: $(section_id).offset().top
        }, 1000);

    });
});


/*=========================================
             Animate on scroll
========================================*/

new WOW().init();

$(window).on('load', function () {
    $("#home_title").addClass("animated fadeInDown");
    $("#home_subtitle").addClass("animated fadeInLeft");
    $("#home_desk").addClass("animated zoomIn");
    $("#home_contact").addClass("animated zoomIn");
    $("#arrow-down i").addClass("animated fadeInDown infinite");
})


/*=========================================
           slick carsoul
========================================*/

$(document).ready(function () {
    $('.slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
    });
});
  



/*=========================================
           Back to Top Arrow
========================================*/



$(window).scroll(function () {
    if ($(window).scrollTop() > 50) {
        $('#back-to-top').fadeIn();
    } else {
        $('#back-to-top').fadeOut();
    }
});


$("#back-to-top").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 1000);
});




/*=========================================
           Type-it js
========================================*/

new TypeIt('#type-it', {
    speed: 200,
    waitUntilVisible: true,
    loop: true
})


/*=========================================
                 AOS
========================================*/

AOS.init();


$( document ).ready(function() {
   const firstScrollSpyEl = document.querySelector('[data-bs-spy="scroll"]')
firstScrollSpyEl.addEventListener('activate.bs.scrollspy', () => {
  console.log("done");
})
});