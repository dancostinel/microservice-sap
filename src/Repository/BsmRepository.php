<?php

namespace App\Repository;

use App\Entity\Bsm;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Bsm>
 *
 * @method Bsm|null find($id, $lockMode = null, $lockVersion = null)
 * @method Bsm|null findOneBy(array $criteria, array $orderBy = null)
 * @method Bsm[]    findAll()
 * @method Bsm[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BsmRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Bsm::class);
    }

//    /**
//     * @return Bsm[] Returns an array of Bsm objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('b.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Bsm
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
