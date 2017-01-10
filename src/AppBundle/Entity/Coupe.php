<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Module
 *
 * @ORM\Table(name="coupe")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CoupeRepository")
 */
class Coupe
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
     * @ORM\Column(name="refCoupe", type="string", length=30, unique=true)
     */
    private $refCoupe;

    /**
     * @var string
     *
     * @ORM\Column(name="nameCoupe", type="string", length=255)
     */
    private $nameCoupe;


    public function __toString()
    {
        return (string) $this->getNameCoupe();
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
     * Set refCoupe
     *
     * @param string $refCoupe
     *
     * @return Coupe
     */
    public function setRefCoupe($refCoupe)
    {
        $this->refCoupe = $refCoupe;

        return $this;
    }

    /**
     * Get refCoupe
     *
     * @return string
     */
    public function getRefCoupe()
    {
        return $this->refCoupe;
    }

    /**
     * Set nameCoupe
     *
     * @param string $nameCoupe
     *
     * @return Coupe
     */
    public function setNameCoupe($nameCoupe)
    {
        $this->nameCoupe = $nameCoupe;

        return $this;
    }

    /**
     * Get nameCoupe
     *
     * @return string
     */
    public function getNameCoupe()
    {
        return $this->nameCoupe;
    }
}
