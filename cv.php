<?php include("includes/header.php"); ?>

<link rel="stylesheet" href="assets/css/cv.css">

<div class="cv-container">
    <h1 class="cv-title">📄 Mon CV</h1>
    <p class="cv-subtitle">Cliquez sur le bouton ci-dessous pour afficher ou masquer mon CV PDF.</p>

    <button id="toggle-cv" class="btn-toggle">👁️ Afficher / Masquer le CV</button>

    <div class="cv-viewer" style="display: none;">
        <iframe src="assets/pdf/mon-cv.pdf" frameborder="0"></iframe>
    </div>

    <a href="images/CV_PIERRON_Clement.pdf" class="btn-download" download>
        ⬇️ Télécharger le CV en PDF
    </a>
</div>

<?php include("includes/footer.php"); ?>
<script src="assets/js/cv.js"></script>
