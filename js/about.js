$(document).ready(function() {
    $('.intro-text').fadeIn(1500);
    $('.journey-text').fadeIn(2000);

    $('.timeline-item').each(function(index) {
        $(this).delay(500 * index).fadeIn(1000);
    });

    $('.profile-img').delay(3000).fadeIn(1000);
});
