<?php

include "db1.php";

$db1 = ConnexionBase1();

$requete = $db1->prepare('SELECT * FROM inscrit WHERE id = :id');
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
<body>

<body style="background-image: url(backgro.jpg); background-repeat: repeat;">
<div class="container-fluid">

<form method="POST" action="script_disc_delete.php?id=<?= $tableau->id ?>" class="row">

    <legend class="mt-3 offset-4 col-4 bg-info text-center text-white font-weight-bold rounded"> Profil </legend><br>

    <div class="col-6 text-center">
        <label class="text-white" for="Picture">Image</label><br>
        <img src="img.log/<?= $tableau->img ?>" class=" rounded-circle" style="max-width: 400px; height:auto;">
    </div>
    <div class="form-group mt-5 col-4">
        <label class="text-white" for="Nom">Nom</label>
            <input type="text" class="form-control" name="Nom" id="Nom" placeholder="<?= $tableau->Nom ?>" readonly><br>

        <label class="text-white" for="Prenom">Prenom</label>
            <input type="text" class="form-control" name="Prenom" id="Prenom" placeholder="<?= $tableau->Prenom ?>" readonly><br>

        <label class="text-white" for="Mail">Mail</label>
            <input type="text" class="form-control" name="Mail" id="Mail" placeholder="<?= $tableau->Mail ?>" readonly><br>
    </div>


    <div class="pb-5 offset-5 col-4">
        <br>
        <a href="login_modif.php?id=<?= $tableau->id ?>" class="btn btn-info">Modifier</a>
        <button onclick="return deletes(form)" class="btn btn-info">
        <?php 
            echo '<a href="script_login_delete.php?id='.$tableau->id.'" "onclick="deletes(form);"></a>' 
        ?>
        Supprimer</button>
        <a href="V_Record.php" class="btn btn-info" >Retour</a>
    </div>
</form>



</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="confirm_delete.js"></script>

</body>
</html>