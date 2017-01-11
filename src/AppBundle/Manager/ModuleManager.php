<?php

namespace AppBundle\Manager;

use Doctrine\ORM\EntityManager;
/**
 * ModuleManager
 */
class ModuleManager
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
     * getNameModule
     * @return NameModule
     */
    public function getNameModule()
    {
        $moduleIdAndName = array();
        $moduleList = $this->em->getRepository('AppBundle:Module')->findAll();

        foreach ($moduleList as $module) {
            $moduleIdAndName[$module->getNameModule()] = $module->getId();
        }
        // var_dump($modeleIdAndName);die();
        return $moduleIdAndName;    
    }


}
