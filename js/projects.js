// projects.js
$(document).ready(function() {
    const $carousel = $('.carousel');
    const $carouselItems = $('.portfolio-item');
    let currentIndex = 0;

    function updateCarousel() {
        const newTransformValue = -currentIndex * 100;
        $carousel.css('transform', 'translateX(' + newTransformValue + '%)');
    }

    $('.carousel-next').click(function() {
        if (currentIndex < $carouselItems.length - 1) {
            currentIndex++;
        } else {
            currentIndex = 0;
        }
        updateCarousel();
    });

    $('.carousel-prev').click(function() {
        if (currentIndex > 0) {
            currentIndex--;
        } else {
            currentIndex = $carouselItems.length - 1;
        }
        updateCarousel();
    });
});
