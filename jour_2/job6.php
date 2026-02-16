<?php

class Commande{
    private $num_commande;
    private $list_plat_commande;
    private $statut;


    function __construct($num_commande, $list_plat_commande, $statut){
        $this->num_commande = $num_commande;
        $this->list_plat_commande = $list_plat_commande;
        $this->statut = $statut;
    }


    function add_plats(){
        
    }
}