<?php

class Produit{
    public $nom;
    public $prixHT;
    public $TVA;


    function __construct($nom, $prixHT, $TVA){
        $this->nom = $nom;
        $this->prixHT = $prixHT;
        $this->TVA = $TVA;
    }
    function CalculerPrixTCC(){
        return $this->prixHT * $this->TVA;
    }


    function afficher(){
        return $this->CalculerPrixTCC();
    }
}


?>