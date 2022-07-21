<?php

namespace App\DataFixtures;

use App\Entity\Disc;
use App\Entity\Artist;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class DiscsFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        include 'Artist.php'; // On inclu le fichier record.php qui détient les données !! 
        include 'Disc.php';
        $artistRepo = $manager->getRepository(Artist::class);

        foreach ($artists as $art){ // On crée des objets $Artist que l'on persiste !!
            $artistDB = new Artist();
            $artistDB
            ->setId($art['artist_id'])
            ->setName($art['artist_name'])
            ->setUrl($art['artist_url']);

            $manager->persist($artistDB);

             // empêcher l'auto incrément // Et vont obliger doctrine à créer les artistes avec un id spécifique !!
            $metadata = $manager->getClassMetaData(Artist::class); 
            $metadata->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_NONE);
        }
        $manager->flush();

        foreach ($discs as $d) {
            $discDB = new Disc();
            $discDB
            ->setTitle($d['disc_title'])
            ->setLabel($d['disc_label'])
            ->setPicture($d['disc_picture']);
            $artist = $artistRepo->find($d['artist_id']); // Récupére l'objet Artist correspondant à l'artist_id ..
            $discDB->setArtist($artist); // .. va l'ajouter au disque
            $manager->persist($discDB);
        }

        $manager->flush();    }
}
