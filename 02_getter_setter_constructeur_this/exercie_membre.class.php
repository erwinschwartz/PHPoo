<?php

// Au regard de la classe ci-dessous créer un objet et renseigner son pseudo et son MDP puis les afficher ;

class Membre {
    
    private $pseudo;
    private $mdp;
    
    public function setPseudo($arg) {
        
        if(is_string($arg)){
            if(strlen($arg) > 3 && strlen($arg) < 25){
                $this -> pseudo = $arg;
            } 
        } 
        
    }
    public function getPseudo() {
        return $this -> pseudo;
    }
    
    public function setMdp($arg) {
        
        if(is_string($arg)){
            if(strlen($arg) > 3 && strlen($arg) < 25){
                $this -> mdp = sha1($arg);
            } 
        } 
        
    }
    public function getMdp() {
        return $this -> mdp;
    }
    
}

//---------

$membre = new Membre;

$membre -> setPseudo('Blaeste');
$membre -> setMdp('soleil');

echo 'Pseudo : ' . $membre -> getPseudo() . '<br>';
echo 'Mot de passe : ' . $membre -> getMdp() . '<br>';
