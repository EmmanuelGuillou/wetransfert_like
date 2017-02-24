<?php

require_once '../../model/PDO.php';

$get_fichier = $_GET['fichier'];

if(!empty($get_fichier)){
    $file = $pdo->prepare("SELECT url_fichier FROM wetransfer_like WHERE url_fichier = :get_fichier");
    $file->execute([':get_fichier'=>$get_fichier]);
    $row=$file->fetch(PDO::FETCH_ASSOC);

    if(is_null($row)){
        echo "Désolé, nous n'avons pas réussi à retrouver votre fichier !<br/>
        Les fichiers expirent après 48 heures, vous pouvez essayer de contacter l'envoyeur pour le récupérer.";
    }
    else{

        $FileType = pathinfo($get_fichier,PATHINFO_EXTENSION);
        $FileName = pathinfo($get_fichier,PATHINFO_BASENAME);
        if ($FileType == "php" || "sh" || "exe"){
            echo 'Votre fichier vous attend ! Téléchargez le en cliquant sur le bouton ici.
            <a href="http://'.$get_fichier.'.exept" class="btn" download="'.$FileName.'" filename="test">Fichier</a>';
        }
        else{
            echo 'Votre fichier vous attend ! Téléchargez le en cliquant sur le bouton ici.
            <a href="http://'.$get_fichier.'" class="btn" download filename="test">Fichier</a>';
        }
    }
}
