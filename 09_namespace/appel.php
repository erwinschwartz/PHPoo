<?php

namespace Appel; // je cree le namespace appel

require('espace1.php');
require('espace2.php');

use Espace1;
use Espace2;

$objet = new Espace1\A;
echo $objet -> test() . '<br>';

$objet = new Espace2\A;
echo $objet -> test() . '<br>';
