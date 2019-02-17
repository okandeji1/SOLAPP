(function($) {
    "use strict";
    /* hero-carousel */


    $('.hero-carousel').owlCarousel({
        dots: true,
        nav: false,
        dotsData: true,
        dotsEach: true,
        items: 1,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }

    });

    $('.owl-dot').on('click', function() {
        $('.hero-carousel').trigger('to.owl.carousel', [$(this).index(), 300]);
        $('.owl-dot').removeClass('active');
        $(this).addClass('active');
    });



    $(".open-nav").on("click", function(e) {
            $("#myLinks").toggleClass("active");
            e.preventDefault();

        })
        /*  wow js*/
    new WOW().init();
    $(window).on('load', function() {

        /*  Preloader js*/
        var preLoder = $("#preloader");
        preLoder.fadeOut(1000);

    });


    /*  menu js*/
    $(document).ready(function() {

        $("#themeix-menu").menumaker({
            title: "",
            breakpoint: 750,
            format: "multitoggle"
        });

        $("#themeix-menu").prepend("<div id='menu-line'></div>");

        var foundActive = false,
            activeElement, linePosition = 0,
            menuLine = $("#themeix-menu #menu-line"),
            lineWidth, defaultPosition, defaultWidth;

        $("#themeix-menu > ul > li").each(function() {
            if ($(this).hasClass('active')) {
                activeElement = $(this);
                foundActive = true;
            }
        });

        if (foundActive === false) {
            activeElement = $("#themeix-menu > ul > li").first();
        }

        defaultWidth = lineWidth = activeElement.width();

        defaultPosition = linePosition = activeElement.position().left;

        menuLine.css("width", lineWidth);
        menuLine.css("left", linePosition);

        $("#themeix-menu > ul > li").hover(function() {
            activeElement = $(this);
            lineWidth = activeElement.width();
            linePosition = activeElement.position().left;
            menuLine.css("width", lineWidth);
            menuLine.css("left", linePosition);
        }, function() {
            menuLine.css("left", defaultPosition);
            menuLine.css("width", defaultWidth);
        });

    });

}(jQuery));