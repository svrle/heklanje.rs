<?php

namespace App\Repository;

use App\Entity\Crochet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Crochet|null find($id, $lockMode = null, $lockVersion = null)
 * @method Crochet|null findOneBy(array $criteria, array $orderBy = null)
 * @method Crochet[]    findAll()
 * @method Crochet[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CrochetRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Crochet::class);
    }

//    /**
//     * @return Crochet[] Returns an array of Crochet objects
//     */
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
    public function findOneBySomeField($value): ?Crochet
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
