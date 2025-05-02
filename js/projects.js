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

$(document).ready(function () {
    let currentIndex = 0;
    const slides = $('.portfolio-item');
    const totalSlides = slides.length;

    function showSlide(index) {
        const offset = -index * 100; // Déplace le carrousel en fonction de l'index
        $('.carousel').css('transform', 'translateX(' + offset + '%)');
    }

    $('.carousel-next').click(function () {
        currentIndex = (currentIndex + 1) % totalSlides;
        showSlide(currentIndex);
    });

    $('.carousel-prev').click(function () {
        currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
        showSlide(currentIndex);
    });
});

