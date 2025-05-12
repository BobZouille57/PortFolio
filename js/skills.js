$(document).ready(function () {
    $('.skill').each(function (index) {
        $(this).css('animation-delay', (index * 0.2) + 's');
    });
});

$(document).ready(function () {
    $("#toggle-pdf").click(function () {
        $(".pdf-viewer").slideToggle(400);
    });

    $(".btn-download").hover(function () {
        $(this).css("transform", "scale(1.05)");
    }, function () {
        $(this).css("transform", "scale(1)");
    });
});


