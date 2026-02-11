<?php

class Personnage{
    public $x;
    public $y;


    function __construct($xInitial, $yInitial){
        $this->x = $xInitial;
        $this->y = $yInitial;
    }



    function gauche(){
        $this->x--;
    }



    function droite(){
        $this->x++;
    }


    function bas(){
        $this->y++;
    }




    function haut(){
        $this->y--;
    }




    function position(){
        return[
            'x' => $this->x,
            'y' => $this->y
        ];
    }
}


$joueur = new Personnage(10, 10);

$joueur->droite();
$joueur->droite();
$joueur->droite();
$joueur->haut();
$joueur->haut();

$pos = $joueur->position();

echo "Position finale : X = " . $pos['x'] . ", Y = " . $pos['y'];














































?>