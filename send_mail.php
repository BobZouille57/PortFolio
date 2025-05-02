<?php
session_start();

// Inclure les classes de PHPMailer
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des données envoyées par le formulaire
    $user_name  = htmlspecialchars($_POST['name']);
    $user_email = htmlspecialchars($_POST['email']);
    $user_message = htmlspecialchars($_POST['message']);

    $mail = new PHPMailer(true);

    try {
        // Configuration SMTP
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'Pierron.clement57@gmail.com'; // Adresse Gmail
        $mail->Password   = 'hyxz subn rcbl zljk';          // Mot de passe d'application
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Expéditeur et destinataire
        $mail->setFrom('Pierron.clement57@gmail.com', 'Formulaire Portfolio');
        $mail->addReplyTo($user_email, $user_name);
        $mail->addAddress('Pierron.clement57@gmail.com'); // Ton adresse pour recevoir le message

        // Contenu de l'e-mail
        $mail->Subject = '📬 Nouveau message via le portfolio';
        $mail->Body    = "Nom : $user_name\nEmail : $user_email\n\nMessage :\n$user_message";

        // Envoi de l'email
        $mail->send();

        // Message de succès
        $_SESSION['contact_message'] = "✅ Message envoyé avec succès !";
    } catch (Exception $e) {
        // En cas d'erreur, afficher l'erreur
        $_SESSION['contact_message'] = "❌ Échec de l'envoi : {$mail->ErrorInfo}";
    }

    // Redirection vers la page de contact
    header("Location: contact.php");
    exit;
}
?>
