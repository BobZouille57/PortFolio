$(document).ready(function () {
    $("#toggle-cv").click(function () {
        $(".cv-viewer").slideToggle(400);
    });

    $(".btn-download").hover(function () {
        $(this).css("transform", "scale(1.05)");
    }, function () {
        $(this).css("transform", "scale(1)");
    });
});
