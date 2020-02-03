<?php

namespace App\Repository;

use App\Entity\Ciclo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Ciclo|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ciclo|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ciclo[]    findAll()
 * @method Ciclo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CicloRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ciclo::class);
    }

    // /**
    //  * @return Ciclo[] Returns an array of Ciclo objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Ciclo
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
