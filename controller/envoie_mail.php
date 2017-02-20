<?php

if(isset($_POST['destination_mail'])){

$email_to = $_POST['destination_mail'];
$email_subject = "Vous avez reçu un fichier sur Kitsune !";
$email_message =  'Notre super message toussa';

$header = 'From : '.$_POST['origin_mail']. "\r\n".
'X-Mailer: PHP/'.phpversion();

mail($email_to, $email_subject, $email_message, $header);

}

?>
