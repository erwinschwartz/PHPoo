<?php

class Vehicule {
    
    private $litre;
    private $reservoir;
    
    //Setters :
    public function setLitre($litre){
        $this -> litre = $litre;
    }
    public function setReservoir($reservoir){
        $this -> reservoir = $reservoir;
    }
    
    //Getters :
    public function getLitre(){
        return $this -> litre;
    }
    public function getReservoir(){
        return $this -> reservoir;
    }
}

class Pompe {
    
    private $litre;
  
    //Setters :
    public function setLitre($litre){
        $this -> litre = $litre;
    }
    
    //Getters :
    public function getLitre(){
        return $this -> litre;
    }
  
    
    
    public function fairePlein(Vehicule $v){
        
        // nouvelle valeurPompe = 800 - (50 - 5) = 800 - 45 = 755
        $this -> setLitre($this -> getLitre() - ($v -> getReservoir() - $v -> getLitre()));     
        
        // nouvelle valeurVehicule = 5 + (50 - 5) = 5 + 45 = 50
        $v -> setLitre($v -> getLitre() + ($v -> getReservoir() - $v -> getLitre()));
        
    }
    
    
}

//-------
$vehicule1 = new Vehicule;
$vehicule1 -> setLitre(10);
$vehicule1 -> setReservoir(50);

echo 'Essence dans le vehicule : ' . $vehicule1 -> getLitre() . '<br> <hr>';

$pompe1 = new Pompe;
$pompe1 -> setLitre(800);

echo 'Essence dans la pompe : ' . $pompe1 -> getLitre() . '<br> <hr>';

//------

$pompe1 -> fairePlein($vehicule1);

echo 'Après ravitaillement : <br>';
echo 'La voiture possède ' . $vehicule1 -> getLitre() . 'litre(s) de carburant. <br>';
echo 'La pompe possède' . $pompe1 -> getLitre() . 'litre(s) de carburant.';









//-------
