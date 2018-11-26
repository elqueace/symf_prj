<?php

namespace App\Repository;

use App\Entity\ProposalComment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ProposalComment|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProposalComment|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProposalComment[]    findAll()
 * @method ProposalComment[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProposalCommentRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ProposalComment::class);
    }

    // /**
    //  * @return ProposalComment[] Returns an array of ProposalComment objects
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
    public function findOneBySomeField($value): ?ProposalComment
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
