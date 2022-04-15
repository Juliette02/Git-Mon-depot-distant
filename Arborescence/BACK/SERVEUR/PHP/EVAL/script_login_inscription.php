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
    }
//Fin !!!!!!!!!!!!


//insérer l'image !!!!!!!!!!!!
    $Picture = $_FILES['Picture']['name']; // recupére où il trouve l'image
    // echo $_FILES['Picture']['tmp_name'];
    if (isset($_FILES['Picture']['name']) === false) // isset() --> Détermine si une variable est déclarée et est différente de null
    {
        $retour = copy($_FILES['Picture']['tmp_name'], "./img.log/".$_FILES['Picture']['name']);// copi du chemin images dans dossier image. ATTENTION!! ['tmp_name'] designe le chemin initiale de l'image !!!!! 
        if($retour){
            echo $Picture . '<br>';
        } 
    }
    
 ///Fin !!!!!!!!!

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
        if(empty($Nom) || empty($Prenom) || empty($Mail) || empty($mdp) || empty($Picture) ) // empty() --> Détermine si une variable est vide
        {
            echo $Erreur;
            die();
        } 
        else {
            $Nom = secure($Nom);
            $Prenom = secure($Prenom);
            $Mail = secure($Mail);
            $mdp = password_hash("secure($mdp)", PASSWORD_DEFAULT);
            $Picture = secure($Picture);
        }
    //Fin !!!!!!!!!!

//Fin !!!!!!!!!

// Insérer les données recupéré dans la bdd !!!!!!!!!!!!!!
    $sql = $db1->prepare('INSERT INTO inscrit(Nom, Prenom, mail, mdp, img) 
                        VALUES(:Nom, :Prenom, :Mail, :mdp, :Picture)');
//Fin !!!!!!!!!!

//Sécurise les données !!!!!!!!!!!!!!!!!!!
    $sql -> bindParam(':Nom', $Nom);
    $sql -> bindParam(':Prenom', $Prenom);
    $sql -> bindParam(':Mail', $Mail);
    $sql -> bindParam(':mdp', $mdp);
    $sql -> bindParam(':Picture', $Picture);
//Fin !!!!!!!!!!!

//Execute l'insertion !!!!!!!!!!!!!!!!!!!
    $sql -> execute();
//Fin !!!!!!!!!!!!!

//Envoie à la page d'accueil après l'éxecution !!!!!!!!!
    header("Location: V_Record.php");
//Fin !!!!!!!!!


?>