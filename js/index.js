$(document).ready(function () {
    $('.intro h1').hide().fadeIn(1500);
    $('.btn').hover(
        function () {
            $(this).css('transform', 'scale(1.05)');
        },
        function () {
            $(this).css('transform', 'scale(1)');
        }
    );
});
