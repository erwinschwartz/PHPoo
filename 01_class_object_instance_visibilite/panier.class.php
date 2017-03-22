<?php

class Panier {
    
    public $nbProduit; // Propriété
    
    public function ajouterProduit(){
        return 'Le produit à été ajouté';
    }

    protected function retirerProduit(){
        return 'Le produit à été supprimé';
    }
    
    private function afficheProduit(){
        return 'Voici le panier';
    }
}

//------------
$panier1 = new Panier; // Instanciation (création d'un objet de la classe panier)

echo '<pre>';
var_dump($panier1);
echo '</pre>';

echo '<pre>';
var_dump(get_class_methods($panier1));
echo '</pre>';

$panier1 -> nbProduit = 5;

// propriété public
echo 'Panier 1 : ' . $panier1 -> nbProduit . ' produit(s) dans le panier <br>';

// methode public
echo 'Panier 1 : ' . $panier1 -> ajouterProduit() . '<br>'; 

// Methode protected
//echo 'Panier 1 : ' . $panier1 -> retirerProduit() . '<br>';

// Methode private
//echo 'Panier 1 : ' . $panier1 -> afficheProduit() . '<br>';

/* 
Niveau de visibilité :
    public : Accessible de partout
    protected : accessible depuis la classe et les enfants
    private : accessible uniquement depuis la class
    
Divers :
    new : permet d'effectuer une instanciation (création d'un nouvel objet)
    Une classe peut produire plusieur objets
    $panier1 représente un objet de la class Panier.
*/












