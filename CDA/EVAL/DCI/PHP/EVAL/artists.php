<?php

    // on importe le contenu du fichier "db.php"
    include "db.php";
                    //   l'instruction ||   include   || , qui permet d'importer le contenu d'un fichier.   //

    // on exécute la méthode de connexion à notre BDD
    $db = connexionBase();   
                    // la connexion créée avec notre méthode || connexionBase() || est stockée dans la variable $db (qui récupère l'objet PDO renvoyé avec return $connexion;)  //

    // on lance une requête pour chercher toutes les fiches d'artistes
    $requete = $db->query("SELECT * FROM artist");
                    //  la requête SELECT en BDD est lancée grâce à la méthode ||   query()  || de l'objet PDO et la réponse de la BDD est stocké dans la variable $requete   //

    // on récupère tous les résultats trouvés dans une variable
    $tableau = $requete->fetchAll(PDO::FETCH_OBJ);
        // en haut de page, avec la requête : (pour visualiser le contenu de vos variables, utilisez la méthode ||  var_dump()  || :) 
        var_dump($tableau);
                    //   la méthode ||  fetchAll()  || extrait les enregistrements trouvés et les renvoie sous forme de tableau d'objets, dans la variable $tableau   //

    // on clôt la requête en BDD
    $requete->closeCursor();
                    //   la méthode ||  closeCursor(); || libère la requête, pour pouvoir en lancer d'autres   //

?>



<!-- ... après le bloc PHP : -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>PDO - Liste</title>
</head>
<body>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Nom</th>
        </tr>

        <?php foreach ($tableau as $artist): ?>

        <?php var_dump($artist); // Le var_dump() est écrit à titre informatif ?>
        <tr>
            <td><?= $artist->artist_id ?></td>
            <td><?= $artist->artist_name ?></td>
        </tr>

        <?php endforeach; ?>

        <!-- Dans ce code,

    -   la variable -$artist- contient, à chaque itération de la boucle foreach, un objet correspondant à un enregistrement d'artiste en BDD
    -   pour accéder aux propriétés d'un artiste (= colonnes de la table artist en BDD), 
        il faut utiliser la syntaxe ||   objetBDD->nomdelacolonne ; || ici, on essaie donc de lire l'ID, et le nom de notre artiste !!!!!

        -->

    </table>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>