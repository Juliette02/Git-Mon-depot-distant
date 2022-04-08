<?php 

include "db.php";

$db = ConnexionBase();

$requete = $db->prepare("SELECT * FROM disc  JOIN artist ON disc.artist_id = artist.artist_id  WHERE disc.disc_id=:id");
$requete->bindParam(':id', $_GET["disc_id"]);
$requete->execute();

$requete1 = $db->query("SELECT DISTINCT * FROM artist");

$tableau = $requete->fetch(PDO::FETCH_OBJ);
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

    <script type="text/javascript">
        function modif(form){
            if (confirm('Do you want to confirm the change?') === true){
                // alert('You have confirm !');
                return true;
            } else {
                // alert('You have canceled ! ');
                return false;
            }
        }
    </script>

</head>
<body style="background-image: url(backgro.jpg); background-repeat: repeat;">

<div class="container-fluid">

<h2 class="text-white"><strong>Modifier un Vinyle</strong></h2>

<form method="POST" action="script_disc_modif.php?disc_id=<?= $tableau->disc_id // Faire le lien pour l'ID du disc afin de le récupérer dans la script !!!!!! ?>" class="row" enctype="multipart/form-data">
    <div class="form-group col-12">
        <label class="text-white" for="Title">Title</label>
            <input type="text" class="form-control" id="Title" name="Title" value="<?= $tableau->disc_title ?>"><br>

        <label class="text-white" for="Artist">Artist</label>           
            <select class="form-control" id="Artist" name="Artist">
                <option value="<?= $tableau->artist_id ?>"><?= $tableau->artist_name ?></option>
                <?php foreach( $tableau1 as $artist ): ?>
                    <option value="<?= $artist->artist_id ?>"><?= $artist->artist_name ?></option>
                <?php endforeach; ?>
            </select><br>

        <label class="text-white" for="Year">Year</label>
            <input type="number" class="form-control" name="Year" id="Year" value="<?= $tableau->disc_year ?>"><br>

        <label class="text-white" for="Genre">Genre</label>
            <input type="text" class="form-control" name="Genre" id="Genre" value="<?= $tableau->disc_genre ?>"><br>

        <label class="text-white" for="Label">Label</label>
            <input type="text" class="form-control" name="Label" id="Label" value="<?= $tableau->disc_label ?>"><br>

        <label class="text-white" for="Price">Price (€)</label>
            <input type="number" class="form-control" name="Price" id="Price" value="<?= $tableau->disc_price ?>"><br>
    
        <label class="text-white" for="Picture">Picture</label><br>
        <input type="file" name="Picture" id="Picture">
        <div>
            <br>
            <img src="img/<?= $tableau->disc_picture ?>" class="card-img-right" style="max-width: 300px; height:auto;">
        </div>
    </div>

    <div class="col-12 pb-2">
    <button onclick="return modif(form)" class="btn btn-info">
        <?php 
            echo '<a href="script_disc_modif.php?disc_id='.$tableau->disc_id.'"onclick="modif(form);"></a>' 
        ?>
        Modifier</button>
        <!-- <input type="submit" class="btn btn-primary" name="Modifier" value="Modifier"> -->
        <a href="disc_detail.php?disc_id=<?= $tableau->disc_id ?>" class="btn btn-info" >Retour</a>
    </div>
</form>



</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>