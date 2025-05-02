// portfolio.js
$(document).ready(function() {
    // Animation des projets
    $('.portfolio-item').each(function(index) {
        $(this).delay(index * 300).fadeIn(1000);
    });
});
