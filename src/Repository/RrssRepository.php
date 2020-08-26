<?php

namespace App\Repository;

use App\Entity\Rrss;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Rrss|null find($id, $lockMode = null, $lockVersion = null)
 * @method Rrss|null findOneBy(array $criteria, array $orderBy = null)
 * @method Rrss[]    findAll()
 * @method Rrss[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RrssRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Rrss::class);
    }

    // /**
    //  * @return Rrss[] Returns an array of Rrss objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Rrss
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
