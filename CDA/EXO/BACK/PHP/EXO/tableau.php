<?php
$table = array('Janvier'=>31,
                'Février'=>28,
                'Mars'=>31,
                'Avril'=>30,
                'Mai'=>31,
                'Juin'=>30,
                'Juillet'=>31,
                'Août'=>31,
                'Septembre'=>30,
                'Octobre'=>31,
                'Novembre'=>30,
                'Décembre'=>31
            );
asort($table);

// foreach($table as $Mois => $jours){
//     echo $Mois . ' = ';
//     echo $jours . "<br />";
// }

// echo '<hr>';

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


// foreach($capitales as $capitale => $pays){
//     echo 'Capitale : ' . $capitale . ' -> Pays : ' . $pays . '<br>';
// };

// echo '<br> <p class="offset-4"> Il y a ' .  '<strong>'.count($capitales).'</strong>' . ' pays dans le tableau ! <br>';

// foreach($capitales as $capitale => $pays){
//     // var_dump(substr($pays, 0, 1) );
//     if( substr($capitale, 0, 1) != "B" ){
//         echo $capitale . ' = ' . $pays . '<br>';
//     };
// };


$departements = array(
    "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
    "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
    "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
    "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
);


// foreach($departements as $departement => $region){
//     echo $departement . '<br>';
//     foreach($region as $regions){
//         asort($region);
//         echo '      ' .  count($region) . '<br>';
//     };
// }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <h1 class="offset-4 col-4">Exercice sur les <strong>tableaux</strong> PHP !</h1>
    </div>
    <div class="p-2 row">
        <div class="col-1">
            <table class="table">
                <thead>
                    <th scope="col">Mois</th>
                    <th scope="col">Jours</th>
                </thead>
            <?php foreach($table as $Mois => $jours): ?>
                <tbody>
                    <tr>
                        <td scope="row"><?= $Mois ?></td>
                        <td><?= $jours ?></td>
                    </tr>
                </tbody>
            <?php endforeach; ?>
            </table>
        </div>
        <div class="offset-1 col-2">
            <table class="table table-secondary">
                <thead>
                    <th scope="col">Capitales</th>
                    <th scope="col">Pays</th>
                </thead>
            <?php ksort($capitales); foreach($capitales as $capitale => $pays): ?>
                <tbody>
                    <tr>
                        <td scope="row"><?= $capitale ?></td>
                        <td><?= $pays ?></td>
                    </tr>
                </tbody>
            <?php endforeach; ?>
            </table>
        </div>
        <div class="offset-1 col-2">
            <table class="table table-primary">
            <legende >Il y a <strong><?= count($capitales) ?></strong> pays dans le tableau !</legende>
                <thead>
                    <th scope="col">Pays</th>
                    <th scope="col">Capitales</th>
                </thead>
            <?php asort($capitales); foreach($capitales as $capitale => $pays): ?>
                <tbody>
                    <tr>
                        <td scope="row"><?= $pays ?></td>
                        <td><?= $capitale ?></td>
                    </tr>
                </tbody>
            <?php endforeach; ?>
            </table>
        </div>
        <div class="offset-1 col-1">
            <table class="table table-success">
                <thead>
                    <th scope="col">Capitales</th>
                    <th scope="col">Pays</th>
                </thead>
            <?php asort($capitales); foreach($capitales as $capitale => $pays): if( substr($capitale, 0, 1) == "B" ): ?>
                <tbody>
                    <tr>
                        <td scope="row"><?= $capitale ?></td>
                        <td><?= $pays ?></td>
                    </tr>
                </tbody>
            <?php endif; endforeach; ?>
            </table>
        </div>
        <div class="offset-1 col-1">
            <table class="table table-info">
                <thead>
                    <th scope="col">Capitales</th>
                    <th scope="col">Pays</th>
                </thead>
            <?php asort($capitales); foreach($capitales as $capitale => $pays): if( substr($capitale, 0, 1) != "B" ): ?>
                <tbody>
                    <tr>
                        <td scope="row"><?= $capitale ?></td>
                        <td><?= $pays ?></td>
                    </tr>
                </tbody>
            <?php endif; endforeach; ?>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <table class="table table-warning">
                <thead>
                    <th scope="col">Departements</th>
                    <th scope="col">Regions</th>
                </thead>
            <?php foreach($departements as $departement => $region): ?>
                <tbody>
                    <tr>
                        <td><?= $departement ?></td>
                        <?php asort($region); foreach($region as $regions): ?>
                        <td><?= $regions ?></td>
                        <?php  endforeach; ?>
                        <td><?= count($region) ?></td>
                    </tr>
                </tbody>
            <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>