<?php

class animal {
    
    protected function deplacement(){
        return 'Je me deplace';
    }
    
    public function manger(){
        return 'Je mange';
    }
    
}


//-------

class elephant extends animal {
    
    public function quiSuisJE(){
        return 'Je suis un elephant et ' . $this -> deplacment();
        // je peux utiliser la fonction deplacment car elle est protected dans la classe mere.
    }
    
}

//-----

class chat extends animal {
    
    public function quiSuisJE(){
        return 'Je suis un chat';
    }
    
    public function manger(){
        return 'Je mande pas beaucoup'; // redefinition de méthode
    }
    
}

//-----

$chat = new chat;
echo $chat -> manger(); // je mange pas beaucoup et non pas je mange car la fonction a ete redefinie

$elephant = new elephant;
echo $elephant -> manger(); 
// echo $elephant -> deplacement(); // Erreur, la fonction est accessible à l'interieur de la classe et des classes filles mais pas a l'exterieur (protected)
