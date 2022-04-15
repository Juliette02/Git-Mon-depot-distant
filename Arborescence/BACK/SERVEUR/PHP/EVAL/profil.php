<?php

include "db1.php";

$db1 = ConnexionBase();

$requete = $db1->query('SELECT * FROM inscrit WHERE inscrit.id = :id');

$tableau = $requete->fetchAll(PDO::FETCH_OBJ);

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

<h2 class="text-white"><strong>Profil</strong></h2>

<form method="POST" action="script_disc_delete.php" class="row">
    <div class="group col-6">
        <label class="text-white" for="Nom">Nom</label>
            <input type="text" class="form-control" id="Nom" placeholder="<?= $tableau->Nom ?>" readonly><br>
    </div>
    <div class="form-group col-6">
        <label class="text-white" for="Artist">Artist</label>
            <input type="text" class="form-control" name="Artist" id="Artist" placeholder="<?= $tableau->Prenom ?>" readonly><br>
    </div>
    <div class="grom-group col-6">
        <label class="text-white" for="Year">Year</label>
            <input type="text" class="form-control" name="Year" id="Year" placeholder="<?= $tableau->mail ?>" readonly><br>
    </div>
    <div class="form-group col-6">
        <label class="text-white" for="Genre">Genre</label>
            <input type="text" class="form-control" name="Genre" id="Genre" placeholder="<?= $tableau->mdp ?>" readonly><br>
    </div>
    <div class="col-6">
        <label class="text-white" for="Picture">Picture</label><br>
        <img src="img/<?= $tableau->img ?>" class="card-img-right" style="max-width: 250px; height:auto;">
    </div>

    <div class="pb-5 col-12">
        <br>
        <a href="disc_form.php?disc_id=<?= $tableau->disc_id ?>" class="btn btn-info">Modifier</a>
        <button onclick="return deletes(form)" class="btn btn-info">
        <?php 
            echo '<a href="script_disc_delete.php?disc_id='.$tableau->id.'" "onclick="deletes(form);"></a>' 
        ?>
        Supprimer</button>
        <a href="V_Record.php" class="btn btn-info" >Retour</a>
    </div>
</form>



</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html>