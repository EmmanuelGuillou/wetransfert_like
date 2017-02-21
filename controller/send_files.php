<?php
require_once '../model/PDO.php';
require_once 'envoie_mail.php';

if(isset($_FILES['file'])){
     $dossier = '../data/';
     $fichier = basename($_FILES['file']['name']);

     if(move_uploaded_file($_FILES['file']['tmp_name'], $dossier . $fichier)){
          print_r ('Upload effectué avec succès !');
     }
     else{
          echo 'Échec de l\'upload !';
     }
}
