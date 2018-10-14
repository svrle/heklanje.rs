<?php

namespace App\Repository;

use App\Entity\CrochetFile;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CrochetFile|null find($id, $lockMode = null, $lockVersion = null)
 * @method CrochetFile|null findOneBy(array $criteria, array $orderBy = null)
 * @method CrochetFile[]    findAll()
 * @method CrochetFile[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CrochetFileRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CrochetFile::class);
    }

//    /**
//     * @return CrochetFile[] Returns an array of CrochetFile objects
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
    public function findOneBySomeField($value): ?CrochetFile
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
