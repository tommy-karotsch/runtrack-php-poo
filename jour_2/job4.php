<?php

class Student{
    private $nom;
    private $prenom;
    private $id;
    private $credit = 0;
    private $level;

    function __construct(?string$nom, ?string$prenom, ?int$id, ?int$credit){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->id = $id;
        $this->credit = $credit;
        $this->level = $this->studentEval();
    }

    function add_credit($nombre){
        if($this->credit >= 0){
            $this->credit += $nombre;
            $this->level = $this->studentEval();
        } else {
            echo "Erreur : Impossible d'ajouter un nombre de crédits négatif ou nul.";
            }
    }

    function afficher(){
        return $this->credit;
    }

    private function studentEval(){
        if($this->credit >= 90){
            return "Excellent <br>";
        } elseif($this->credit >= 80){
            return "Très bien <br>";
        } elseif($this->credit >= 70){
            return "Bien <br>";
        } elseif($this->credit >= 60){
            return "Passable <br>";
        } else{
            return "Insuffisant <br>";
        }
    }

    function studentInfo(){
        echo "<h3> Informations de l'Étudiant : </h3>";
        echo "Prenom = " . $this->prenom . "<br>";
        echo "Nom = " . $this->nom . "<br>";
        echo "ID = " . $this->id . "<br>";
        echo "Niveau = " . $this->level . "<br>";
    }
}


$student = new Student("Doe","John",145, 0);

$student->add_credit(30);
$student->add_credit(22);
$student->add_credit(20);


$student->studentInfo();