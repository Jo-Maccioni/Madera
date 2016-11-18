<?php

namespace Project\MaderaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Devis
 *
 * @ORM\Table(name="devis")
 * @ORM\Entity(repositoryClass="Project\MaderaBundle\Repository\DevisRepository")
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
     * @var int
     *
     * @ORM\Column(name="idDevis", type="integer", unique=true)
     */
    private $idDevis;

    /**
     * @var string
     *
     * @ORM\Column(name="refDevis", type="string", length=30)
     */
    private $refDevis;

    /**
     * @var string
     *
     * @ORM\Column(name="nameDevis", type="string", length=255, nullable=true)
     */
    private $nameDevis;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDevis", type="datetime", nullable=true)
     */
    private $dateDevis;


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
     * Set idDevis
     *
     * @param integer $idDevis
     *
     * @return Devis
     */
    public function setIdDevis($idDevis)
    {
        $this->idDevis = $idDevis;

        return $this;
    }

    /**
     * Get idDevis
     *
     * @return int
     */
    public function getIdDevis()
    {
        return $this->idDevis;
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
}

