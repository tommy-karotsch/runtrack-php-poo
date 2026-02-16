<?php

class Voiture{
    private $marque;
    private $modele;
    private $annee;
    private $km;
    private $en_marche = false;
    private $reservoir;

    function __construct(?string$marque, ?string$modele, ?int$annee, ?int$km, bool$en_marche, ?int$reservoir = 50){
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->km = $km;
        $this->$en_marche = $en_marche;
    }

    function afficherInfo(){
        echo "<h3> Informations du véhicule : </h3>"; 
        echo "Marque = " . $this->marque . "<br>";
        echo "Modèle = " . $this->modele . "<br>";
        echo "Année = " . $this->annee . "<br>";
        echo "Kilométrage = " . $this->km . "<br>";
        echo "enug = " . $this->en_marche . "<br>";
    }

    function demarrer(){
        if($this->verifier_plein() >= 5){
            return $this->en_marche = true;
        } else{
            return $this->arreter();
        }
    }
    function arreter(){
        return $this->en_marche = false;
    }

    private function verifier_plein(){
        return $this->reservoir;
    }
}


$voiture = new Voiture("Citroen", "C4", 2006, 182673,false);

$voiture->afficherInfo();

$voiture->demarrer();
