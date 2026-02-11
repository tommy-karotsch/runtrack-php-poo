<?php

class Animal{

    public $age;
    public $nom;


    function __construct($age, $nom){

        $this->age = $age;
        $this->nom = $nom;
        echo "L'âge de l'animal " . $this->age . " an\n";
        echo "# Age de l'animal après appel de la methode viellir\n";
    }

    function vieillir($newage){

        $this->age = $newage;
        echo "L'âge de l'animal est de " . $this->age + 1 . " an\n\n ";



    }

    function nommer($nouveaunom){

        $this->nom = $nouveaunom;
        echo "L'animal se nomme " . $this->nom . " \n\n ";


    }
}

$animal = new Animal(0, null);

$animal-> vieillir(5);
$animal-> nommer('Albert');


















?>