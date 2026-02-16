<?php

class Personne{
    public $age;


    function __construct(?int$age=14){
        $this->age = $age;
    }

    function modifierAge($agemodifier){
        $this->age = $agemodifier;
    }

    function bonjour(){
        return "Hello <br><br>";
    }

    function afficherAge(){
        return $this->age;
    }
}

class Eleve extends Personne{
    function allerEnCours(){
        return "Je vais en cours";
    }

    function afficherAge(){
        return "J'ai " . $this->age . " ans <br><br>";
    }
}


class Professeur extends Eleve{
    private $matiereEnseignee;


    function __construct($matiereEnseignee){
        $this->matiereEnseignee = $matiereEnseignee;
    }

    function enseigner(){
        return "Le cours va commencer";
    }
}

$personne = new Personne();
$personne->modifierAge(15);
echo $personne->bonjour();

 
$eleve = new Eleve();
echo $eleve->afficherAge();
echo $eleve->allerEnCours();


$prof = new Professeur("Anglais");
echo $prof->bonjour();
echo $prof->allerEnCours();



