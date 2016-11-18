<?php

namespace Project\MaderaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BureauEtude
 *
 * @ORM\Table(name="bureau_etude")
 * @ORM\Entity(repositoryClass="Project\MaderaBundle\Repository\BureauEtudeRepository")
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
     * @var int
     *
     * @ORM\Column(name="idBE", type="integer", unique=true)
     */
    private $idBE;

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
     * Set idBE
     *
     * @param integer $idBE
     *
     * @return BureauEtude
     */
    public function setIdBE($idBE)
    {
        $this->idBE = $idBE;

        return $this;
    }

    /**
     * Get idBE
     *
     * @return int
     */
    public function getIdBE()
    {
        return $this->idBE;
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

