<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
/*****************************************************************************************************************************************************/
echo "1. Ecrivez une fonction qui permette de générer un lien.<br><br>";


function lien(){
    $url = "https://www.reddit.com/";
    $title = "Reddit Hug";
    echo "<a href= $url > $title </a>";
};
lien();

echo "<hr>";
/******************************************************************************************************************************************************/
echo "2. Ecrivez une fonction qui calcul la somme des valeurs d'un tableau.<br><br>";

function calcule(){
    $tab = array(4, 3, 8, 2);
    print_r($tab);
    $resultat = array_sum($tab);
    echo "<p>Le résultat de la somme du tableau est  de : " . $resultat . "</p>";
};
calcule();

echo "<hr>";
/********************************************************************************************************************************************************/
echo "3. Créer une fonction qui vérifie le niveau de complexité d'un mot de passe. <br><br>";

$resultat = "TopSecret42";
echo "Mot de passe TEST : " . $resultat . "<br><br>";

function verif(){
    $resultat = "TopSecret42";
    $regex = "/^?=.*{8,})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$/";

    if ($resultat != $regex){
        echo '----> ' . true . ' True';
    } else {
        echo '----> ' . false . ' False';
    }

};
verif();

?>

</body>
</html>