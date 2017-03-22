<?php

// surcharge : ou override permet de modifier le comportement initialement prevu d'une methode héritée. On y apporte des traitements supplementaires
// surcharge != redefinition

class A {
    public function calcul(){
        return '10';
    }
}

//---

class B extends A {
    public function calcul(){
        return parent::calcul() + 5;
        // tu recupere le fonctionnement prevu dans la classe parente et tu ajout des traitements
    }
}
