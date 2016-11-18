<?php

namespace Project\MaderaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fournisseur
 *
 * @ORM\Table(name="fournisseur")
 * @ORM\Entity(repositoryClass="Project\MaderaBundle\Repository\FournisseurRepository")
 */
class Fournisseur
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
     * @ORM\Column(name="idFournisseur", type="integer", unique=true)
     */
    private $idFournisseur;

    /**
     * @var string
     *
     * @ORM\Column(name="refFournisseur", type="string", length=30, unique=true)
     */
    private $refFournisseur;

    /**
     * @var string
     *
     * @ORM\Column(name="nameFournisseur", type="string", length=255)
     */
    private $nameFournisseur;


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
     * Set idFournisseur
     *
     * @param integer $idFournisseur
     *
     * @return Fournisseur
     */
    public function setIdFournisseur($idFournisseur)
    {
        $this->idFournisseur = $idFournisseur;

        return $this;
    }

    /**
     * Get idFournisseur
     *
     * @return int
     */
    public function getIdFournisseur()
    {
        return $this->idFournisseur;
    }

    /**
     * Set refFournisseur
     *
     * @param string $refFournisseur
     *
     * @return Fournisseur
     */
    public function setRefFournisseur($refFournisseur)
    {
        $this->refFournisseur = $refFournisseur;

        return $this;
    }

    /**
     * Get refFournisseur
     *
     * @return string
     */
    public function getRefFournisseur()
    {
        return $this->refFournisseur;
    }

    /**
     * Set nameFournisseur
     *
     * @param string $nameFournisseur
     *
     * @return Fournisseur
     */
    public function setNameFournisseur($nameFournisseur)
    {
        $this->nameFournisseur = $nameFournisseur;

        return $this;
    }

    /**
     * Get nameFournisseur
     *
     * @return string
     */
    public function getNameFournisseur()
    {
        return $this->nameFournisseur;
    }
}

