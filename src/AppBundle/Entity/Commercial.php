<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commercial
 *
 * @ORM\Table(name="commercial")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CommercialRepository")
 */
class Commercial
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
     * @ORM\Column(name="nameCommercial", type="string", length=255)
     */
    private $nameCommercial;

    /**
     * @var string
     *
     * @ORM\Column(name="refCommercial", type="string", length=30, unique=true)
     */
    private $refCommercial;


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
     * Set nameCommercial
     *
     * @param string $nameCommercial
     *
     * @return Commercial
     */
    public function setNameCommercial($nameCommercial)
    {
        $this->nameCommercial = $nameCommercial;

        return $this;
    }

    /**
     * Get nameCommercial
     *
     * @return string
     */
    public function getNameCommercial()
    {
        return $this->nameCommercial;
    }

    /**
     * Set refCommercial
     *
     * @param string $refCommercial
     *
     * @return Commercial
     */
    public function setRefCommercial($refCommercial)
    {
        $this->refCommercial = $refCommercial;

        return $this;
    }

    /**
     * Get refCommercial
     *
     * @return string
     */
    public function getRefCommercial()
    {
        return $this->refCommercial;
    }
}

