<?php

class Produit{
    public $nom;
    public $prixHT;
    public $TVA;


    function __construct($nom, $prixHT, $TVA){
        $this->nom = $nom;
        $this->prixHT = $prixHT;
        $this->TVA = $TVA;
    }
    function CalculerPrixTTC(){
        return $this->prixHT * $this->TVA;
    }


    function infoProduit(){
        return "Nom du produit : ". $this->nom ."<br><br>" . "Prix HT : " . $this->prixHT . " €<br><br>" .  "Prix TTC : " . $this->nom . " : " . $this->CalculerPrixTTC() . " € " . "(" . $this->TVA . "% de TVA)" . "<br><br><br><br><br>";
    }


    function modifierPrix($nouveauPrixHT){
        $this->prixHT = $nouveauPrixHT;
    }


    function modifierNom($nouveauNom){
        $this->nom = $nouveauNom;
    }


    function modifierTVA($nouvelleTVA){
        $this->TVA = $nouvelleTVA;
    }
}



$produit1 = new Produit("Bouteille d'eau",2.89, 5);
echo $produit1->modifierPrix(0.80);
echo $produit1->infoProduit();



$produit2 = new Produit("Audi A3 Sportback ", 41900, 1.2);
echo $produit2->modifierNom("BMW M4");
echo $produit1->modifierPrix(94900);
echo $produit2->modifierTVA(2);
echo $produit2->infoProduit();



$produit3 = new Produit("Iphone 13", 436, 20);
echo $produit3->infoProduit();












?>