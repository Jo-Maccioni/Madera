<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Materiel
 *
 * @ORM\Table(name="materiel")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MaterielRepository")
 */
class Materiel
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
     * @ORM\Column(name="refMateriel", type="string", length=30, unique=true)
     */
    private $refMateriel;

    /**
     * @var string
     *
     * @ORM\Column(name="nameMateriel", type="string", length=255)
     */
    private $nameMateriel;


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
     * Set refMateriel
     *
     * @param string $refMateriel
     *
     * @return Materiel
     */
    public function setRefMateriel($refMateriel)
    {
        $this->refMateriel = $refMateriel;

        return $this;
    }

    /**
     * Get refMateriel
     *
     * @return string
     */
    public function getRefMateriel()
    {
        return $this->refMateriel;
    }

    /**
     * Set nameMateriel
     *
     * @param string $nameMateriel
     *
     * @return Materiel
     */
    public function setNameMateriel($nameMateriel)
    {
        $this->nameMateriel = $nameMateriel;

        return $this;
    }

    /**
     * Get nameMateriel
     *
     * @return string
     */
    public function getNameMateriel()
    {
        return $this->nameMateriel;
    }
}

