<?php

$url2 = "sarahr.marmier.codeur.online/wetransfert_like/";
$data = "data/";
$url_file = $url2.$data.date('YmdHis').$fichier;

// On récupère le message de l'utilisateur
$message_utilisateur = $_POST['message'];

// Si on a bien tous les mails
if(isset($_POST['destination_mail']) && isset($_POST['origin_mail'])){

// Données e-mail destinataire
$email_to = $_POST['destination_mail'];
$email_subject = "Vous avez reçu un fichier sur Kitsune !";

// Données e-mail envoyeur
$email_to2 = $_POST['origin_mail'];
$email_subject2 = "Vous avez envoyé un fichier depuis Kitsune";

// Le message dans l'email
include('../view/templates/basic.php');

// Pour permettre au html de fonctionner dans le mail
$headers = 'Content-type: text/html; charset = utf-8' . "\r\n";

// L'envoie de mail aux deux gens
mail($email_to, $email_subject, $message, $headers);
mail($email_to2, $email_subject2, $message, $headers);

}

?>
