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
}

