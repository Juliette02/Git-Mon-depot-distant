<?php

//Connection base de donnée !!!!!!!!!!
    include "db1.php";
    $db1 = ConnexionBase1();
//Fin !!!!!!!!

// Recupere l'ID du disc !!!!!!!!
$id = $_GET['id'];              // Attention il faut mettre une requete php dans <from action="..."> pour récupérer l'ID du disc
echo 'ID of this disk is : ' . $id . '<br>';
//Fin !!!!!!!!!!

// Suprimmer des données dans la bdd !!!!!!!!!!!!!!
$sql = $db->prepare('DELETE FROM inscrit  
WHERE id = ?');
// Fin !!!!!!!!!!

//Execute la supression !!!!!!!!!!!!!!!!!!!
$sql -> execute([$id]);
//Fin !!!!!!!!!!!!!

//Envoie à la page d'accueil après l'éxecution !!!!!!!!!
    header("Location: V_Record.php");
//Fin !!!!!!!!!
?>