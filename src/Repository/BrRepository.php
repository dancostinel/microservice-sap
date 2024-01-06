<?php

namespace App\Repository;

use App\Entity\Br;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Br>
 *
 * @method Br|null find($id, $lockMode = null, $lockVersion = null)
 * @method Br|null findOneBy(array $criteria, array $orderBy = null)
 * @method Br[]    findAll()
 * @method Br[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BrRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Br::class);
    }

//    /**
//     * @return Br[] Returns an array of Br objects
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

//    public function findOneBySomeField($value): ?Br
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
