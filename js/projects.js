document.addEventListener("DOMContentLoaded", function () {
    const prevButton = document.querySelector('.carousel-prev');
    const nextButton = document.querySelector('.carousel-next');
    const carousel = document.querySelector('.carousel');
    let currentIndex = 0;
    const items = document.querySelectorAll('.portfolio-item');
    const totalItems = items.length;

    // Fonction pour déplacer la slide vers la gauche
    function moveToNextSlide() {
        if (currentIndex < totalItems - 1) {
            currentIndex++;
        } else {
            currentIndex = 0; // Retour au début
        }
        updateCarouselPosition();
    }

    // Fonction pour déplacer la slide vers la droite
    function moveToPrevSlide() {
        if (currentIndex > 0) {
            currentIndex--;
        } else {
            currentIndex = totalItems - 1; // Aller à la dernière
        }
        updateCarouselPosition();
    }

    // Fonction pour mettre à jour la position du carrousel
    function updateCarouselPosition() {
        const newTransformValue = -currentIndex * 100; // Déplace en fonction de l'index
        carousel.style.transform = `translateX(${newTransformValue}%)`;
    }

    // Événements pour les boutons de navigation
    prevButton.addEventListener('click', moveToPrevSlide);
    nextButton.addEventListener('click', moveToNextSlide);
});
