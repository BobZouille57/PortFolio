$(document).ready(function () {
    $('.skill').each(function (index) {
        $(this).css('animation-delay', (index * 0.2) + 's');
    });
});
