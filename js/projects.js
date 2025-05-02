$(document).ready(function() {
    var currentIndex = 0;
    var totalSlides = $('.portfolio-item').length;

    function showSlide(index) {
        var offset = -index * 100 + '%';
        $('.carousel').css('transform', 'translateX(' + offset + ')');
    }

    $('.carousel-next').click(function() {
        currentIndex = (currentIndex + 1) % totalSlides;
        showSlide(currentIndex);
    });

    $('.carousel-prev').click(function() {
        currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
        showSlide(currentIndex);
    });

    // Optionally, add automatic slide transition every 3 seconds
    setInterval(function() {
        currentIndex = (currentIndex + 1) % totalSlides;
        showSlide(currentIndex);
    }, 3000); // Change slide every 3 seconds
});
