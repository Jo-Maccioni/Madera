<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modele
 *
 * @ORM\Table(name="remplissage")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RemplissageRepository")
 */
class Remplissage
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
     * @ORM\Column(name="refRemplissage", type="string", length=30, unique=true)
     */
    private $refRemplissage;

    /**
     * @var string
     *
     * @ORM\Column(name="nameRemplissage", type="string", length=255)
     */
    private $nameRemplissage;


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
     * Set refRemplissage
     *
     * @param string $refRemplissage
     *
     * @return Remplissage
     */
    public function setRefRemplissage($refRemplissage)
    {
        $this->refRemplissage = $refRemplissage;

        return $this;
    }

    /**
     * Get refRemplissage
     *
     * @return string
     */
    public function getRefRemplissage()
    {
        return $this->refRemplissage;
    }

    /**
     * Set nameRemplissage
     *
     * @param string $nameRemplissage
     *
     * @return Remplissage
     */
    public function setNameRemplissage($nameRemplissage)
    {
        $this->nameRemplissage = $nameRemplissage;

        return $this;
    }

    /**
     * Get nameRemplissage
     *
     * @return string
     */
    public function getNameRemplissage()
    {
        return $this->nameRemplissage;
    }
}
