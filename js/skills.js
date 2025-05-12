$(document).ready(function () {
    $('.skill').each(function (index) {
        $(this).css('animation-delay', (index * 0.2) + 's');
    });
});

document.getElementById("toggle-pdf").addEventListener("click", function() {
    var viewer = document.querySelector(".pdf-viewer");
    var btn = document.getElementById("toggle-pdf");

    if (viewer.style.display === "none") {
        viewer.style.display = "block";
        btn.textContent = "👁️ Masquer le PDF des Compétences";
    } else {
        viewer.style.display = "none";
        btn.textContent = "👁️ Afficher / Masquer le PDF des Compétences";
    }
});


