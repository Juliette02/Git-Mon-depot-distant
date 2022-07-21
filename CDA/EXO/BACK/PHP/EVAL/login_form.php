<?php
    session_start();

include "db1.php";

$db1 = ConnexionBase1();

$requete = $db1->query('SELECT * FROM inscrit');

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

    <?php
    if (isset($_SESSION["erreur"])) { ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= $_SESSION["erreur"] ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php }; ?>

    <!-- <script type="text/javascript">
        function deletes(form){
            if(confirm('Do you want to confirm the deletion?') === true){
                // alert('You have confirm ! '); // retourner un booléen pour que la function() fonctionne (true or false) !!!!!!!!!!!!!  
                return true;
            } else {
                // alert('You have canceled ! ');
                return false;
            };
        }
    </script> -->

</head>
<body style="background-image: url(backgro.jpg); background-repeat: repeat;">
<div class="container">

<form method="POST" action="login_script.php" class="row align-center">
    <div class="form-group offset-4 col-4 pt-5">
    
        <legend class="bg-info text-center text-white font-weight-bold rounded"> Utilisateur </legend><br>

        <label class="text-white" for="Mail">Mail : </label>
            <input type="mail" class="form-control" id="Mail" name="Mail" placeholder="Mail..."><br>
        <label class="text-white" for="mdp">Mot de passe : </label>
            <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Mot de passe..."><br>

        <input type="submit" class="btn btn-info" id="inscrit" name="inscrit" value="Se connecter">
        <!-- <button onclick="return deletes(form)" class="btn btn-info">
        <a href="script_login_delete.php" onclick="deletes(form);"></a>
        Supprimer</button> -->
        <a href="V_Record.php" class="btn btn-info" >Retour</a>

    </div>
</form>
    

</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html>