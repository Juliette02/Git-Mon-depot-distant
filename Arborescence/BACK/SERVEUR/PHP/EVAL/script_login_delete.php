<?php

//Connection base de donnée !!!!!!!!!!
    include "db1.php";
    $db1 = ConnexionBase1();
//Fin !!!!!!!!

//Récurère l'adresse mail !!!!!

    $Mail = $_POST['Mail'];
    echo 'Mail : ' . $Mail . "<br>";
    $mdp = $_POST['mdp'];
    echo 'Mot de passe : ' . $mdp . "<br>";


//Fin !!!!!!!

?>