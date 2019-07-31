<?php

namespace App\Repository;

use App\Entity\Glossaire;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Glossaire|null find($id, $lockMode = null, $lockVersion = null)
 * @method Glossaire|null findOneBy(array $criteria, array $orderBy = null)
 * @method Glossaire[]    findAll()
 * @method Glossaire[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GlossaireRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Glossaire::class);
    }

    // /**
    //  * @return Glossaire[] Returns an array of Glossaire objects
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
    public function findOneBySomeField($value): ?Glossaire
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
