<?php

//Connection base de donnée !!!!!!!!!!
    include "db.php";
    $db = ConnexionBase();
//Fin !!!!!!!!

// Recupere l'ID du disc !!!!!!!!
    $id = $_GET['disc_id'];              // Attention il faut mettre une requete php dans <from action="..."> pour récupérer l'ID du disc
    echo 'ID of this disk is : ' . $id . '<br>';
//Fin !!!!!!!!!!

// Suprimmer des données dans la bdd !!!!!!!!!!!!!!
    $sql = $db->prepare('DELETE FROM disc  
                        WHERE disc_id = ?');
// Fin !!!!!!!!!!

//Execute la supression !!!!!!!!!!!!!!!!!!!
    $sql -> execute([$id]);
//Fin !!!!!!!!!!!!!

//Envoie à la page d'accueil après l'éxecution !!!!!!!!!
    header("Location: V_Record.php");
//Fin !!!!!!!!!
?>