<?php include('includes/header.php'); ?>
<div class="contact-container">
    <h2>Contactez-moi</h2>
    <form action="send_mail.php" method="POST">
        <label for="name">Nom</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message</label>
        <textarea id="message" name="message" required></textarea>

        <button type="submit" class="btn">Envoyer</button>
    </form>
</div>
<?php include('includes/footer.php'); ?>

<!-- Inclure le CSS et JS spécifiques à cette page -->
<link rel="stylesheet" href="assets/css/contact.css">
<script src="js/contact.js"></script>
