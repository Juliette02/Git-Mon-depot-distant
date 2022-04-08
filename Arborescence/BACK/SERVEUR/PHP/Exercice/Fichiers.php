<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php

echo "Lecture d'un fichier : <br><br>";

$f = file("https://ncode.amorce.org/ressources/Pool/MS_FULL_STACK/PHP/src/liens.txt");

foreach($f as $f){
echo $f . '<br>';
}

/* Lecture d'un fichier : 
    - On utilise ||'file()'|| pour récupérer le fichiers 
    - Qu'on affiche avec la fonction ||'foreach()'||
*/

echo "<hr>";

echo "Récupération d'un fichier distant : <br><br>";

$F = file("customers.csv"); // RECUPERE UN FICHIER EXTERNE AU CODE 
$utilisateurs = []; // CREATION D'UN TABLEAU POUR RECUPERER LES DONNER SUPRIMER DANS LA BOUCLE foreach() ! 

foreach($F as $F){
    // echo $F . "<br>";
    $utilisateur = explode(",", $F); // explode() => DECOUPE CHAQUE LIGNE POUR LA METTRE EN FORME DE TABLEAU 
    $L = print_r($utilisateur); // AFFICHE LE TABLEAU 
    array_push($utilisateurs, $utilisateur); // CREER UN NOUVEAU TABLEAU CAR L'ANCIEN SECRASE DANS LA BOUCLE
    echo "<br>";
    }

/* Récupération d'un fichiers distant pour afficher dans un tableau HTML : 
    - On utilise ||'file()'|| pour récupérer le fichiers 
    - Qu'on affiche avec la fonction ||'foreach()'||
    - Puis on découpe le fichiers avec ||'explode()'||
    - Qu'on récrupère dans un nouveau tableau pour l'AFFICHER dans un tableau HTML !!!!!
*/
echo "<hr>";
?>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Surname</th>
            <th>Firstname</th>
            <th>Email</th>
            <th>Phone</th>
            <th>City</th>
            <th>State</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($utilisateurs as $utilisateur): ?> <!-- Ouverture de la boucle qui lis le tableau récupérer -->
            
            <tr>
                <th><?= $utilisateur[0] ?></th>
                <th><?= $utilisateur[1] ?></th>
                <th><?= $utilisateur[2] ?></th>
                <th><?= $utilisateur[3] ?></th>
                <th><?= $utilisateur[4] ?></th>
                <th><?= $utilisateur[5] ?></th>
            </tr>
        <?php endforeach ?> <!-- Fermeture de la boucle -->
    <tbody>
</table>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>