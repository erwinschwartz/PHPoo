<?php

// Un design pattern est une réponse à un probleme rencontré par plusieurs développeur. Ou comment faire pour crée une classe qui ne produira qu'un seul objet.

class Singleton {

    private static $instance = NULL;
    
    private function __construct(){}
    // la classe n'est pas instanciable
    
    private function __clone(){}
    // L'objet ne sera pas clonable
    
    public static function getInstance() {
        if(is_null(self::$instance)){
            self::$instance = new Singleton;
        }
        return self::$instance;
    }
    
}

//---- Instanciation

// $s = new Singleton; 
// Erreur, la fonction __construct() est private donc non accessible hors de la classe.
