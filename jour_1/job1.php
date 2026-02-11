<?php

class Operation{
    public $nombre1;
    public $nombre2;

    public function __construct(){
        
        $this -> nombre1 = 1420;
        $this -> nombre2 = 2672;
    } 
}

$result = new Operation();

echo "Le premier nombre est : " . $result->nombre1 . "<br>" ;
echo "Le deuxième nombre est : " . $result->nombre2;

?>