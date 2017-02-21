<?php

// Si on a bien tous les mails
if(isset($_POST['destination_mail']) && isset($_POST['origin_mail'])){

// Données e-mail destinataire
$email_to = $_POST['destination_mail'];
$email_subject = "Vous avez reçu un fichier sur Kitsune !";

// Données e-mail envoyeur
$email_to2 = $_POST['origin_mail'];
$email_subject2 = "Vous avez envoyé un fichier depuis Kitsune";

// Le message dans l'email
$email_message =  file_get_contents('../view/templates/basic.php');

$headers = 'Content-type: text/html; charset = utf-8' . "\r\n";

// L'envoie de mail aux deux gens
mail($email_to, $email_subject, $email_message, $headers);
mail($email_to2, $email_subject2, $email_message, $headers);

}

$id_fichier = "SELECT id_fichier FROM wetransfer_like WHERE url_fichier = '$fichier'";

?>
