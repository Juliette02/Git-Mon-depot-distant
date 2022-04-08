<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tableaux</h1>

<?php
    /*$Mois = 12;
    $Jours_Mois = 12;
    
    echo '<table border="1" width="400">';
        echo '<tr>';
                for ($i=1; $i<=$Mois; $i++) {
                    echo '<td>' . $i . '</td>';
                }
        echo '</tr>';
    echo '</table>';*/

$Année = array("Janvier" => 31,
    "Février" =>28,
    "Mars" => 31, 
    "Avril" => 30, 
    "Mai" => 31, 
    "Juin" => 30, 
    "Juillet" => 31, 
    "Août" => 31, 
    "Septembre" => 30, 
    "Octobre" => 31, 
    "Novembre" => 30, 
    "Decembre" => 31
);
asort($Année);

foreach ($Année as $Mois => $jours){
    echo $Mois . " = " . $jours . "<br />";
}

echo "<hr>";

$capitales = array(
    "Bucarest" => "Roumanie",
    "Bruxelles" => "Belgique",
    "Oslo" => "Norvège",
    "Ottawa" => "Canada",
    "Paris" => "France",
    "Port-au-Prince" => "Haïti",
    "Port-d'Espagne" => "Trinité-et-Tobago",
    "Prague" => "République tchèque",
    "Rabat" => "Maroc",
    "Riga" => "Lettonie",
    "Rome" => "Italie",
    "San José" => "Costa Rica",
    "Santiago" => "Chili",
    "Sofia" => "Bulgarie",
    "Alger" => "Algérie",
    "Amsterdam" => "Pays-Bas",
    "Andorre-la-Vieille" => "Andorre",
    "Asuncion" => "Paraguay",
    "Athènes" => "Grèce",
    "Bagdad" => "Irak",
    "Bamako" => "Mali",
    "Berlin" => "Allemagne",
    "Bogota" => "Colombie",
    "Brasilia" => "Brésil",
    "Bratislava" => "Slovaquie",
    "Varsovie" => "Pologne",
    "Budapest" => "Hongrie",
    "Le Caire" => "Egypte",
    "Canberra" => "Australie",
    "Caracas" => "Venezuela",
    "Jakarta" => "Indonésie",
    "Kiev" => "Ukraine",
    "Kigali" => "Rwanda",
    "Kingston" => "Jamaïque",
    "Lima" => "Pérou",
    "Londres" => "Royaume-Uni",
    "Madrid" => "Espagne",
    "Malé" => "Maldives",
    "Mexico" => "Mexique",
    "Minsk" => "Biélorussie",
    "Moscou" => "Russie",
    "Nairobi" => "Kenya",
    "New Delhi" => "Inde",
    "Stockholm" => "Suède",
    "Téhéran" => "Iran",
    "Tokyo" => "Japon",
    "Tunis" => "Tunisie",
    "Copenhague" => "Danemark",
    "Dakar" => "Sénégal",
    "Damas" => "Syrie",
    "Dublin" => "Irlande",
    "Erevan" => "Arménie",
    "La Havane" => "Cuba",
    "Helsinki" => "Finlande",
    "Islamabad" => "Pakistan",
    "Vienne" => "Autriche",
    "Vilnius" => "Lituanie",
    "Zagreb" => "Croatie"
);
asort($capitales);

foreach ($capitales as $pays => $ville){
    echo $ville . " = " . $pays . "<br>"; 
}

echo "<br> Le tableau contient " . count($capitales) . " pays ! <br>";
echo "<br>";

foreach ($capitales as $pays => $ville){
    //var_dump(substr($pays, 0, 1) );
    if( substr($pays, 0, 1) != "B" ){
        unset($capitales[$pays]);
    } else {
    echo $ville . " = " . $pays . "<br>";
    };
};


/*foreach ($capitales as $pays => $ville){
    //var_dump(substr($pays, 0, 1) );
    if( substr($pays, 0, 1) != "B" ){
        echo $ville . " = " . $pays . "<br>";
    } else {
        unset($capitales[$pays]);
    };
};*/
//var_dump($capitales);



echo "<hr>";

$departements = array(
    "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
    "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
    "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
    "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
);

/*print_r($departements) ;*/

/*sort($departements);                      <-----                  */                       //!!!!!!!!!!!!!NE PAS TRIER 2 FOIS !!!!!!!!!!!

foreach($departements as $dep => $regions){
    asort($regions);               //       <-----                                             !!!!!!!!!!!!!NE PAS TRIER 2 FOIS !!!!!!!!!!!
    echo $dep;
    foreach ($regions as $dpmnts){
        
        echo"<pre>";
        echo $dpmnts;
        echo"</pre>";
    };
};

foreach($departements as $dep => $regions){
    asort($regions);
    echo $dep . " = " . count($regions) . "<br>";
}

?>
</body>
</html>