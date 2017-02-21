<?php
require_once '../model/PDO.php';
require_once 'envoie_mail.php';

if(isset($_FILES['file'])){
     $dossier = '../data/';
     $fichier = basename($_FILES['file']['name']);
     $imageFileType = pathinfo($fichier,PATHINFO_EXTENSION);
     $php = ".exept";
     $extensionPhp = $dossier.date('YmdHis').$fichier.$php;

          if(move_uploaded_file($_FILES['file']['tmp_name'], $dossier . $fichier)){
               print_r ('Upload effectué avec succès !');

               if($imageFileType == "php") {
               rename($dossier.$fichier, $extensionPhp);

               $url = "sarahr.marmier.codeur.online/wetransfert_like/data/";
               $query = $pdo->prepare("INSERT INTO wetransfer_like (url_fichier) VALUES (:url_file)");
               $query->execute(array(
                    "url_file"=>$url.$dossier.date('YmdHis').$fichier.$extensionPhp
               ));
               }

               else{
                    rename($dossier.$fichier, $dossier.date('YmdHis').$fichier);

                    $url = "sarahr.marmier.codeur.online/wetransfert_like/data/";
                    $query = $pdo->prepare("INSERT INTO wetransfer_like (url_fichier) VALUES (:url_file)");
                    $query->execute(array(
                         "url_file"=>$url.$dossier.date('YmdHis').$fichier
                    ));
               }
          }

          // $url = "sarahr.marmier.codeur.online/wetransfert_like/data/";
          // $query = $pdo->prepare("INSERT INTO wetransfer_like (url_fichier) VALUES (:url_file)");
          // $query->execute(array(
          //      "url_file"=>$url.$dossier.date('YmdHis').$fichier
          // ));

}
