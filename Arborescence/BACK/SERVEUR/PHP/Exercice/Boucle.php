<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<H1>Coucou</H1>
<?php 
    "1. Ecrire un script PHP qui affiche tous les nombres impairs entre 0 et 150, par ordre croissant : 1 3 5 7... : <br> </br>";

    $Chiffre = 0;

    for ($Chiffre = 0; $Chiffre <=150; $Chiffre++) {
        $Chiffre = $Chiffre + 1;
        echo " " . $Chiffre ;
    }

    echo "<br></br> 2. Écrire un programme qui écrit 500 fois la phrase Je dois faire des sauvegardes régulières de mes fichiers : <br> </br>";

    $Phrase = "Je dois faire des sauvegardes régulières de mes fichiers.";

    for ($Nbr = 1; $Nbr <= 500; $Nbr++ ){
        echo $Nbr . " " . $Phrase . "<br> </br>";
    }

    echo "3. Ecrire un script qui affiche la table de multiplication totale de {1,...,12} par {1,...,12} dans un tableau HTML, le résultat doit être le suivant : <br></br>";

    $NbrCol = 12;
    $NbrLgn = 12;

    echo '<table border="1" width="400">';
        echo '<tr>';
            echo '<td></td>';
                for($j=1; $j<=$NbrCol; $j++){
                    echo '<td>' . $j . '</td>';
                }
        echo '</tr>';
        for ($i=1; $i<=$NbrLgn; $i++){
            echo '<tr>';
            for ($j=1; $j<= $NbrCol; $j++){
                if ($j==1){
                    echo '<td>' . $i . '</td>';
                }
                if ($i==$j){
                    echo '<td>';
                } else {
                    echo '<td>';
                }
                echo $i*$j;
                echo '</td>';
            }
            echo '</tr>';
            $j=1;
        }
    echo '</table>';
?>





</body>
</html>