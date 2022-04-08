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
}
//Fin !!!!!!!!!!!!

//insérer l'image !!!!!!!!!!!!

    $E_Img = '<p style="color : red">Please, upload an image !</p>';

    $Picture = $_FILES['Picture']['name']; /// recupére où il trouve l'image
    //echo $_FILES['Picture']['tmp_name'];
    if (isset($_FILES['Picture']['name']) === false) // isset() --> Détermine si une variable est déclarée et est différente de null
    {
        $retour = copy($_FILES['Picture']['tmp_name'], "./img/".$_FILES['Picture']['name']);// copi du chemin images dans dossier image. ATTENTION!! ['tmp_name'] designe le chemin initiale de l'image !!!!! 
        if($retour){
            echo $Picture . '<br>';
        } 
    } 
//Fin !!!!!!!!!

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
        if(empty($Title) || empty($Years) || empty($Genre) || empty($Label) || empty($Price) || empty($Picture) ) // empty() --> Détermine si une variable est vide
        {
            echo $Erreur;
            die();
        } 
        else {
            $Title = secure($Title);
            $Years = secure($Years);
            $Genre = secure($Genre);
            $Label = secure($Label);
            $Price = secure($Price);
            $Picture = secure($Picture);
        }
    //Fin !!!!!!!!!!

//Fin !!!!!!!!!

// Insérer les données recupéré dans la bdd !!!!!!!!!!!!!!
    $sql = $db->prepare('INSERT INTO disc(disc_title, disc_year, disc_picture, disc_label, disc_genre, disc_price, artist_id) 
                        VALUES(:Title, :Years, :Picture, :Label, :Genre, :Price, :Artist)');
//Fin !!!!!!!!!!

//Sécurise les données !!!!!!!!!!!!!!!!!!!
    $sql -> bindParam(':Title', $Title);
    $sql -> bindParam(':Years', $Years);
    $sql -> bindParam(':Label', $Label);
    $sql -> bindParam(':Genre', $Genre);
    $sql -> bindParam(':Price', $Price);
    $sql -> bindParam(':Artist', $Artist);
    $sql-> bindParam(':Picture', $Picture);
//Fin !!!!!!!!!!!

//Execute l'insertion !!!!!!!!!!!!!!!!!!!
    $sql -> execute();
//Fin !!!!!!!!!!!!!

//Envoie à la page d'accueil après l'éxecution !!!!!!!!!
    header("Location: V_Record.php");
//Fin !!!!!!!!!


?>