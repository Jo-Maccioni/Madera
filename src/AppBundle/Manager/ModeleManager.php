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
            // var_dump($modele);die();
            $modeleIdAndName[$modele->getNameModele()] = $modele;
        }
        return $modeleIdAndName;    
    }


}
