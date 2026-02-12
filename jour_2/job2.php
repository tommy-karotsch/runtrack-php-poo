<?php

class Livre{
    private $title;
    private $author;
    private $npage;
    private $errormsg = "";

    function __construct(?string$title, ?string$author,?int$npage){
        $this->title = $title;
        $this->author = $author;
        $this->npage = $npage;
    }

    function setAttributes($newtitle, $newauthor, $npages){
        $this->title = $newtitle;
        $this->author = $newauthor;
        

        if(is_int($npages) && $npages >= 0){
            $this->npage = $npages;
            $this->errormsg = "";
        } else{
            $this->errormsg = "<br>" . "<span style='color:red; font-weight:bold;'> Erreur : Nombre entier et positif uniquement." . "<br><br>";
        }
    }

    function getAttributes(){
        echo "Titre du livre : " . $this->title . "<br><br>";
        echo "Auteur : " . $this->author . "<br><br>";
        echo "Nombre de pages : " . $this->npage . " " . $this->errormsg . "<br><br>";
    }
}


$livre = new Livre("La Panthera", "Jungle Jack", 181);
$livre->setAttributes("Le Panthère", "Jack Jingle", 46.2);
$livre->getAttributes();