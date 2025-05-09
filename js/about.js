$(document).ready(function() {
    $('.intro-text').fadeIn(1500);
    
    $('.journey-block').delay(1000).fadeIn(1500);

    $('.timeline-item').each(function(index) {
        $(this).delay(500 * index).fadeIn(1000);
    });

    $('.conclusion-block').delay(2000).fadeIn(1500);

    $('.profile-img').delay(3000).fadeIn(1000);
});
