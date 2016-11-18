<?php

namespace Project\MaderaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Module
 *
 * @ORM\Table(name="module")
 * @ORM\Entity(repositoryClass="Project\MaderaBundle\Repository\ModuleRepository")
 */
class Module
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="idModule", type="integer", unique=true)
     */
    private $idModule;

    /**
     * @var string
     *
     * @ORM\Column(name="refModule", type="string", length=30, unique=true)
     */
    private $refModule;

    /**
     * @var string
     *
     * @ORM\Column(name="nameModule", type="string", length=255)
     */
    private $nameModule;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idModule
     *
     * @param integer $idModule
     *
     * @return Module
     */
    public function setIdModule($idModule)
    {
        $this->idModule = $idModule;

        return $this;
    }

    /**
     * Get idModule
     *
     * @return int
     */
    public function getIdModule()
    {
        return $this->idModule;
    }

    /**
     * Set refModule
     *
     * @param string $refModule
     *
     * @return Module
     */
    public function setRefModule($refModule)
    {
        $this->refModule = $refModule;

        return $this;
    }

    /**
     * Get refModule
     *
     * @return string
     */
    public function getRefModule()
    {
        return $this->refModule;
    }

    /**
     * Set nameModule
     *
     * @param string $nameModule
     *
     * @return Module
     */
    public function setNameModule($nameModule)
    {
        $this->nameModule = $nameModule;

        return $this;
    }

    /**
     * Get nameModule
     *
     * @return string
     */
    public function getNameModule()
    {
        return $this->nameModule;
    }
}

