<?php

class Student{
    private $nom;
    private $prenom;
    private $numero_etudiant;
    private $credit = 0;

    function __construct(?string$nom, ?string$prenom, ?int$numero_etudiant, ?int$credit){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->numero_etudiant = $numero_etudiant;
        $this->credit = $credit;
    }

    function add_credit($nombre){
        if($this->credit >= 0){
            $this->credit += $nombre;
        } else {
            echo "Erreur : Impossible d'ajouter un nombre de crédits négatif ou nul.";
            }
    }

    function afficher(){
        return $this->credit;
    }
}


$student = new Student("Doe","John",145, 0);
$student->add_credit(4);
$student->add_credit(3);
$student->add_credit(12);


