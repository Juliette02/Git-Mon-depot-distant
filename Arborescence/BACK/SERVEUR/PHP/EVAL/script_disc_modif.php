<?php

//Connection base de donnée !!!!!!!!!!
    include "db.php";
    $db = ConnexionBase();
//Fin !!!!!!!!

//Récupérer les données du formulaire d'ajout !!!!!!!!!!!
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $Title = $_REQUEST['Title'];
    echo 'Title is : ' . $Title . "<br>";
    $Artist = $_REQUEST['Artist'];
    echo 'ID od this artist is : ' . $Artist . "<br>";
    $Years = $_REQUEST['Year'];
    echo 'Year is : ' . $Years . "<br>";
    $Genre = $_REQUEST['Genre'];
    echo 'Genre is : ' . $Genre . "<br>";
    $Label = $_REQUEST['Label'];
    echo 'Label is : ' . $Label . "<br>";
    $Price = $_REQUEST['Price'];
    echo 'Price is : ' . $Price . "<br>";

    // Recupere l'ID du disc !!!!!!!!
    $id = $_GET['disc_id'];              // Attention il faut mettre une requete php dans <from action="..."> pour récupérer l'ID du disc
    echo 'ID of this disk is : ' . $id . '<br>';
    //Fin !!!!!!!!!!

    //insérer l'image !!!!!!!!!!!!
    $Picture = $_FILES['Picture']['name']; /// recupére où il trouve l'image
    
    //echo $_FILES['Picture']['tmp_name'];
    if ($_FILES['Picture']['name'] != ""){
        $retour = copy($_FILES['Picture']['tmp_name'], "./img/".$_FILES['Picture']['name']);// copi du chemin images dans dossier image. ATTENTION!! ['tmp_name'] designe le chemin initiale de l'image !!!!! 
            if($retour){
            echo $_FILES['Picture']['name'];
            $sql = $db->prepare('UPDATE disc SET disc_picture = :Picture WHERE disc_id = :id'); // Séparer la requete pour la photo des autres afin de pouvoir modifier le reste,
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
        if(empty($Title) || empty($Years) || empty($Genre) || empty($Label) || empty($Price)) {
            echo $Erreur;
            die();
        } 
        else {
            $Title = secure($Title);
            $Years = secure($Years);
            $Genre = secure($Genre);
            $Label = secure($Label);
            $Price = secure($Price);
        }
    //Fin !!!!!!!!!!

//Fin !!!!!!!!!

// Insérer les données modifiés dans la bdd !!!!!!!!!!!!!!
    $sql = $db->prepare('UPDATE disc 
                        SET disc_title = :Title, disc_year = :Years, disc_label = :Label, disc_genre = :Genre, disc_price = :Price, artist_id = :Artist 
                        WHERE disc_id = :id');
//Fin !!!!!!!!!!

//Sécurise les données !!!!!!!!!!!!!!!!!!!
    $sql -> bindValue(':Title', $Title);
    $sql -> bindParam(':Years', $Years);
    $sql -> bindValue(':Label', $Label);
    $sql -> bindValue(':Genre', $Genre);
    $sql -> bindParam(':Price', $Price);
    $sql -> bindValue(':Artist', $Artist);
    $sql -> bindParam(':id', $id);
//Fin !!!!!!!!!!!

//Execute la modification !!!!!!!!!!!!!!!!!!!
    $sql -> execute();
//Fin !!!!!!!!!!!!!

//Envoie à la page d'accueil après l'éxecution !!!!!!!!!
    header("Location: V_Record.php");
//Fin !!!!!!!!!

?>