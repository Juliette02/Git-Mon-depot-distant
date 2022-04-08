<?php

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    echo $_REQUEST['nom'] . "<br>";
    echo $_REQUEST['prenom'] . "<br>";
    echo $_REQUEST['sexe'] . "<br>";
    echo $_REQUEST['ddn'] . "<br>";
    echo $_REQUEST['code_postal'] . "<br>";
    echo $_REQUEST['adresse'] . "<br>";
    echo $_REQUEST['ville'] . "<br>";
    echo $_REQUEST['email']. "<br>";
    echo $_REQUEST['sujet'] . "<br>";
    echo $_REQUEST['commentaire'] . "<br>";
    echo $_REQUEST['formulaire'] . "<br>";
}

?>