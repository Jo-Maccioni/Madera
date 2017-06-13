<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Section
 *
 * @ORM\Table(name="longueur")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LongueurRepository")
 */
class Longueur
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
     * @ORM\Column(name="refLongueur", type="string", length=30, unique=true)
     */
    private $refLongueur;

    /**
     * @var string
     *
     * @ORM\Column(name="nameLongueur", type="string", length=255)
     */
    private $nameLongueur;

    public function __toString()
    {
        return (string) $this->getNameLongueur();
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
     * Set refLongueur
     *
     * @param string $refLongueur
     *
     * @return Longueur
     */
    public function setRefLongueur($refLongueur)
    {
        $this->refLongueur = $refLongueur;

        return $this;
    }

    /**
     * Get refLongueur
     *
     * @return string
     */
    public function getRefLongueur()
    {
        return $this->refLongueur;
    }

    /**
     * Set nameLongueur
     *
     * @param string $nameLongueur
     *
     * @return Longueur
     */
    public function setNameLongueur($nameLongueur)
    {
        $this->nameLongueur = $nameLongueur;

        return $this;
    }

    /**
     * Get nameLongueur
     *
     * @return string
     */
    public function getNameLongueur()
    {
        return $this->nameLongueur;
    }
}
