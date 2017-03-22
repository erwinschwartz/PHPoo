<?php

class A {
    
    public function bonjour() {
        return 'bonjour';
    }
    
}

class B { // non extends de A
    
    public $maVariable;
    
    public function __construct(){
        $this -> maVariable = new A;
    }
    
}

//-----

$b = new B;
echo $b -> maVariable -> bonjour();

/*

    Nous avons un objet A dans un objet B le tout sans heritage.

*/
