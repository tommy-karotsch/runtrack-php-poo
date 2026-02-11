<?php

class Cercle{
    public $rayon;
    function __construct($rayon=0,){
        $this->rayon = $rayon;
    }
    function changerRayon($newrayon){
        $this->rayon = $newrayon;
        return "Rayon : " . $this->rayon;

    }
    function afficherInfos(){
        echo "Rayon : " . $this->rayon . "<br><br>";
        echo $this->circonférence() . "<br><br>";
        echo $this->aire() . "<br><br>";
        echo $this->diametre() . "<br><br>";

    }    
    function circonférence(){
        return "Circonférence du cercle : " . 2 * 3.14 * $this->rayon;
    }
    function aire(){
        return "L'aire du cercle : " . $this->rayon * $this->rayon * M_PI;
    }
    function diametre(){
        return "Diamètre du cercle : " . 2 * $this->rayon . "<br><br>";
    }
}

$cercle1 = new Cercle(4);
echo $cercle1->afficherInfos();

$cercle2 = new Cercle(7);
echo $cercle2->afficherInfos();
?>