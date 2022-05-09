<?php 

include "db.php";

$db = ConnexionBase();

$requete = $db->prepare("SELECT * FROM disc  JOIN artist ON disc.artist_id = artist.artist_id  WHERE disc.disc_id=:id");
$requete->bindParam(':id', $_GET["disc_id"]);
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

<h2 class="text-white"><strong>Détails</strong></h2>

<form method="POST" action="script_disc_delete.php?disc_id=<?= $tableau->disc_id ?>" class="row">
    <div class="group col-6">
        <label class="text-white" for="Title">Title</label>
            <input type="text" class="form-control" id="Title" placeholder="<?= $tableau->disc_title ?>" readonly><br>
    </div>
    <div class="form-group col-6">
        <label class="text-white" for="Artist">Artist</label>
            <input type="text" class="form-control" name="Artist" id="Artist" placeholder="<?= $tableau->artist_name ?>" readonly><br>
    </div>
    <div class="grom-group col-6">
        <label class="text-white" for="Year">Year</label>
            <input type="text" class="form-control" name="Year" id="Year" placeholder="<?= $tableau->disc_year ?>" readonly><br>
    </div>
    <div class="form-group col-6">
        <label class="text-white" for="Genre">Genre</label>
            <input type="text" class="form-control" name="Genre" id="Genre" placeholder="<?= $tableau->disc_genre ?>" readonly><br>
    </div>
    <div class="form-group col-6">
        <label class="text-white" for="Label">Label</label>
            <input type="text" class="form-control" name="Label" id="Label" placeholder="<?= $tableau->disc_label ?>" readonly><br>
    </div>
    <div class="form-group col-6">
        <label class="text-white" for="Price">Price (€)</label>
            <input type="text" class="form-control" name="Price" id="Price" placeholder="<?= $tableau->disc_price ?>" readonly><br>
    </div>
    <div class="col-6">
        <label class="text-white" for="Picture">Picture</label><br>
        <img src="img/<?= $tableau->disc_picture ?>" class="card-img-right" style="max-width: 250px; height:auto;">
    </div>

    <div class="pb-5 col-12">
        <br>
        <a href="disc_form.php?disc_id=<?= $tableau->disc_id ?>" class="btn btn-info">Modifier</a>
        <button onclick="return deletes(form)" class="btn btn-info">
        <?php 
            echo '<a href="script_disc_delete.php?disc_id='.$tableau->disc_id.'"onclick="deletes(form);"></a>' 
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