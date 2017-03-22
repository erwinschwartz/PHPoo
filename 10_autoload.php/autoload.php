<?php

function inclusion_automatique($nom_de_classe){
    require('class' . $nom_de_classe . '.php');
    echo 'On passe dans l\'autoload. <br>';
    echo 'Require(class' . $nom_de_classe . '.php <hr>)';
}

//------
spl_autoload_register('inclusion_automatique');

/*

    c'est une fonction predefinie qui sexecute a chque fois quelle voit le mot new.
    elle va lancer la fonction  precisee en argument et apporter le nom de la classe instanciee en argument de la fonction

*/
