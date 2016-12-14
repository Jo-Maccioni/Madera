<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fournisseur
 *
 * @ORM\Table(name="fournisseur")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FournisseurRepository")
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

