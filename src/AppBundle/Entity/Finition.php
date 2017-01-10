<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Finition
 *
 * @ORM\Table(name="finition")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FinitionRepository")
 */
class Finition
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
     * @ORM\Column(name="finition_int", type="string", length=255, nullable=true)
     */
    private $finitionINT;

    /**
     * @var string
     *
     * @ORM\Column(name="finition_ext", type="string", length=255, nullable=true)
     */
    private $finitionEXT;


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
     * Set finitionINT
     *
     * @param string $finitionINT
     *
     * @return Finition
     */
    public function setFinitionINT($finitionINT)
    {
        $this->finitionINT = $finitionINT;

        return $this;
    }

    /**
     * Get finitionINT
     *
     * @return string
     */
    public function getFinitionINT()
    {
        return $this->finitionINT;
    }

    /**
     * Set finitionEXT
     *
     * @param string $finitionEXT
     *
     * @return Finition
     */
    public function setFinitionEXT($finitionEXT)
    {
        $this->finitionEXT = $finitionEXT;

        return $this;
    }

    /**
     * Get finitionEXT
     *
     * @return string
     */
    public function getFinitionEXT()
    {
        return $this->finitionEXT;
    }
}
