<?php

namespace App\Repository;

use App\Entity\MensajesContacto;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MensajesContacto|null find($id, $lockMode = null, $lockVersion = null)
 * @method MensajesContacto|null findOneBy(array $criteria, array $orderBy = null)
 * @method MensajesContacto[]    findAll()
 * @method MensajesContacto[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MensajesContactoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MensajesContacto::class);
    }

    // /**
    //  * @return MensajesContacto[] Returns an array of MensajesContacto objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MensajesContacto
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
