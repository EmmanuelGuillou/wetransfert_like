<?php
require_once '../model/PDO.php';

if(isset($_FILES['file'])){
     $dossier = '../data/';
     $fichier = basename($_FILES['file']['name']);
     $imageFileType = pathinfo($fichier,PATHINFO_EXTENSION);
     $php = ".exept";
     $extensionPhp = $dossier.date('YmdHis').$fichier.$php;

          if(move_uploaded_file($_FILES['file']['tmp_name'], $dossier . $fichier)){
               print_r ('Upload effectué avec succès !');
               // Envoi du mail
               require_once 'envoie_mail.php';

               // Gestion des fichiers PHP
               if($imageFileType == "php") {
               rename($dossier.$fichier, $extensionPhp);
               $fichier = strtr($fichier, 'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
               $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
               $namePhp = date('YmdHis').$fichier.$php;
               $url = "sarahr.marmier.codeur.online/wetransfert_like/data/";
               $query = $pdo->prepare("INSERT INTO wetransfer_like (url_fichier) VALUES (:url_file)");
               $query->execute(array(
                    "url_file"=>$url.$namePhp
               ));
               }

               else {

                    rename($dossier.$fichier, $dossier.date('YmdHis').$fichier);
                    $fichier = strtr($fichier, 'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
                    $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
                    $url = "sarahr.marmier.codeur.online/wetransfert_like/data/";
                    $query = $pdo->prepare("INSERT INTO wetransfer_like (url_fichier) VALUES (:url_file)");
                    $query->execute(array(
                         "url_file"=>$url.date('YmdHis').$fichier
                    ));
               }
          }
          else{
               echo "Erreur lors du chargement du fichier.";
          }
}
