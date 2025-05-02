<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>
<div class="projects-container">
    <h2>Mes Projets</h2>
    <div class="portfolio-item" id="helpdesk">
        <img src="assets/img/Projet1.png" class="portfolio-img" alt="Capture HelpDesk">
        <h3>HelpDesk</h3>
        <p>Application web de gestion de support client permettant de créer, consulter et traiter des tickets d’assistance. Possibilité également de modération via un compte administrateur qui permet de supprimer les messages, modifier le statut des tickets, de les fermer.</p>
        
        <ul class="tech-list">
            <li>💻 PHP (back-end)</li>
            <li>🎨 HTML / CSS (interface)</li>
            <li>📩 PHPMailer (notification email)</li>
            <li>🗄️ MySQL (base de données)</li>
            <li>🚀 VPS (hébergement)</li>
        </ul>

        <div class="project-links">
            <a href="https://github.com/BobZouille57/Helpdesk" target="_blank" class="btn btn-github">📂 Voir sur GitHub</a>
            <a href="http://helpdesk.clementpierron.fr" target="_blank" class="btn btn-demo">🌐 Voir la démo</a>
        </div>
    </div>
</div>
<?php include('includes/footer.php'); ?>

<!-- Inclure le CSS et JS spécifiques à cette page -->
<link rel="stylesheet" href="assets/css/projects.css">
<script src="js/projects.js"></script>
