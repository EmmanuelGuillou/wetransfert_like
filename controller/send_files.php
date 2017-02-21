<?php
require_once '../model/PDO.php';

if(isset($_FILES['file'])){
     $dossier = '../data/';
     $fichier = basename($_FILES['file']['name']);

     if(move_uploaded_file($_FILES['file']['tmp_name'], $dossier . $fichier)){
        require_once 'envoie_mail.php';
        print_r ('Upload effectué avec succès ! Votre e-mail a bien été envoyé.');
     }
     else{
          echo 'Échec de l\'upload !';
     }
}
