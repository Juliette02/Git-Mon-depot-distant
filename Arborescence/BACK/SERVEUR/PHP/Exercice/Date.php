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

echo "Trouvez le numéro de semaine de la date suivante : 14/07/2019. <br><br>";

$date = "2019/07/14"; // ATTENTION SI ON NOTE LA DATE : 14/07/2019 LA FONCTION NE FONCTIONNE PAS EST RETOURNE '01' COMME RESULTAT !!!!
$dateForm = strtotime($date);
echo date('W', $dateForm) . "<br><br>"; //'W' retourne les semaines de l'années !

echo "<hr>";
/***************************************************************************************************************************************************************/
echo "Combien reste-t-il de jours avant la fin de votre formation ? <br><br>";

$date1 = date('d-m-Y', time());
echo 'Date du jour : ' . $date1 . '<br>';
$date2 = '25-03-2022';
echo 'Date de fin de formation : ' . $date2 . '<br><br>';

$date3 = strtotime($date1);
$date4 = strtotime($date2);

$nbrJ = $date4 - $date3;

$nbrJs = $nbrJ/86400; // 86 400 = 60*60*24
if ($nbrJs >= 0) {
echo 'Il me reste ' . $nbrJs . ' jours en formation ! ';
} else {
echo 'La formation est fini ! ';
};

echo '<hr>';
/******************************************************************************************************************************************************************/

echo 'Comment déterminer si une année est bissextile ? <br><br>';

function bissextile($annee){
if ((is_int($annee/4) && !is_int($annee/100)) || (is_int($annee/400))){
    return true;
} else {
    return false;
};
};
// INITIALISER UNE FONCTION QUI CALCULE SI L'ANNEE EST BISSEXTILE EN VERIFIANT SI ELLE EST DIVISIBLE PAR 4 ET PAS PAR 100 OU PAR 400 ! 
// ELLE RETOURNERA 1 SI L'ANNEE EST BISSEXTILE ET 0 SI ELLE NE L'EST PAS !! 

$aa = 1900;
echo "Pour savoir si une année est bissextile, il surffit de pouvoir la diviser par 4 mais pa par 100 où de la divisée par 400 ! <br><br>
        Tableau des années bisextile : <br><br>";

for ($aa; $aa<=date("Y"); $aa++){
    if (bissextile($aa)){
        echo $aa . ' : Bissextile. <br>';
    };
};
// CREER UNE BOUCLE -FOR- POUR INITIALISER UN TABLEAU QUI PREND EN COMPTE LA FONCTION PRECEDENTE TOUT EN CREANT UN TABLEAU QUI NOTE LES ANNEES BISSEXTILE ! 

echo '<hr>';
/*******************************************************************************************************************************************************************/

echo 'Montrez que la date du 32/17/2019 est erronée. <br><br>';

$date = DateTime::createFromFormat("d-m-Y H:i:s", "32-17-2019 03:42:11"); 
$errors = DateTime::getLastErrors();

if ($errors["error_count"]>0 || $errors["warning_count"]>0){
    echo 'Date érronnée ! ';
} else {
    echo 'Date bonne ! ';
};

echo '<hr>';
/********************************************************************************************************************************************************************/

echo 'Affichez l\'heure courante sous cette forme : 11h25. <br><br>';

echo date('H:i');

echo '<hr>';
/********************************************************************************************************************************************************************/

echo 'Ajoutez 1 mois à la date courante.  <br><br>';

$date = date('d-m-Y', time());
echo 'Date du jours : ' . $date . '<br>';

$date1 = date('d-m-Y', strtotime(($date).'+1 month'));
echo 'Date avec 1 mois en plus : ' . $date1;

echo '<hr>';
/*********************************************************************************************************************************************************************/

echo 'Que s\'est-il passé le 1000200000 ? <br><br>';

$date = date('d-m-Y H:i:s', 1000200000);
echo "La Date est " .  $date; 

?>



</body>
</html>