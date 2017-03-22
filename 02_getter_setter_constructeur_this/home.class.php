<?php

class Homme {
    
    private $prenom;
    private $nom;
    
    public function setPrenom($arg) {
        
        if(is_string($arg)){
            if(strlen($arg) > 3 && strlen($arg) < 25){
                $this -> prenom = $arg;
            } 
        } 
        
    }
    public function getPrenom() {
        return $this -> prenom;
    }
    
    public function setNom($arg) {
        $this -> nom = $arg;
    }
    
    public function getNom() {
        return $this -> nom;
    }
    
}



// -------

$homme = new Homme;

$homme -> setPrenom('Erwin');
echo $homme -> getPrenom();

$homme -> setNom('Schwartz');
echo $homme -> getNom();


/*
Pourquoi faire des getter et des setter :
    Le PHP etant un language qui ne type pas ses variables nous devons constament faire de nombreuses vérifications sur l'intégrité des variables que nous utilisons.
    Imposer l'utilisation d'un setter est une bonne pratique pour controler l'intégrité des données.

$this -> Represente l'object en cours... C'est a dire l'object qui execute la méthode.
*/
