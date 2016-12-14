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
     * @ORM\OneToOne(targetEntity="Client")
     * @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     */
    private $client;


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
}
