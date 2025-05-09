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

            <div class="portfolio-item" id="jcvd">
                <img src="images/Projet4.png" class="portfolio-img" alt="Capture JCVD">
                <h3>JCVD - Exercice HTML</h3>
                <p>Un des premier exercice réalisé en début d’année de BTS SIO SLAM. Ce projet avait pour objectif de s’initier au HTML en créant une page structurée à l’aide de titres, de listes, de liens, d’ancres internes et d’images autour du thème de Jean-Claude Van Damme.</p>
                <ul class="tech-list">
                    <li>🎨 HTML (structure de page)</li>
                    <li>🔗 Href / ancres internes</li>
                    <li>📝 Listes, titres, paragraphes</li>
                    <li>🖼️ Insertion d’images et de liens</li>
                </ul>
                <div class="project-links">
                    <a href="https://github.com/BobZouille57/JCVD-PCl-ment" target="_blank" class="btn btn-github">📂 Voir sur GitHub</a>
                </div>
            </div>


            <div class="portfolio-item" id="chifoumi">
                <img src="images/Projet5.png" class="portfolio-img" alt="Capture Chifoumi">
                <h3>Chifoumi - Jeu JavaScript</h3>
                <p>Petit projet ludique réalisé en JavaScript dans le cadre d’un exercice de BTS SIO SLAM. Ce jeu de pierre-feuille-ciseaux permet de jouer contre l’ordinateur, avec des animations visuelles et un compteur dynamique de victoires pour améliorer l’expérience utilisateur.</p>
                <ul class="tech-list">
                    <li>🧠 JavaScript (logique de jeu)</li>
                    <li>🎨 HTML / CSS (interface et design)</li>
                    <li>🎮 Interactions utilisateur</li>
                    <li>📊 Compteur de scores en temps réel</li>
                    <li>✨ Animations visuelles</li>
                </ul>
                <div class="project-links">
                    <a href="https://github.com/BobZouille57/Exercice-JS" target="_blank" class="btn btn-github">📂 Voir sur GitHub</a>
                </div>
            </div>

        </div>
        <button class="carousel-prev">❮</button>
        <button class="carousel-next">❯</button>
    </div>
    <div class="projects-note hidden">
        <p>💡 Bien sûr, ceci n’est qu’un petit aperçu des projets réalisés dans ma (jeune mais passionnée) carrière d’informaticien... 😉</p>
    </div>
</div>
<?php include('includes/footer.php'); ?>

<link rel="stylesheet" href="assets/css/projects.css">
<script src="js/projects.js"></script>
