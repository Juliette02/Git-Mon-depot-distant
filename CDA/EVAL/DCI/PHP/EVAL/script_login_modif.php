<?php

//Connection base de donnée !!!!!!!!!!
    include "db1.php";
    $db1 = ConnexionBase1();
//Fin !!!!!!!!

//Récupérer les données du formulaire d'ajout !!!!!!!!!!!
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $Nom = $_REQUEST['Nom'];
        echo 'FirstName is : ' . $Nom . "<br>";
        $Prenom = $_REQUEST['Prenom'];
        echo 'Name is : ' . $Prenom . "<br>";
        $Mail = $_REQUEST['Mail'];
        echo 'Mail is : ' . $Mail . "<br>";
        $mdp = $_REQUEST['mdp'];
        echo 'Password is : ' . $mdp . "<br>";

    // Recupere l'ID du disc !!!!!!!!
    $id = $_GET['id'];              // Attention il faut mettre une requete php dans <from action="..."> pour récupérer l'ID du disc
    echo 'ID of this disk is : ' . $id . '<br>';
    //Fin !!!!!!!!!!

    //insérer l'image !!!!!!!!!!!!
    $Picture = $_FILES['Picture']['name']; /// recupére où il trouve l'image
    
    //echo $_FILES['Picture']['tmp_name'];
    if ($_FILES['Picture']['name'] != ""){
        $retour = copy($_FILES['Picture']['tmp_name'], "./img.log/".$_FILES['Picture']['name']);// copi du chemin images dans dossier image. ATTENTION!! ['tmp_name'] designe le chemin initiale de l'image !!!!! 
            if($retour){
            echo $_FILES['Picture']['name'];
            $sql = $db1->prepare('UPDATE inscrit SET img = :Picture WHERE id = :id'); // Séparer la requete pour la photo des autres afin de pouvoir modifier le reste,
            $sql -> bindValue(':Picture', $Picture);                                            // sans avoir une photo vide !!!!!!
            $sql -> bindParam(':id', $id);                                                      // PS : On peut utiliser $sql deux fois mais il faut connecter la bdd avant toutes les requetes,
            $sql -> execute();                                                                  //      pour ne pas avoir d'erreur !!!!!!
        }
    }
    //Fin !!!!!!!!!

}
//Fin !!!!!!!!!!!!

//Verification des données !!!!!!!!!

    $Erreur = '<p style="color : red">Please, complete all fields !</p>';

    // Function qui vérifie si les valeurs rentrés sont sécurisé !!!!!!
        function secure($data){
            $data = trim($data); // Supprime les espaces (ou d'autres caractères) en début et fin de chaîne 
            $data = stripslashes($data); // Supprime les antislashs d'une chaîne
            $data = htmlspecialchars($data); // Convertit les caractères spéciaux en entités HTML
            return $data; // Retourne le contrôle du programme au module appelant !!!!!!
        }
    //Fin !!!!!!!!!!

    //Début analyse !!!!!!!!!!
        if(empty($Nom) || empty($Prenom) || empty($Mail) || empty($mdp) ) // empty() --> Détermine si une variable est vide
        {
            echo $Erreur;
            die();
        } 
        else {
            $Nom = secure($Nom);
            $Prenom = secure($Prenom);
            $Mail = secure($Mail);
            $mdp = password_hash(secure($mdp), PASSWORD_DEFAULT);
        }
    //Fin !!!!!!!!!!

//Fin !!!!!!!!!

// Insérer les données recupéré dans la bdd !!!!!!!!!!!!!!
    $sql = $db1->prepare('UPDATE inscrit
                        SET Nom = :Nom, Prenom = :Prenom, Mail = :Mail, mdp = :mdp, img = :Picture
                        WHERE id = :id');
//Fin !!!!!!!!!!

//Sécurise les données !!!!!!!!!!!!!!!!!!!
    $sql -> bindValue(':Nom', $Nom);
    $sql -> bindValue(':Prenom', $Prenom);
    $sql -> bindValue(':Mail', $Mail);
    $sql -> bindValue(':mdp', $mdp);
    $sql -> bindParam(':id', $id);
//Fin !!!!!!!!!!!

//Execute l'insertion !!!!!!!!!!!!!!!!!!!
    $sql -> execute();
//Fin !!!!!!!!!!!!!

//Envoie à la page d'accueil après l'éxecution !!!!!!!!!
    header("Location: profil.php");
//Fin !!!!!!!!!


?>