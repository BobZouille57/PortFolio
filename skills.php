<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>

<div class="skills-container">
    <h2>Mes Compétences</h2>
    <div class="skills-list">
        <div class="skill">
            <h3 class="skill-title">HTML / CSS</h3>
            <ul class="skill-details">
                <li>Structure HTML5 : Création de pages web avec une organisation propre en utilisant des balises sémantiques.</li>
                <li>CSS Flexbox / Grid : Mise en page et alignement de contenu avec Flexbox et CSS Grid pour des interfaces responsives.</li>
                <li>Animation CSS : Création d'animations pour rendre les pages plus interactives et dynamiques.</li>
                <li>Design adaptatif : Réalisation de sites web qui s'adaptent à tous les types d'écrans (ordinateur, tablette, mobile).</li>
            </ul>
        </div>

        <div class="skill">
            <h3 class="skill-title">PHP</h3>
            <ul class="skill-details">
                <li>Programmation en PHP : Développement de sites web dynamiques avec PHP, gestion des formulaires et des données utilisateur.</li>
                <li>Base de données MySQL : Création de bases de données, gestion des requêtes SQL et optimisation des performances des bases de données.</li>
                <li>Sessions et cookies : Gestion des utilisateurs avec des sessions sécurisées et des cookies pour personnaliser l'expérience.</li>
                <li>Gestion des droits d'accès : Création de systèmes de connexion et de gestion des utilisateurs avec différents niveaux d'accès.</li>
            </ul>
        </div>

        <div class="skill">
            <h3 class="skill-title">JavaScript</h3>
            <ul class="skill-details">
                <li>Manipulation DOM : Utilisation de JavaScript pour interagir avec les éléments HTML et CSS afin d'améliorer l'interactivité des pages.</li>
                <li>Événements JavaScript : Gestion des événements (clics, survols, etc.) pour rendre les pages plus réactives aux actions de l'utilisateur.</li>
                <li>Animations JS : Création d'animations personnalisées pour rendre les sites web plus attrayants.</li>
                <li>Interaction avec les utilisateurs : Validation des formulaires, affichage dynamique des contenus et interactions via JavaScript.</li>
            </ul>
        </div>

        <div class="skill">
            <h3 class="skill-title">Laravel (Stage)</h3>
            <ul class="skill-details">
                <li>Développement avec Laravel : Utilisation du framework PHP Laravel pour créer des sites web robustes et sécurisés.</li>
                <li>Création de Back Office : Développement de systèmes de gestion pour permettre aux utilisateurs de gérer leurs données et interactions.</li>
                <li>Gestion des routes et des contrôleurs : Mise en place de routes sécurisées et d'une architecture MVC propre pour séparer la logique de l'affichage.</li>
                <li>Intégration d'outils externes : Utilisation d'outils comme PHPMailer pour l'envoi de mails et d'autres fonctionnalités avancées.</li>
            </ul>
        </div>

        <div class="skill">
            <h3 class="skill-title">Autres</h3>
            <ul class="skill-details">
                <li>Git / GitHub : Utilisation de Git pour gérer les versions de mes projets, travailler en équipe, et partager des projets sur GitHub.</li>
                <li>VPS / Déploiement : Hébergement de projets sur des serveurs VPS pour un contrôle total et une gestion efficace des performances.</li>
            </ul>
        </div>
    </div>
    <h3>Tableau Excel (CSV)</h3>
    <div class="excel-table">
        <?php
        $file = 'assets/csv/Competences.csv';

        if (($handle = fopen($file, 'r')) !== FALSE) {
            echo '<table border="1">';
            
            while (($data = fgetcsv($handle, 1000, ',')) !== FALSE) {
                echo '<tr>';
                foreach ($data as $cell) {
                    echo '<td>' . htmlspecialchars($cell) . '</td>';
                }
                echo '</tr>';
            }
            echo '</table>';

            fclose($handle);
        } else {
            echo 'Impossible de lire le fichier CSV.';
        }
        ?>
    </div>
</div>

<?php include('includes/footer.php'); ?>

<link rel="stylesheet" href="assets/css/skills.css">
<script src="js/skills.js"></script>
