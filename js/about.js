$(document).ready(function () {
    function showOnlyVisibleBlock() {
        $('.intro-block, .journey-block, .timeline-item, .conclusion-block, .profile-img').each(function () {
            const blockTop = $(this).offset().top;
            const blockBottom = blockTop + $(this).outerHeight();
            const windowTop = $(window).scrollTop();
            const windowBottom = windowTop + $(window).height();

            if (blockTop < windowBottom && blockBottom > windowTop) {
                // Bloc visible à l'écran
                $(this).fadeIn(600);
            } else {
                // Bloc hors de l'écran
                $(this).fadeOut(400);
            }
        });
    }

    $(window).on('scroll resize', showOnlyVisibleBlock);
    showOnlyVisibleBlock(); // initial
});
