<?php

namespace AppBundle\Manager;

use Doctrine\ORM\EntityManager;
/**
 * ModeleManager
 */
class ModeleManager
{
    protected $em;
    /**
     * construct
     *
     */
    public function __construct(EntityManager $em ) {
        $this->em = $em;
    }

    /**
     * getNameModele
     * @return NameModele
     */
    public function getNameModele()
    {
        $modeleIdAndName = array();
        $modeleList = $this->em->getRepository('AppBundle:Modele')->findAll();

        foreach ($modeleList as $modele) {
            $modeleIdAndName[$modele->getNameModele()] = $modele->getId();
        }
        // var_dump($modeleIdAndName);die();
        return $modeleIdAndName;    
    }


}
