<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modele
 *
 * @ORM\Table(name="gamme")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GammeRepository")
 */
class Gamme
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
     * @ORM\Column(name="refGamme", type="string", length=30, unique=true)
     */
    private $refGamme;

    /**
     * @var string
     *
     * @ORM\Column(name="nameGamme", type="string", length=255)
     */
    private $nameGamme;
    

    public function __toString()
    {
        return (string) $this->getNameGamme();
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
     * Set refGamme
     *
     * @param string $refGamme
     *
     * @return Gamme
     */
    public function setRefGamme($refGamme)
    {
        $this->refGamme = $refGamme;

        return $this;
    }

    /**
     * Get refGamme
     *
     * @return string
     */
    public function getRefGamme()
    {
        return $this->refGamme;
    }

    /**
     * Set nameGamme
     *
     * @param string $nameGamme
     *
     * @return Gamme
     */
    public function setNameGamme($nameGamme)
    {
        $this->nameGamme = $nameGamme;

        return $this;
    }

    /**
     * Get nameGamme
     *
     * @return string
     */
    public function getNameGamme()
    {
        return $this->nameGamme;
    }
}
