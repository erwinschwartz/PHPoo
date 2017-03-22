<?php

class Maison {
    
    public $couleur = 'blanc'; 
    // Appartient à l'objet
    
    public static $espaceTerrain = '500m2'; 
    // Appartient à la classe
    
    private static $nbPiece = 7;
    // Appartient à la classe
    
    private $nbPorte = 10; 
    // Appartient à l'objet
    
    const HAUTEUR = '10m'; 
    // Appartient à la classe
    
    
    // Getter -------------
    public static function getNbPiece(){
        return self::$nbPiece;
    }
    
    public function getNbPorte(){
        return $this -> nbPorte;
    }
    
}

//------
echo Maison::getNbPiece() . '<br>';
// Ok, j'accede à un element private via un getter, et puisque le getter est static j'y accede via la classe.

echo Maison::$espaceTerrain . '<br>';

// echo Maison::$nbPiece . '<br>';
// Erreur, je ne peux pas accéder à une propriété private en dehors de la classe.

echo Maison::HAUTEUR . '<br>';
// Ok, je peux accéder à une constante via la classe.

//------ Instanciation
$maison = new Maison;

echo $maison -> getNbPorte() . '<br>';
// Ok, je peu acceder a une propriété private via une getter qui appartient à l'objet.

echo $maison -> couleur . '<br>'; 
// Ok, je peux accéder à une propriété de mon objet par mon objet.

//echo $maison -> espaceTerrain . '<br>'; 
// Erreur, je ne peux pas acceder à la propriété de la class par mon objet.

//echo $maison -> nbPiece; 
// Erreur, je ne peu pas acceder à une propriété private en dehors de la classe. En plus elle appartient à la classe (static);
