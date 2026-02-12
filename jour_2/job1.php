<?php

class Rectangle{

    private $longueur;
    private $largeur;

    function __construct($longueur=0, $largeur=0){
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }
    function setLongueur($nouvellelongueur){
        $this->longueur = $nouvellelongueur;
    }
    function setLargeur($nouvellelargeur){
        $this->largeur = $nouvellelargeur;
    }
    function getLongueur(){
        return "Longueur : " . $this->longueur . "<br><br>";
    }
    function getLargeur(){
        return "Largeur : " . $this->largeur . "<br><br>" ;
    }
}

$rectangle = new Rectangle(10,5);
echo $rectangle->setLongueur(20);
echo $rectangle->setLargeur(10);
echo $rectangle->getLongueur();
echo $rectangle->getLargeur();