<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Module
 *
 * @ORM\Table(name="module")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ModuleRepository")
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
     * @var string
     *
     * @ORM\Column(name="section", type="string", length=255)
     */
    private $section;

    /**
     * @var string
     *
     * @ORM\Column(name="longueur", type="string", length=255)
     */
    private $longueur;

    /**
     * @var string
     *
     * @ORM\Column(name="angleEntrant", type="string", length=255)
     */
    private $angleEntrant;

    /**
     * @var string
     *
     * @ORM\Column(name="angleSortant", type="string", length=255)
     */
    private $angleSortant;


    public function __toString()
    {
        return (string) $this->getNameModule();
    }

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

    /**
     * Set section
     *
     * @param string $section
     *
     * @return Module
     */
    public function setSection($section)
    {
        $this->section = $section;

        return $this;
    }

    /**
     * Get section
     *
     * @return string
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * Set longueur
     *
     * @param string $longueur
     *
     * @return Module
     */
    public function setLongueur($longueur)
    {
        $this->longueur = $longueur;

        return $this;
    }

    /**
     * Get longueur
     *
     * @return string
     */
    public function getLongueur()
    {
        return $this->longueur;
    }

    /**
     * Set angleEntrant
     *
     * @param string $angleEntrant
     *
     * @return Module
     */
    public function setAngleEntrant($angleEntrant)
    {
        $this->angleEntrant = $angleEntrant;

        return $this;
    }

    /**
     * Get angleEntrant
     *
     * @return string
     */
    public function getAngleEntrant()
    {
        return $this->angleEntrant;
    }

    /**
     * Set angleSortant
     *
     * @param string $angleSortant
     *
     * @return Module
     */
    public function setAngleSortant($angleSortant)
    {
        $this->angleSortant = $angleSortant;

        return $this;
    }

    /**
     * Get angleSortant
     *
     * @return string
     */
    public function getAngleSortant()
    {
        return $this->angleSortant;
    }
}
