document.addEventListener("DOMContentLoaded", function () {
    const prevButton = document.querySelector('.carousel-prev');
    const nextButton = document.querySelector('.carousel-next');
    const carousel = document.querySelector('.carousel');
    let currentIndex = 0;
    const items = document.querySelectorAll('.portfolio-item');
    const totalItems = items.length;

    function moveToNextSlide() {
        if (currentIndex < totalItems - 1) {
            currentIndex++;
        } else {
            currentIndex = 0;
        }
        updateCarouselPosition();
    }

    function moveToPrevSlide() {
        if (currentIndex > 0) {
            currentIndex--;
        } else {
            currentIndex = totalItems - 1; 
        }
        updateCarouselPosition();
    }

    function updateCarouselPosition() {
        const newTransformValue = -currentIndex * 100;
        carousel.style.transform = `translateX(${newTransformValue}%)`;
    }

    prevButton.addEventListener('click', moveToPrevSlide);
    nextButton.addEventListener('click', moveToNextSlide);
});
