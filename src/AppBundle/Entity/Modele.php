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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\FinitionInterieur")
     * @ORM\JoinColumn(name="finition_interieur_id", referencedColumnName="id", nullable=true, onDelete="SET NULL")
     */
    protected $finitionInterieur;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\FinitionExterieur")
     * @ORM\JoinColumn(name="finition_exterieur_id", referencedColumnName="id", nullable=true, onDelete="SET NULL")
     */
    protected $finitionExterieur;

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
    public function setRemplissage($remplissage)
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
     * Set finitionInterieur
     *
     * @param \AppBundle\Entity\FinitionInterieur $finitionInterieur
     *
     * @return Modele
     */
    public function setFinitionInterieur(\AppBundle\Entity\FinitionInterieur $finitionInterieur = null)
    {
        $this->finitionInterieur = $finitionInterieur;

        return $this;
    }

    /**
     * Get finitionInterieur
     *
     * @return \AppBundle\Entity\FinitionInterieur
     */
    public function getFinitionInterieur()
    {
        return $this->finitionInterieur;
    }

    /**
     * Set finitionExterieur
     *
     * @param \AppBundle\Entity\FinitionExterieur $finitionExterieur
     *
     * @return Modele
     */
    public function setFinitionExterieur(\AppBundle\Entity\FinitionExterieur $finitionExterieur = null)
    {
        $this->finitionExterieur = $finitionExterieur;

        return $this;
    }

    /**
     * Get finitionExterieur
     *
     * @return \AppBundle\Entity\FinitionExterieur
     */
    public function getFinitionExterieur()
    {
        return $this->finitionExterieur;
    }
}
