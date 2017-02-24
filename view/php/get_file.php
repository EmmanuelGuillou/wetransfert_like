<?php

require_once '../../model/PDO.php';
// exec('crontab ../../controller/crontab.txt');

$get_fichier = $_GET['fichier'];

$chemin = '/home/sarahr/wetransfert_like/data';
$dir = scandir($chemin);
$dateNow = (new \DateTime())->format('d-m-Y H:i:s');
$days_ago = date('Y-m-d H:i:s', strtotime('-2 days', strtotime($dateNow)));

foreach($dir as $data){
    if($data != ".." || $data != "."){
        if($days_ago>date("Y-m-d H:i:s", filectime($chemin."/".$data))){
            unlink($chemin."/".$data);
        }
    }
}

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
        // if ($FileType == "php" || "sh" || "exe"){
            echo 'Votre fichier vous attend ! Téléchargez le en cliquant sur le bouton ici.
            <a href="http://'.$get_fichier.'.exept" class="btn" download="'.$FileName.'" filename="test">Fichier</a>';
        // }
        // else{
        //     echo 'Votre fichier vous attend ! Téléchargez le en cliquant sur le bouton ici.
        //     <a href="http://'.$get_fichier.'" class="btn" download filename="test">Fichier</a>';
        // }
    }
}
