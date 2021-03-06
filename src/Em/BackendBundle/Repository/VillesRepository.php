<?php

namespace Em\BackendBundle\Repository;

/**
 * VillesRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class VillesRepository extends \Doctrine\ORM\EntityRepository
{
    public function  reupHomeville(){
        $qb = $this->createQueryBuilder('v');
        $qb->select('v')
            ->orderBy('v.nom', 'ASC')
            ->distinct();
        return $qb->getQuery()->getResult();
    }

    public function findByVilleCommune($villecommune){
        $qb = $this->createQueryBuilder('v');
        $qb->select('v.nom')
            ->where('v.nom LIKE :nom')
            ->setParameter('nom', '%'.$villecommune.'%');

        return  $qb->getQuery()->getResult();
    }
}
