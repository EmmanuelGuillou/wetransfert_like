<?php

// Si on a bien tous les mails
if(isset($_POST['destination_mail']) && isset($_POST['origin_mail'])){

// Données e-mail destinataire
$email_to = $_POST['destination_mail'];
$email_subject = "Vous avez reçu un fichier sur Kitsune !";

// Données e-mail envoyeur
$email_to2 = $_POST('origin_mail');
$email_subject2 = "Vous avez envoyé un fichier depuis Kitsune";

// Le message dans l'email
$email_message =  file_get_content('view/templates/basic.html');

// L'envoie de mail aux deux gens
mail($email_to, $email_subject, $email_message);
mail($email_to2, $email_subject2, $email_message);

}

?>
