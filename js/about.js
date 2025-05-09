$(document).ready(function () {
    // Cache tous les blocs au départ
    $('.intro-block, .journey-block, .conclusion-block, .profile-img, .timeline-item').css({
        opacity: 0,
        transform: 'scale(0.95)'
    });

    // Animation de l'intro
    $('.intro-block').delay(300).animate({ opacity: 1 }, {
        duration: 800,
        step: function (now, fx) {
            $(this).css('transform', 'scale(' + (0.95 + (now * 0.05)) + ')');
        }
    });

    // Animation du titre du parcours + chaque item
    $('.journey-block').delay(1000).animate({ opacity: 1 }, {
        duration: 600,
        step: function (now, fx) {
            $(this).css('transform', 'scale(' + (0.95 + (now * 0.05)) + ')');
        }
    });

    $('.timeline-item').each(function (index) {
        $(this).delay(1200 + index * 300).animate({ opacity: 1 }, {
            duration: 500,
            step: function (now, fx) {
                $(this).css('transform', 'scale(' + (0.95 + (now * 0.05)) + ')');
            }
        });
    });

    // Animation de la conclusion
    $('.conclusion-block').delay(3000).animate({ opacity: 1 }, {
        duration: 700,
        step: function (now, fx) {
            $(this).css('transform', 'scale(' + (0.95 + (now * 0.05)) + ')');
        }
    });

    // Animation de la photo
    $('.profile-img').delay(3700).animate({ opacity: 1 }, 800);
});
