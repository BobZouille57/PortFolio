<?php
session_start();

require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_name  = htmlspecialchars($_POST['name']);
    $user_email = htmlspecialchars($_POST['email']);
    $user_message = htmlspecialchars($_POST['message']);

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'Pierron.clement57@gmail.com';
        $mail->Password   = 'hyxz subn rcbl zljk';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->setFrom('Pierron.clement57@gmail.com', 'Formulaire Portfolio');
        $mail->addReplyTo($user_email, $user_name);
        $mail->addAddress('Pierron.clement57@gmail.com');

        $mail->Subject = '📬 Nouveau message via le portfolio';
        $mail->Body    = "Nom : $user_name\nEmail : $user_email\n\nMessage :\n$user_message";

        $mail->send();

        $_SESSION['contact_message'] = "✅ Message envoyé avec succès !";
    } catch (Exception $e) {
        $_SESSION['contact_message'] = "❌ Échec de l'envoi : {$mail->ErrorInfo}";
    }

    header("Location: contact.php");
    exit;
}
?>
