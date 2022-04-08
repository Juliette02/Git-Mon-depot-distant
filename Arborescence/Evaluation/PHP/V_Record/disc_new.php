<?php 

include "db.php";

$db = ConnexionBase();

$requete = $db->query("SELECT * FROM disc");
$requete1 = $db->query("SELECT DISTINCT * FROM artist");

$tableau = $requete->fetchAll(PDO::FETCH_OBJ);
//var_dump($tableau);
$tableau1 = $requete1->fetchAll(PDO::FETCH_OBJ);

$requete->closeCursor();
$requete1->closeCursor();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-image: url(backgro.jpg); background-repeat: repeat;">

<div class="container-fluid">

<h2 class="text-white"><strong>Ajouter un vinyle</strong></h2>

<form method="POST" action="script_disc_ajout.php" id="Form" enctype="multipart/form-data">
    <div class="form-group">
        <label class="text-white" for="Title">Title</label>
            <input type="text" class="form-control" name="Title" id="Title" placeholder="Enter title"><br>
                <p class="erreur" id="E1" style="color : red"></p>
        <label class="text-white" for="Artist">Artist</label>
            <select class="form-control" id="Artist" name="Artist">
                <?php foreach( $tableau1 as $artist ): ?>
                    <option value="<?= $artist->artist_id ?>"><?= $artist->artist_name ?></option>
                <?php endforeach; ?>
            </select><br>
            <p class="erreur" id="E2" style="color : red"></p>
        <label class="text-white" for="Year">Year</label>
            <input type="number" class="form-control" name="Year" id="Year" placeholder="Enter year"><br>
                <p class="erreur" id="E3" style="color : red"></p>
        <label class="text-white" for="Genre">Genre</label>
            <input type="text" class="form-control" name="Genre" id="Genre" placeholder="Enter genre (Rock, Pop, Prog...) "><br>
                <p class="erreur" id="E4" style="color : red"></p>
        <label class="text-white" for="Label">Label</label>
            <input type="text" class="form-control" name="Label" id="Label" placeholder="Enter label (EMI, Warner, PolyGram, Univers sale ...) "><br>
                <p class="erreur" id="E5" style="color : red"></p>
        <label class="text-white" for="Price">Price</label>
            <input type="number" class="form-control" name="Price" id="Price"><br>
                <p class="erreur" id="E6" style="color : red"></p>


        <label class="text-white" for="Picture">Picture</label><br>
            <input type="file" name="Picture" id="Picture">
                <p class="erreur" id="E7" style="color : red"></p>
    </div>
    <br>
    <div class="pb-5 col-12">
        <input TYPE="submit" id="Id_1" class="btn btn-info" NAME="ajouter" VALUE="Ajouter">
        <a href="V_Record.php" class="btn btn-info" >Retour</a>
    </div>

</form>

    <p id="envoie" style="color : green"></p>   

</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="alert.js"></script>

</body>
</html>