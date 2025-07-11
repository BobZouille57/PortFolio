<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>

<div class="contact-container">
    <h2>Contactez-moi</h2>
    
    <?php
    if (isset($_SESSION['contact_message'])): ?>
        <p class="contact-feedback">
            <?= $_SESSION['contact_message']; ?>
        </p>
        <?php unset($_SESSION['contact_message']); ?>
    <?php endif; ?>

    <form action="send_mail.php" method="POST">
        <label for="name">Nom d'utilisateur :</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Votre email :</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message :</label>
        <textarea id="message" name="message" required></textarea>

        <button type="submit" class="btn">Envoyer</button>
    </form>
</div>

<?php include('includes/footer.php'); ?>

<link rel="stylesheet" href="assets/css/contact.css">
<script src="assets/js/contact.js"></script>
