<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Plan
 *
 * @ORM\Table(name="plan")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PlanRepository")
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
     * @var string
     *
     * @ORM\Column(name="refPlan", type="string", length=30, unique=true)
     */
    private $refPlan;

    /**
     * @var string
     *
     * @ORM\Column(name="namePlan", type="string", length=255)
     */
    private $namePlan;


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
     * Set namePlan
     *
     * @param string $namePlan
     *
     * @return Plan
     */
    public function setNamePlan($namePlan)
    {
        $this->namePlan = $namePlan;

        return $this;
    }

    /**
     * Get namePlan
     *
     * @return string
     */
    public function getNamePlan()
    {
        return $this->namePlan;
    }
}

