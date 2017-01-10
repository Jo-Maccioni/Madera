<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modele
 *
 * @ORM\Table(name="modele")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ModeleRepository")
 */
class Modele
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
     * @ORM\Column(name="refModele", type="string", length=30, unique=true)
     */
    private $refModele;

    /**
     * @var string
     *
     * @ORM\Column(name="nameModele", type="string", length=255)
     */
    private $nameModele;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Remplissage")
     * @ORM\JoinColumn(name="remplissage_id", referencedColumnName="id", nullable=true, onDelete="SET NULL")
     */
    protected $remplissage;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Finition")
     * @ORM\JoinColumn(name="finition_id", referencedColumnName="id", nullable=true, onDelete="SET NULL")
     */
    protected $finition;

    public function __toString()
    {
        return (string) $this->getNameModele();
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
     * Set refModele
     *
     * @param string $refModele
     *
     * @return Modele
     */
    public function setRefModele($refModele)
    {
        $this->refModele = $refModele;

        return $this;
    }

    /**
     * Get refModele
     *
     * @return string
     */
    public function getRefModele()
    {
        return $this->refModele;
    }

    /**
     * Set nameModele
     *
     * @param string $nameModele
     *
     * @return Modele
     */
    public function setNameModele($nameModele)
    {
        $this->nameModele = $nameModele;

        return $this;
    }

    /**
     * Get nameModele
     *
     * @return string
     */
    public function getNameModele()
    {
        return $this->nameModele;
    }

    /**
     * Set remplissage
     *
     * @param \AppBundle\Entity\Remplissage $remplissage
     *
     * @return Modele
     */
    public function setRemplissage(\AppBundle\Entity\Remplissage $remplissage = null)
    {
        $this->remplissage = $remplissage;

        return $this;
    }

    /**
     * Get remplissage
     *
     * @return \AppBundle\Entity\Remplissage
     */
    public function getRemplissage()
    {
        return $this->remplissage;
    }

    /**
     * Set finition
     *
     * @param \AppBundle\Entity\Finition $finition
     *
     * @return Modele
     */
    public function setFinition(\AppBundle\Entity\Finition $finition = null)
    {
        $this->finition = $finition;

        return $this;
    }

    /**
     * Get finition
     *
     * @return \AppBundle\Entity\Finition
     */
    public function getFinition()
    {
        return $this->finition;
    }
}
