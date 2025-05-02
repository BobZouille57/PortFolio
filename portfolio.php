<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>
<div class="portfolio-container">
    <h2>Mon Portfolio</h2>
    <p>Voici un aperçu de mes projets. Clique sur chaque projet pour en savoir plus.</p>

    <div class="portfolio-item">
        <img src="images/photo1.jpg" alt="Project 1" class="portfolio-img">
        <h3>Projet 1</h3>
        <p>Description courte de projet 1.</p>
        <a href="projects.php#project1" class="btn">Voir le projet</a>
    </div>
    <div class="portfolio-item">
        <img src="images/photo2.jpg" alt="Project 2" class="portfolio-img">
        <h3>Projet 2</h3>
        <p>Description courte de projet 2.</p>
        <a href="projects.php#project2" class="btn">Voir le projet</a>
    </div>
    <!-- Ajoute d'autres projets ici -->
</div>
<?php include('includes/footer.php'); ?>

<!-- Inclure le CSS et JS spécifiques à cette page -->
<link rel="stylesheet" href="assets/css/portfolio.css">
<script src="js/portfolio.js"></script>
