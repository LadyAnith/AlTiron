<?php

namespace App\Repository;

use App\Entity\Gira;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Gira|null find($id, $lockMode = null, $lockVersion = null)
 * @method Gira|null findOneBy(array $criteria, array $orderBy = null)
 * @method Gira[]    findAll()
 * @method Gira[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GiraRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Gira::class);
    }

    // /**
    //  * @return Gira[] Returns an array of Gira objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Gira
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
