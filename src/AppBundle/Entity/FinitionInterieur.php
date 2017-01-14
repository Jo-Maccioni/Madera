<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Finition
 *
 * @ORM\Table(name="finition_interieur")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FinitionInterieurRepository")
 */
class FinitionInterieur
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
     * @ORM\Column(name="refFinition", type="string", length=30, unique=true)
     */
    private $refFinition;

    /**
     * @var string
     *
     * @ORM\Column(name="nameFinitionInterieur", type="string", length=255, nullable=true)
     */
    private $nameFinitionInterieur;


    public function __toString()
    {
        return (string) $this->getNameFinitionInterieur();
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
     * Set refFinition
     *
     * @param string $refFinition
     *
     * @return Finition
     */
    public function setRefFinition($refFinition)
    {
        $this->refFinition = $refFinition;

        return $this;
    }

    /**
     * Get refFinition
     *
     * @return string
     */
    public function getRefFinition()
    {
        return $this->refFinition;
    }

    /**
     * Set nameFinitionInterieur
     *
     * @param string $nameFinitionInterieur
     *
     * @return FinitionInterieur
     */
    public function setNameFinitionInterieur($nameFinitionInterieur)
    {
        $this->nameFinitionInterieur = $nameFinitionInterieur;

        return $this;
    }

    /**
     * Get nameFinitionInterieur
     *
     * @return string
     */
    public function getNameFinitionInterieur()
    {
        return $this->nameFinitionInterieur;
    }
}
