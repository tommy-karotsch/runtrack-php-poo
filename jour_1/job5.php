<?php

class Animal{

    public $age;
    public $nom;


    function __construct($age, $nom){

        $this->age = $age;
        $this->nom = $nom;
        echo "L'âge de l'animal " . $this->age . " an" . "<br><br>";
        echo "# Age de l'animal après appel de la methode viellir" . "<br><br>";
    }

    function vieillir($newage){

        $this->age = $newage;
        echo "L'âge de l'animal est de " . $this->age + 1 . " an " . "<br><br>";



    }

    function nommer($nouveaunom){

        $this->nom = $nouveaunom;
        echo "L'animal se nomme " . $this->nom . "<br><br>";


    }
}

$animal = new Animal(0, null);

$animal-> vieillir(5);
$animal-> nommer('Albert');


















?>