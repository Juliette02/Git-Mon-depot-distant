<?php 

include 'db1.php';

$db1 = ConnexionBase1();

$requete1 = $db1->query("SELECT * FROM inscrit");

$tableau1 = $requete1->fetchAll(PDO::FETCH_OBJ);

$requete1->closeCursor();

session_start();

if(isset($_POST['Deco'])){
    session_unset();
    session_destroy();
    header('Location: V_Record.php');
    exit;
};

include "db.php";

$db = ConnexionBase();

$requete = $db->query("SELECT * FROM disc
                        JOIN artist ON disc.artist_id = artist.artist_id");

$tableau = $requete->fetchAll(PDO::FETCH_OBJ);
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

<div class="container-fluid" style="background-image: url(backgro.jpg); background-repeat: repeat;">


<div class="alert alert-info alert-dismissible fade show" role="alert">
    Hello <strong> <?php  if (isset($_SESSION['Login'])){ echo $_SESSION['Login'];}; ?> </strong>! Welcome to the Velvet Record !
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
</div>

<div class="form-inline row">
    <div class="col-5">
        <h1 class="text-white"><strong>Liste des disques (
            <?php 
                $count = $db->query("SELECT count(disc_id) as nb FROM disc"); // Lance ma requete sql dans une variable php !
                $COUNT = $count->fetch(); //fetch() va chercher le resultat de ma requete !
                $nb = $COUNT['nb']; // j'appelle ma requete dans une variable !
                echo $nb; // j'affiche ma requete !
                $count->closeCursor(); // je ferme la requet lancer !
            ?>
            )</strong></h1>
    </div>

    <form method="post" class="offset-4 col-3">

        <?php if (isset($_SESSION['Login'])){ ?>
                <a href="disc_new.php" class="btn btn-info btn-sm">Ajouter</a>
            <?php foreach($tableau1 as $inscrit): ?>
                <a href="profil.php?id=<?= $inscrit->id ?>" class="btn btn-info btn-sm">Profil</a>
            <?php endforeach; ?>
                <input type="submit" name="Deco" class="btn btn-info btn-sm" value="Déconnexion"></input>
            <?php } else { ?>
                <a href="login_form.php" class="btn btn-info btn-sm">Connexion</a>
                <a href="login_inscription.php" class="ml-2 btn btn-info btn-sm">S'inscrire</a>
            <?php }
        ?>

    </form>
</div>

<div class="row m-0">

    <?php foreach($tableau as $disc): ?>

        <div class=" mb-2 ml-4 border-0 col-6" style="max-width: 700px; height:auto;">
            <div class="row hover-shadow">
                <img src="img/<?= $disc->disc_picture ?>" class="img-right img-thumbnail" style="max-width: 250px; height:auto;">
                    <div class="ml-3">
                        <p><h4><strong class="text-white"><?= $disc->disc_title ?></strong></h4>
                        <strong class="text-white"><?= $disc->artist_name ?></strong><br></p>
                        <p class="text-white"><strong class="text-white">Label :</strong> <?= $disc->disc_label ?><br>
                        <strong class="text-white">Year :</strong> <?= $disc->disc_year?><br>
                        <strong class="text-white">Genre :</strong> <?= $disc->disc_genre ?></p>
                        <?php 
                            if(isset($_SESSION['Login'])){ 
                        ?>
                            <a href="disc_detail.php?disc_id=<?= $disc->disc_id ?>" class="btn btn-info btn-sm">Détail</a>
                        <?php
                            }
                        ?>
                    </div>
            </div>
        </div>
        
    <?php endforeach; ?> 

</div>

</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>