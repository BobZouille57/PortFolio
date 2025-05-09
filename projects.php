<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>
<div class="projects-container">
    <h2>Mes Projets</h2>
    <div class="carousel-container">
        <div class="carousel">
            <div class="portfolio-item" id="helpdesk">
                <img src="images/Projet1.png" class="portfolio-img" alt="Capture HelpDesk">
                <h3>HelpDesk</h3>
                <p>Application web de gestion de support client réalisé dans le cadre du BTS SIO SLAM, permettant de créer, consulter et traiter des tickets d’assistance...</p>
                <ul class="tech-list">
                    <li>💻 PHP (back-end)</li>
                    <li>🎨 HTML / CSS (interface)</li>
                    <li>📩 PHPMailer (Envoie emails)</li>
                    <li>🗄️ MySQL (base de données)</li>
                    <li>🚀 VPS (hébergement)</li>
                </ul>
                <div class="project-links">
                    <a href="https://github.com/BobZouille57/Helpdesk" target="_blank" class="btn btn-github">📂 Voir sur GitHub</a>
                    <a href="http://helpdesk.clementpierron.fr" target="_blank" class="btn btn-demo">🌐 Voir la démo</a>
                </div>
            </div>

            <div class="portfolio-item" id="portfolio">
                <img src="images/Projet2.png" class="portfolio-img" alt="Capture Portfolio">
                <h3>Mon Portfolio</h3>
                <p>Site web personnel de présentation réalisé dans le cadre du BTS SIO SLAM. Il met en avant mes projets, compétences, expériences et permet de suivre mon parcours scolaire et professionnel.</p>
                <ul class="tech-list">
                    <li>🎨 HTML / CSS (structure & design)</li>
                    <li>🧠 PHP (pages dynamiques)</li>
                    <li>📁 JavaScript / jQuery (animations)</li>
                    <li>📩 PHPMailer (Envoie emails)</li>
                    <li>🚀 VPS (hébergement)</li>
                </ul>
                <div class="project-links">
                    <a href="https://github.com/BobZouille57/PortFolio" target="_blank" class="btn btn-github">📂 Voir sur GitHub</a>
                    <a href="http://clementpierron.fr" target="_blank" class="btn btn-demo">🌐 Voir la démo</a>
                </div>
            </div>


            <div class="portfolio-item" id="miniprojet">
                <img src="images/Projet3.png" class="portfolio-img" alt="Capture Mini-Projet">
                <h3>Mini-Projet - Gestion d'un Restaurant Fictif</h3>
                <p>Application web développée en PHP permettant la gestion des usagers d’un restaurant fictif avec une interface administrateur et utilisateur. Elle permet de modifier ou supprimer des usagers, gérer les cautions, et consulter les tarifs en vigueur.</p>
                <ul class="tech-list">
                    <li>💻 PHP (back-end)</li>
                    <li>🎨 HTML / CSS (interface)</li>
                    <li>🗄️ MySQL (base de données)</li>
                    <li>🔐 Interface utilisateur / administration</li>
                </ul>
                <div class="project-links">
                    <a href="https://github.com/BobZouille57/Mini-Projet" target="_blank" class="btn btn-github">📂 Voir sur GitHub</a>
                </div>
            </div>
        </div>
        <button class="carousel-prev">❮</button>
        <button class="carousel-next">❯</button>
    </div>
</div>
<?php include('includes/footer.php'); ?>

<link rel="stylesheet" href="assets/css/projects.css">
<script src="js/projects.js"></script>
