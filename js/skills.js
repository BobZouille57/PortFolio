$(document).ready(function() {
    $('.progress').each(function() {
        var width = $(this).css('width');
        $(this).animate({ width: width }, 2000);
    });
});
