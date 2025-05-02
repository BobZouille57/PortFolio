// skills.js
$(document).ready(function() {
    // Animation des compétences
    $('.progress').each(function() {
        var width = $(this).css('width');
        $(this).animate({ width: width }, 1500);
    });
});
