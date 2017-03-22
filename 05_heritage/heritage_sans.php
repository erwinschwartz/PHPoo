<?php

class A {
    public function test1(){
        return 'test1';
    }
    
    protected function test(){
        return 'test';
    }
}

//---

class B extends A {
    public function test2(){
        return 'test2';
    }
}

//---

class C extends B{
    public function test3(){
        echo $this -> test(); // on peu utiliser une fonction protected de A grace a la transitivité
        return 'test3';
    }
}

//------
//transivité : si B herite de A et que C herite de B alors C herite de A

$c = new C;

echo $c -> test1(); // methode de A accessible a C
echo $c -> test2(); // methode de B accessible a C
echo $c -> test3(); // methode de C

print_r(get_class_methods($c)); // me retourne les 3 methodes



/*

    L'heritage est :
        non reflexif : class D extends D. on ne peut aps herité de soi-meme
        sans cycle :  class F extends E. la class E ne peut pas extend F
        non symetrique :  class X extends Y. cela ne signifie pas que class Y extends X
        non multiple : class G extends I, H.

*/
