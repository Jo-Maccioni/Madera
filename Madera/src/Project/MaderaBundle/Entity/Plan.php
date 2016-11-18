<?php

namespace Project\MaderaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Plan
 *
 * @ORM\Table(name="plan")
 * @ORM\Entity(repositoryClass="Project\MaderaBundle\Repository\PlanRepository")
 */
class Plan
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
     * @ORM\Column(name="idPlan", type="integer", unique=true)
     */
    private $idPlan;

    /**
     * @var string
     *
     * @ORM\Column(name="refPlan", type="string", length=30, unique=true)
     */
    private $refPlan;

    /**
     * @var string
     *
     * @ORM\Column(name="nomPlan", type="string", length=255)
     */
    private $nomPlan;


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
     * Set idPlan
     *
     * @param integer $idPlan
     *
     * @return Plan
     */
    public function setIdPlan($idPlan)
    {
        $this->idPlan = $idPlan;

        return $this;
    }

    /**
     * Get idPlan
     *
     * @return int
     */
    public function getIdPlan()
    {
        return $this->idPlan;
    }

    /**
     * Set refPlan
     *
     * @param string $refPlan
     *
     * @return Plan
     */
    public function setRefPlan($refPlan)
    {
        $this->refPlan = $refPlan;

        return $this;
    }

    /**
     * Get refPlan
     *
     * @return string
     */
    public function getRefPlan()
    {
        return $this->refPlan;
    }

    /**
     * Set nomPlan
     *
     * @param string $nomPlan
     *
     * @return Plan
     */
    public function setNomPlan($nomPlan)
    {
        $this->nomPlan = $nomPlan;

        return $this;
    }

    /**
     * Get nomPlan
     *
     * @return string
     */
    public function getNomPlan()
    {
        return $this->nomPlan;
    }
}

