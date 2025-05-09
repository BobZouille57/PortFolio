<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>

<link rel="stylesheet" href="assets/css/index.css">

<main class="home-container">
    <section class="intro">
        <h1>Bienvenue sur mon Portfolio</h1>
        <p class="subtitle">Étudiant en BTS SIO SLAM, passionné par le développement web et les technologies modernes.</p>
        <br>
        <a href="about.php" class="btn primary-btn">À propos de moi</a>
    </section>

    <section class="summary">
        <h2>Sommaire</h2>
        <div class="summary-item">
            <a href="about.php" class="btn">📘 À propos</a>
            <span class="desc">Présentation personnelle et parcours.</span>
        </div>
        <div class="summary-item">
            <a href="projects.php" class="btn">📁 Projets</a>
            <span class="desc">Exemples de réalisations en développement.</span>
        </div>
        <div class="summary-item">
            <a href="skills.php" class="btn">🛠️ Compétences</a>
            <span class="desc">Technologies et langages maîtrisés.</span>
        </div>
        <div class="summary-item">
            <a href="contact.php" class="btn">📩 Contact</a>
            <span class="desc">Formulaire ou informations pour me joindre.</span>
        </div>
        <div class="summary-item">
            <a href="cv.php" class="btn">📄 CV</a>
            <span class="desc">Mon CV à consulter ou télécharger.</span>
        </div>
    </section>
</main>

<?php include('includes/footer.php'); ?>
<script src="js/index.js"></script>
