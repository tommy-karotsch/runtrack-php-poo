<?php

class Personne{

    public $prenom;
    public $nom;


    function __construct($prenom, $nom){
        $this->prenom = $prenom;
        $this->nom = $nom;
    }

    function Afficher(){
        echo'Prenom : ' . $this->prenom .'<br>' . 'Nom : ' . $this->nom . '<br><br><br>';
    }
}

$id = new Personne('Arthur','Morgan');
$id-> Afficher();

$id2 = new Personne('Nuno', 'Mendes');
$id2-> Afficher();

$id3 = new Personne('Reese', 'Kronos');
$id3-> Afficher();

$id4 = new Personne('Edinson', 'Cavani');
$id4-> Afficher();

$id5 = new Personne('Jackie','Wells');
$id5-> Afficher();



    
?>