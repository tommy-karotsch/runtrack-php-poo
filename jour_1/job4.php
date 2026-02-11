<?php

class Point{
    public $x;
    public $y;

    function __construct(?int$x, ?int$y){
        $this->x = $x;
        $this->y = $y;
    }


    function AfficherLesPoints(){
        echo 'Coordonnées X : ' . $this->x . ' et ';
        echo 'Coordonnées Y : ' . $this->y . '<br><br><br>';
    }

    function AfficherX(){
        echo 'Coordonnées X : ' . $this->x . '<br><br>';
    }

    function AfficherY(){
        echo 'Coordonnées Y : ' . $this->y . '<br><br><br>';
    }

    function ChangerX($newX){
        $this->x = $newX;
        echo 'Nouvelle Coordonnées X : ' . $this->x . '<br><br>';
    }


    function ChangerY($newY){
        $this->y = $newY;
        echo 'Nouvelle Coordonnées X : '. $this->y . '<br><br>';
    }
}

$coordonnesxy = new Point(78, 54);
$coordonnesxy-> AfficherLesPoints(); 
$coordonnesxy->AfficherX();
$coordonnesxy->AfficherY();
$coordonnesxy->ChangerX(780);
$coordonnesxy->ChangerY(540);

?>