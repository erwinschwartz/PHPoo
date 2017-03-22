<?php

class Membre {
    
    public $pseudo;
    public $id;
    public $mdp;
    //...
    
    public function inscription(){
        //traitement...
        return 'Je m\'inscris <hr>';
    }
    
    public function seConnecter(){
        //traitement...
        return 'Je me connecte <hr>';
    }
    
}

//----

class Admin extends Membre { // extends = héritage
    // c'est comme ci tout le code de la class membre etait copier coller ici
    
    public function accesBackOffice(){
        //traitement...
        return 'Acces backoffice <hr>';
    }
}

//------ Instanciation
$admin = new Admin;

echo $admin -> inscription();
echo $admin -> seConnecter();

/*

    L'heritage est l'un des fondement de la POO.
    Dans notre exemple, dans le site, un admin est avant tout un mmebre avec quelque droits en plus.
    Lors d'un héritage on hérite de tout, même de ce qui est private, egalement  de la fonction __construct.
    
    public : accessible de partout
    protected : accesssible depuis la classe mere + les classes heritieres
    private : accessible UNIQUEMENT depuis la classe ou cela a ete declare

*/
