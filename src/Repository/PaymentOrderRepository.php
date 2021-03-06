<?php

namespace App\Repository;

use App\Entity\PaymentOrder;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PaymentOrder|null find($id, $lockMode = null, $lockVersion = null)
 * @method PaymentOrder|null findOneBy(array $criteria, array $orderBy = null)
 * @method PaymentOrder[]    findAll()
 * @method PaymentOrder[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PaymentOrderRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PaymentOrder::class);
    }

    // /**
    //  * @return PaymentOrder[] Returns an array of PaymentOrder objects
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
    public function findOneBySomeField($value): ?PaymentOrder
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
