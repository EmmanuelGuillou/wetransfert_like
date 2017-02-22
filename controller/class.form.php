<?php

class FORM{

    private $db;

    public function __construct($pdo){
        $this->db = $pdo;
    }

//Fonction qui crée un input email
    public function input_mail($label, $name){
        echo '<label>'.$label.'</label><input type="email" class="form-control" name="'.$name.'"><br/>';
    }

//Fonction qui crée un input file
    public function input_file($label, $name){
        echo '<label>'.$label.'</label><input type="file" name="'.$name.'"><br/>';
    }

//Fonction qui crée un textarea
    public function textarea($label, $name){
        echo '<label>'.$label.'</label><textarea class="form-control" name="'.$name.'" required></textarea><br/>';
    }

//Fonction qui crée un bouton submit
    public function submit(){
        echo '<button class="btn btn-warning" type="submit" id="link">Envoyer</button>';
    }
}

?>
