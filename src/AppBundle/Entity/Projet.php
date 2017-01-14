<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modele
 *
 * @ORM\Table(name="projet")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProjetRepository")
 */
class Projet
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
     * @ORM\Column(name="refProjet", type="string", length=30, unique=true)
     */
    private $refProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="nameProjet", type="string", length=255)
     */
    private $nameProjet;
    
    /**
     * @var integer
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Devis", mappedBy="projet")
     */
    protected $module;


    public function __toString()
    {
        return (string) $this->getNameGamme();
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->module = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set refProjet
     *
     * @param string $refProjet
     *
     * @return Projet
     */
    public function setRefProjet($refProjet)
    {
        $this->refProjet = $refProjet;

        return $this;
    }

    /**
     * Get refProjet
     *
     * @return string
     */
    public function getRefProjet()
    {
        return $this->refProjet;
    }

    /**
     * Set nameProjet
     *
     * @param string $nameProjet
     *
     * @return Projet
     */
    public function setNameProjet($nameProjet)
    {
        $this->nameProjet = $nameProjet;

        return $this;
    }

    /**
     * Get nameProjet
     *
     * @return string
     */
    public function getNameProjet()
    {
        return $this->nameProjet;
    }

    /**
     * Add module
     *
     * @param \AppBundle\Entity\Devis $module
     *
     * @return Projet
     */
    public function addModule(\AppBundle\Entity\Devis $module)
    {
        $this->module[] = $module;

        return $this;
    }

    /**
     * Remove module
     *
     * @param \AppBundle\Entity\Devis $module
     */
    public function removeModule(\AppBundle\Entity\Devis $module)
    {
        $this->module->removeElement($module);
    }

    /**
     * Get module
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getModule()
    {
        return $this->module;
    }
}
