<?php

class Operation{
    public $nombre1;
    public $nombre2;

    public function __construct(){
        
        $this -> nombre1 = 1420;
        $this -> nombre2 = 2672;
    } 

    public function addition(){
        return $this -> nombre1 + $this -> nombre2;
    }
}

$result = new Operation();

echo "Le premier nombre est : " . $result->nombre1 . "<br>" ;
echo "Le deuxième nombre est : " . $result->nombre2 . "<br><br>";
echo "L'addition du premier et deuxième nombre est de  " . $result->addition();
?>