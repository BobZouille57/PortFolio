$(document).ready(function () {
    function revealOnScroll() {
        $('.reveal').each(function () {
            const elementTop = $(this).offset().top;
            const scrollTop = $(window).scrollTop();
            const windowHeight = $(window).height();

            if (scrollTop + windowHeight > elementTop + 50) {
                $(this).animate({ opacity: 1 }, {
                    duration: 600,
                    step: function (now, fx) {
                        $(this).css('transform', 'scale(' + (0.95 + (now * 0.05)) + ')');
                    }
                });
            }
        });
    }

    $('.reveal').css({
        opacity: 0,
        transform: 'scale(0.95)'
    });

    revealOnScroll();
    $(window).on('scroll', function () {
        revealOnScroll();
    });
});

let lastScrollTop = 0;

$(window).on("scroll", function () {
    let st = $(this).scrollTop();

    if (st > lastScrollTop) {
        // On descend
        $(".intro-block").slideUp();
        $(".conclusion-block").slideDown();
    } else {
        // On remonte
        $(".intro-block").slideDown();
        $(".conclusion-block").slideUp();
    }

    lastScrollTop = st;
});
