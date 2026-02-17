<?php

class Rectangle{
    protected $longueur;
    protected $largeur;

    function setLongueur($longueur){
        $this->longueur = $longueur;
        return $this;
    }
    function setlargeur($largeur){
        $this->largeur = $largeur;
        return $this;
    }
    function getLongueur(){
        return $this->longueur;
    }
    function getlargeur(){
        return $this->largeur;
    }
    private function perimetre(){
        $perimetre = 2 * ($this->longueur + $this->largeur);
        return "Le perimètre du Rectangle de " . $this->longueur . " de longueur  " . "et de " . $this->largeur . " de largeur est de : " . $perimetre . "<br><br>";
    }
            function getperimetre(){
                return $this->perimetre();
            }
    private function surface(){
        $surface = ($this->longueur * $this->largeur);
        return "La surface du rectangle de " . $this->longueur . " de longueur  " . "et de " . $this->largeur . " de largeur est de : " . $surface . "<br><br>";
    }
            function getsurface(){
                return $this->surface();
            }
}



$rectangle = new Rectangle();

$rectangle->setLongueur(12);
$rectangle->setlargeur(6);

echo "Longueur : " . $rectangle->getLongueur() . "<br>";
echo "Largeur : " . $rectangle->getlargeur() . "<br>";

echo "<br><br>";

echo $rectangle->getperimetre();
echo $rectangle->getsurface();



class Parallelepipede extends Rectangle{
    private $hauteur;
    function setHauteur($hauteur){
        $this->hauteur = $hauteur;
        return $this;
    }
    function getHauteur(){
        return $this->hauteur;
    }
    private function volume(){
        $volume = $this->getLongueur() * $this->getlargeur() * $this->getHauteur();
        return "Le volume du Parallelepipede est de : " . $volume . "<br><br>";
    }
            function getvolume(){
                return $this->volume();
            }
}

$parallelepipede = new Parallelepipede();

$parallelepipede->setHauteur(8);
echo "<br><br> Hauteur du Parallelepipede : " . $parallelepipede->getHauteur() . "<br>";
