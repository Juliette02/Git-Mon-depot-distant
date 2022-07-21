<?php 

require 'Employer.class.php';
require 'Magasins.class.php';

$e = new Employe();
$e->setInfo('Yuri','Lilia','06-05-2010','Infomatique',18000,'Developpeuse', 2, '12,2');
$m = new Magasins();

// var_dump($e);

echo '<br>Nom : ' . $e->getNom() . 
'<br>Prenom : ' . $e->getPrenom() . 
'<br>Poste : ' . $e->getPoste() . 
'<br>Service : ' . $e->getService() .
'<br> Magasins : ' . $m->Nom1 .
'<br> Adresse du magasins : ' . $m->Adresse1 . ', ' . $m->CodePostal1 . ' ' . $m->Ville1 .
'<br>Salaire Annuel Brut: ' . $e->getSalaire() . ' €' .
'<br>Date d\'embauche : ' . $e->getDateEmb() . 
'<br>Année(s) d\'anciennetée(s) : ' . $e->Anciennete() .
'<br> Nombre d\'enfant(s) : ' . $e->getEnfant() . 
'<br> Age de ou des Enfant(s) : ' . $e->getAge() .
'<br>' . $e->Droit() . 
'<br>Chèque(s) de : ' . $e->Noël();

var_dump($e->getAge());

var_dump($e->Noël());

// var_dump($e->Anciennete());
echo '<br><br>Prime de fin d\'année : ' . $e->Prime();

echo '<br>' . $e->Transfere();

echo '<br> Plus d\'un an d\'ancienneté : ' . $e->Vacance();

// echo '<br>' . $m->modeResto();

echo '<br>' . $m->Restauration();

// var_dump($m->Restauration());


echo '<hr>';

$m = new Employe();
$m->setInfo('Kali', 'Kaname', '02-03-2022', 'Informatique', 13800, 'Programmeur', 0, '0');
$a = new Magasins();

echo '<br>Nom : ' . $m->getNom() . 
'<br>Prenom : ' . $m->getPrenom() . 
'<br>Poste : ' . $m->getPoste() . 
'<br>Service : ' . $m->getService() .
'<br> Magasins : ' . $a->Nom2 .
'<br> Adresse du magasins : ' . $a->Adresse2 . ', ' . $a->CodePostal2 . ' ' . $a->Ville2 .
'<br>Salaire Annuel Brut: ' . $m->getSalaire() . ' €' .
'<br>Date d\'embauche : ' . $m->getDateEmb() .
'<br>Année(s) d\'anciennetée(s) : ' . $m->Anciennete() .
'<br> Nombre d\'enfant(s) : ' . $m->getEnfant() . 
'<br> Age de ou des Enfant(s) : ' . $m->getAge() . 
'<br>' . $m->Droit() . '<br>Chèque(s) de : ' . $m->Noël();

// var_dump($m->getAge());

// var_dump($m->Noël());


// var_dump($e->Anciennete());
echo '<br><br>Prime de fin d\'année : ' . $m->Prime();

echo '<br>' . $m->Transfere();

echo '<br> Plus d\'un an d\'ancienneté : ' . $m->Vacance();


echo '<br>' . $a->Restauration();

// echo '<br>' . $a->modeResto();



echo '<hr>';

$p = new Employe();
$p->setInfo('Tuli', 'Hikaru', '02-03-2000', 'Informatique', 24000, 'Programmeur', 4, '6,11,13,17');
$g = new Magasins();

echo '<br>Nom : ' . $p->getNom() . 
'<br>Prenom : ' . $p->getPrenom() . 
'<br>Poste : ' . $p->getPoste() . 
'<br>Service : ' . $p->getService() .
'<br> Magasins : ' . $g->Nom3 .
'<br> Adresse du magasins : ' . $g->Adresse3 . ', ' . $g->CodePostal3 . ' ' . $g->Ville3 .
'<br>Salaire Annuel Brut: ' . $p->getSalaire() . ' €' .
'<br>Date d\'embauche : ' . $p->getDateEmb() . 
'<br>Année(s) d\'anciennetée(s) : ' . $p->Anciennete() .
'<br> Nombre d\'enfant(s) : ' . $p->getEnfant() . 
'<br> Age de ou des Enfant(s) : ' . $p->getAge() .
'<br>' . $p->Droit() . 
'<br>Chèque(s) de : ' . $p->Noël();

// var_dump($p->getAge());

// var_dump($p->Noël());


// var_dump($e->Anciennete());
echo '<br><br>Prime de fin d\'année : ' . $p->Prime();

echo '<br>' . $p->Transfere();

echo '<br> Plus d\'un an d\'ancienneté : ' . $p->Vacance();

echo '<br>' . $g->Restauration();

echo '<hr>';

$l = new Employe();
$l->setInfo('Date', 'Transfère', '02-03-2016', 'Informatique', 15000, 'Programmeur', 3, '2,5,12');
$s = new Magasins();

echo '<br>Nom : ' . $l->getNom() . 
'<br>Prenom : ' . $l->getPrenom() . 
'<br>Poste : ' . $l->getPoste() . 
'<br>Service : ' . $l->getService() .
'<br> Magasins : ' . $s->Nom3 .
'<br> Adresse du magasins : ' . $s->Adresse3 . ', ' . $s->CodePostal3 . ' ' . $s->Ville3 .
'<br>Salaire Annuel Brut: ' . $l->getSalaire() . ' €' .
'<br>Date d\'embauche : ' . $l->getDateEmb() . 
'<br>Année(s) d\'anciennetée(s) : ' . $l->Anciennete() .
'<br> Nombre d\'enfant(s) : ' . $l->getEnfant() . 
'<br> Age de ou des Enfant(s) : ' . $l->getAge() . 
'<br>' . $l->Droit() . 
'<br>Chèque(s) de : ' . $l->Noël();

// var_dump($l->getAge());

// var_dump($l->Noël());


// var_dump($e->Anciennete());
echo '<br><br>Prime de fin d\'année : ' . $l->Prime();

echo '<br>' . $l->Transfer1();

echo '<br> Plus d\'un an d\'ancienneté : ' . $l->Vacance();

// var_dump($s->Restauration());

echo '<br>' . $s->Restauration();


echo '<hr><hr>';



?>