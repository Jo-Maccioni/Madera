<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Devis
 *
 * @ORM\Table(name="devis")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DevisRepository")
 */
class Devis
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
     * @ORM\Column(name="refDevis", type="string", length=30, unique=true)
     */
    private $refDevis;

    /**
     * @var string
     *
     * @ORM\Column(name="nameDevis", type="string", length=255)
     */
    private $nameDevis;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="float", length=255)
     */
    private $amount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDevis", type="datetime")
     */
    private $dateDevis;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="validatedDateDevis", type="datetime")
     */
    private $validatedDateDevis;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Client")
     * @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     */
    private $client;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Gamme")
     * @ORM\JoinColumn(name="gamme_id", referencedColumnName="id", nullable=true, onDelete="SET NULL")
     */
    protected $gamme;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Modele", cascade={"persist"})
     * @ORM\JoinColumn(name="modele_id", referencedColumnName="id", nullable=true, onDelete="SET NULL")
     */
    protected $modele;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Coupe")
     * @ORM\JoinColumn(name="coupe_id", referencedColumnName="id", nullable=true, onDelete="SET NULL")
     */
    protected $coupe;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Module", cascade={"persist"})
     * @ORM\JoinColumn(name="module_id", referencedColumnName="id", nullable=true, onDelete="SET NULL")
     */
    protected $module;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Projet", inversedBy="devis")
     * @ORM\JoinColumn(name="projet_id", referencedColumnName="id", nullable=true, onDelete="SET NULL")
     */
    protected $projet;

    public function __toString()
    {
        return (string) $this->getGamme();
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
     * Set refDevis
     *
     * @param string $refDevis
     *
     * @return Devis
     */
    public function setRefDevis($refDevis)
    {
        $this->refDevis = $refDevis;

        return $this;
    }

    /**
     * Get refDevis
     *
     * @return string
     */
    public function getRefDevis()
    {
        return $this->refDevis;
    }

    /**
     * Set nameDevis
     *
     * @param string $nameDevis
     *
     * @return Devis
     */
    public function setNameDevis($nameDevis)
    {
        $this->nameDevis = $nameDevis;

        return $this;
    }

    /**
     * Get nameDevis
     *
     * @return string
     */
    public function getNameDevis()
    {
        return $this->nameDevis;
    }

    /**
     * Set dateDevis
     *
     * @param \DateTime $dateDevis
     *
     * @return Devis
     */
    public function setDateDevis($dateDevis)
    {
        $this->dateDevis = $dateDevis;

        return $this;
    }

    /**
     * Get dateDevis
     *
     * @return \DateTime
     */
    public function getDateDevis()
    {
        return $this->dateDevis;
    }

    /**
     * Set client
     *
     * @param \AppBundle\Entity\Client $client
     *
     * @return Devis
     */
    public function setClient(\AppBundle\Entity\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \AppBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set amount
     *
     * @param float $amount
     *
     * @return Devis
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set validatedDateDevis
     *
     * @param \DateTime $validatedDateDevis
     *
     * @return Devis
     */
    public function setValidatedDateDevis($validatedDateDevis)
    {
        $this->validatedDateDevis = $validatedDateDevis;

        return $this;
    }

    /**
     * Get validatedDateDevis
     *
     * @return \DateTime
     */
    public function getValidatedDateDevis()
    {
        return $this->validatedDateDevis;
    }

    /**
     * Set gamme
     *
     * @param \AppBundle\Entity\Gamme $gamme
     *
     * @return Devis
     */
    public function setGamme(\AppBundle\Entity\Gamme $gamme = null)
    {
        $this->gamme = $gamme;

        return $this;
    }

    /**
     * Get gamme
     *
     * @return \AppBundle\Entity\Gamme
     */
    public function getGamme()
    {
        return $this->gamme;
    }

    /**
     * Set modele
     *
     * @param \AppBundle\Entity\Modele $modele
     *
     * @return Devis
     */
    public function setModele(\AppBundle\Entity\Modele $modele = null)
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Get modele
     *
     * @return \AppBundle\Entity\Modele
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Set coupe
     *
     * @param \AppBundle\Entity\Coupe $coupe
     *
     * @return Devis
     */
    public function setCoupe(\AppBundle\Entity\Coupe $coupe = null)
    {
        $this->coupe = $coupe;

        return $this;
    }

    /**
     * Get coupe
     *
     * @return \AppBundle\Entity\Coupe
     */
    public function getCoupe()
    {
        return $this->coupe;
    }

    /**
     * Set module
     *
     * @param \AppBundle\Entity\Module $module
     *
     * @return Devis
     */
    public function setModule(\AppBundle\Entity\Module $module = null)
    {
        $this->module = $module;

        return $this;
    }

    /**
     * Get module
     *
     * @return \AppBundle\Entity\Module
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * Set projet
     *
     * @param \AppBundle\Entity\Projet $projet
     *
     * @return Devis
     */
    public function setProjet(\AppBundle\Entity\Projet $projet = null)
    {
        $this->projet = $projet;

        return $this;
    }

    /**
     * Get projet
     *
     * @return \AppBundle\Entity\Projet
     */
    public function getProjet()
    {
        return $this->projet;
    }
}
