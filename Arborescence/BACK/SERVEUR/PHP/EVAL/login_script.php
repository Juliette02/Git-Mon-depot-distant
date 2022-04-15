<?php 

//Connection base de donnée !!!!!!!!!!
    include "db1.php";
    $db1 = ConnexionBase1();
//Fin !!!!!!!!

    session_unset();
    session_start();

//Vérifier que tout est bien rentrer !!!!!!!

    if(isset($_POST['inscrit'])){

        //$_SESSION['Mail'] = $_POST['Mail'];
        $Mail = $_POST['Mail'];
        echo 'Mail : ' . $Mail . "<br>";
        $mdp = $_POST['mdp'];
        echo 'Mot de passe : ' . $mdp . "<br>";

        // echo "Session ID : " . session_id();


    // Function qui vérifie si les valeurs rentrés sont sécurisé !!!!!!
        function secure($data){
            $data = trim($data); // Supprime les espaces (ou d'autres caractères) en début et fin de chaîne 
            $data = stripslashes($data); // Supprime les antislashs d'une chaîne
            $data = htmlspecialchars($data); // Convertit les caractères spéciaux en entités HTML
            return $data; // Retourne le contrôle du programme au module appelant !!!!!!
        }
    //Fin !!!!!!!!!!

        
        //Verifier que tous les champs ne sont pas vide !!!!!!!
            if(!empty($Mail) AND !empty($mdp)){
                $Mail = secure($Mail);
                $mdp = secure($mdp);
            }
        //Fin !!!!!!!!
        
        $sql = $db1->prepare('SELECT * FROM inscrit WHERE Mail = :Mail');

        $sql -> bindParam(':Mail', $Mail);

        $sql -> execute();

        $tableau = $sql->fetch(PDO::FETCH_OBJ);
        var_dump($tableau);

        if($tableau){
            
            // vérifie que les 2 mots de passe concordent

            // si oui : stockage du login (mail) dans $_SESSION + redirection vers page liste disques
            // si non : renvoie page connexion avec message erreur mdp
            if(password_verify($mdp, $tableau->mdp)){ // password_hash juste quand on insert into une bdd !!!!!!!
                $_SESSION['Login'] = $Mail;
                header('Location: V_Record.php'); 
            } else {
                $_SESSION["erreur"] = "Le mot de passe ne correspond pas ! ";
                header('Location: login_form.php');
            }

        } else {
            // header('Location : login_form.php?erreur=1');
            $_SESSION["erreur"] = "L'adresse mail n'existe pas";
            header('Location: login_form.php');
        }

    }
//Fin !!!!!!!!!!


?>