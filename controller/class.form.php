<?php

class FORM{

    private $db;

    public function __construct($pdo){
        $this->db = $pdo;
    }

//Fonction qui crée un input email
    public function input_mail($label, $name){
        echo '<label>'.$label.'</label><input type="email" name="'.$name.'"><br/>';
    }

//Fonction qui crée un input file
    public function input_file($label, $name){
        echo '<label>'.$label.'</label><input type="hidden" name="MAX_FILE_SIZE" value="52428800" /><input id="mon_fichier" type="file" name="'.$name.'"><br/>';
    }

//Fonction qui crée un textarea
    public function textarea($label, $name){
        echo '<label>'.$label.'</label><textarea name="'.$name.'" required></textarea><br/>';
    }

//Fonction qui crée un bouton submit
    public function submit(){
        echo '<button type="submit">Envoyer</button>';
    }
}

?>
