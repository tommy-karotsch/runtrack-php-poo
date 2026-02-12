<?php

class Livre{

    private $disponible = true;

    function __construct($disponible){
        $this->disponible = $disponible;
    }

    public function verification() {
    if ($this->disponible == true) {
        return true;
    } else{
        return false;
        }
    }


    function emprunter(){
        if($this->verification() === true){
            $this->disponible = false;
            return "Le livre a bien été emprunter." . "<br><br>";
        } else{
            return "Erreur : Le livre n'est pas disponible, il a déjà été emprunté." . "<br><br>";
        }
    }

    function rendre(){

        if($this->verification() == false){
            $this->disponible = true;
            return "Livre rendu." . "<br><br>";
        } else{
            return "Erreur : Impossible de rendre ce livre, il n'a pas été emprunté." . "<br><br>";
        }


    }
}

$livre = new Livre(true);

echo "État du livre : " . ($livre->verification() ? "Dispo" : "Emprunté") . "<br>";
echo $livre->emprunter();
echo $livre->rendre();

