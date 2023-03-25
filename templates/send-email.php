<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set the email content
    $to = "tristanhache2009@gmail.com";
    $subject = "Nouveau message de $name";
    $body = "De: $name\n\nEmail: $email\n\nMessage: $message";

    // Send the email
    if (mail($to, $subject, $body)) {
        echo "Votre message a été envoyé avec succès.";
    } else {
        echo "Une erreur s'est produite lors de l'envoi du message. Veuillez réessayer.";
    }
}
?>