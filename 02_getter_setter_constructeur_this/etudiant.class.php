<?php

class Etudiant {
    
    private $prenom;
    
    public function __construct($arg) { // la fonction magique construct permet de faire une action au moment de l'instanciation 
        $this -> setPrenom($arg);      
    }
    
    public function setPrenom($prenom) {
        $this -> prenom = $prenom;
    }
    
    public function getPrenom() {
        return $this -> prenom;
    }
    
}

//-------

$etudiant = new Etudiant('Erwin');

// Exercice : Sans utiliser modifier l'exterieur de la class, essayer de renseigner la propriété prenom de notre objet $etudiant...
 echo 'prenom : ' . $etudiant -> getPrenom() . '<br>';


/*
    __construct() ext une fonction magique qui nous permet d'effectuer des action lors de la creation d'un objet. Elle recoit en argument, les arguments dans la parenthèse lors de l'instanciation.

    Ceci est pratique pour deployer un site (objet qui vont creer des objets), et notamment dans l'instance sans heritage.

*/
