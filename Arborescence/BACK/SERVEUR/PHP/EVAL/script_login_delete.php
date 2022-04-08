<?php

//Connection base de donnée !!!!!!!!!!
    include "db1.php";
    $db = ConnexionBase();
//Fin !!!!!!!!

//Récurère l'adresse mail !!!!!

if(isset($_POST['inscrit'])){

    //$_SESSION['Mail'] = $_POST['Mail'];
    $Mail = $_POST['Mail'];
    echo 'Mail : ' . $Mail . "<br>";
    $mdp = $_POST['mdp'];
    echo 'Mot de passe : ' . $mdp . "<br>";

}

//Fin !!!!!!!

?>