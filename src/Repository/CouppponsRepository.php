<?php

namespace App\Repository;

use App\Entity\Coupppons;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Coupppons>
 *
 * @method Coupppons|null find($id, $lockMode = null, $lockVersion = null)
 * @method Coupppons|null findOneBy(array $criteria, array $orderBy = null)
 * @method Coupppons[]    findAll()
 * @method Coupppons[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CouppponsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Coupppons::class);
    }

//    /**
//     * @return Coupppons[] Returns an array of Coupppons objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Coupppons
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
