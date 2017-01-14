<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Finition
 *
 * @ORM\Table(name="finition_exterieur")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FinitionExterieurRepository")
 */
class FinitionExterieur
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
     * @ORM\Column(name="nameFinitionExterieur", type="string", length=255, nullable=true)
     */
    private $nameFinitionExterieur;


    public function __toString()
    {
        return (string) $this->getNameFinitionExterieur();
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
     * @return FinitionExterieur
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
     * Set nameFinitionExterieur
     *
     * @param string $nameFinitionExterieur
     *
     * @return FinitionExterieur
     */
    public function setNameFinitionExterieur($nameFinitionExterieur)
    {
        $this->nameFinitionExterieur = $nameFinitionExterieur;

        return $this;
    }

    /**
     * Get nameFinitionExterieur
     *
     * @return string
     */
    public function getNameFinitionExterieur()
    {
        return $this->nameFinitionExterieur;
    }
}
