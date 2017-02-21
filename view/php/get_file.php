<?php

require_once '../../model/PDO.php';

$get_fichier = $_GET['fichier'];

if(!empty($get_fichier)){
    $file = $pdo->prepare("SELECT url_fichier FROM wetransfer_like WHERE url_fichier = :get_fichier");
    $file->execute([':get_fichier'=>$get_fichier]);
    $row=$file->fetch(PDO::FETCH_ASSOC);

    if(is_null($row)){
        echo "Sorry, we have not been able to retrieve your file !<br/>
        Files expire under 48 hours. You can contact the sender so he can send you the file again.";
    }
    else{
        echo 'Your file awaits you ! Download it by clicking the button below.
        <a href="http://'.$get_fichier.'" class="btn" download filename="test">Fichier</a>';
    }
}
