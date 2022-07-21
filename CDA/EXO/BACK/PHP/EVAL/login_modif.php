<?php 

include "db1.php";

$db1 = ConnexionBase1();

$requete = $db1->prepare("SELECT * FROM inscrit WHERE id=:id");
$requete->bindParam(':id', $_GET["id"]);
$requete->execute();

$tableau = $requete->fetch(PDO::FETCH_OBJ);
//var_dump($tableau);

$requete->closeCursor();


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-image: url(backgro.jpg); background-repeat: repeat;">

<div class="container-fluid">


<form method="POST" action="script_login_modif.php?id=<?= $tableau->id // Faire le lien pour l'ID de la personne connecter afin de le récupérer dans la script !!!!!! ?>" class="row" enctype="multipart/form-data">
    <div class="form-group offset-3 col-6 pt-5">

        <legend class="bg-info text-center text-white font-weight-bold rounded"> Modifier le Profil </legend><br>

        <div class="text-center">
            <label class="text-white" for="Picture">Image</label><br>
            <img src="img.log/<?= $tableau->img ?>" class=" rounded-circle" style="max-width: 400px; height:auto;"><br><br>
            <input type="file" class="text-white" name="Picture" id="Picture">
        </div>

        
        <label class="text-white" for="Nom">Nom</label>
            <input type="text" class="form-control" name="Nom" id="Nom" value="<?= $tableau->Nom ?>"><br>
        

        <label class="text-white" for="Prenom">Prenom</label>
            <input type="text" class="form-control" name="Prenom" id="Prenom" value="<?= $tableau->Prenom ?>"><br>

        <label class="text-white" for="Mail">Mail</label>
            <input type="text" class="form-control" name="Mail" id="Mail" value="<?= $tableau->Mail ?>"><br>

        <label class="text-white" for="mdp">Mot de passe : </label>
            <input type="password" class="form-control" id="mdp" name="mdp" value=""><br>

    <div class="col-12 pb-2">
    <button onclick="return modif(form)" class="btn btn-info">
        <?php 
            echo '<a href="script_login_modif.php?id='.$tableau->id.'"onclick="modif(form);"></a>' 
        ?>
        Modifier</button>
        <!-- <input type="submit" class="btn btn-primary" name="Modifier" value="Modifier"> -->
        <a href="profil.php?id=<?= $tableau->id ?>" class="btn btn-info" >Retour</a>
    </div>
</form>



</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="confirm_modif.js"></script>

</body>
</html>