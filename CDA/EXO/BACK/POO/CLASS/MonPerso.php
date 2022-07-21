<?php

require 'Personnage.class.php';
// La page requiere la page script de la class Personnage() !!!
// On appel la page pour qu'elle soit connecter.

// echo 'OK<br><br>';

$p = new Personnage(); // On initialise un nouvelle objet/insttance dans la class Personnage() (On initialise un nouveau personnage) !!
$p->setInfo('Hika', 'Yuri', 23, 'Femme'); // On lui affecte des valeurs grâce à la function setInfo() initialiser dans le script de la page Class.

// var_dump($p);

echo '<br><br>' . $p->getNom();
echo ', ' . $p->getPrenom();
echo ', ' . $p->getAge();
echo ', ' . $p->getSexe();
// On appel les différentes valeurs initialiser 

?>