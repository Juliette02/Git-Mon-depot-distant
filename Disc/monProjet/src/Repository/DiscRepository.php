<?php

namespace App\Repository;

use App\Entity\Disc;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Disc>
 *
 * @method Disc|null find($id, $lockMode = null, $lockVersion = null)
 * @method Disc|null findOneBy(array $criteria, array $orderBy = null)
 * @method Disc[]    findAll()
 * @method Disc[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DiscRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Disc::class);
    }

    public function add(Disc $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Disc $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Disc[] Returns an array of Disc objects
//     */
//    public function findByExampleField($value): arraygestion@rmasa.com

//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Disc
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }

//REcherhce des discs en fonction du formulaire
    /*
    * @return void
    */
    public function Search($mots = null) {
        $query = $this->createQueryBuilder('d');

        if($mots != null){
            $query->join("d.artist", "a")
            //$query->where('MATCH_AGAINST(d.title, d.label, a.name) AGAINST(:mots boolean)>0')
            ->where(' (d.title LIKE :mots) OR (d.label LIKE :mots) OR (a.name LIKE :mots)')
            ->setParameter('mots', "%" . $mots . "%");
        }

        return $query->getQuery()->getResult();
    }

}
