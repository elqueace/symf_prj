<?php

namespace App\Repository;

use App\Entity\ProposalType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ProposalType|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProposalType|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProposalType[]    findAll()
 * @method ProposalType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProposalTypeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ProposalType::class);
    }

    // /**
    //  * @return ProposalType[] Returns an array of ProposalType objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ProposalType
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
