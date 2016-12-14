<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BureauEtude
 *
 * @ORM\Table(name="bureau_etude")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BureauEtudeRepository")
 */
class BureauEtude
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
     * @ORM\Column(name="refBE", type="string", length=30, unique=true)
     */
    private $refBE;

    /**
     * @var string
     *
     * @ORM\Column(name="nameBE", type="string", length=255)
     */
    private $nameBE;


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
     * Set refBE
     *
     * @param string $refBE
     *
     * @return BureauEtude
     */
    public function setRefBE($refBE)
    {
        $this->refBE = $refBE;

        return $this;
    }

    /**
     * Get refBE
     *
     * @return string
     */
    public function getRefBE()
    {
        return $this->refBE;
    }

    /**
     * Set nameBE
     *
     * @param string $nameBE
     *
     * @return BureauEtude
     */
    public function setNameBE($nameBE)
    {
        $this->nameBE = $nameBE;

        return $this;
    }

    /**
     * Get nameBE
     *
     * @return string
     */
    public function getNameBE()
    {
        return $this->nameBE;
    }
}

