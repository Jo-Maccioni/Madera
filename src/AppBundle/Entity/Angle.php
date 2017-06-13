<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Section
 *
 * @ORM\Table(name="angle")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AngleRepository")
 */
class Angle
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
     * @ORM\Column(name="refAngle", type="string", length=30, unique=true)
     */
    private $refAngle;

    /**
     * @var string
     *
     * @ORM\Column(name="nameAngle", type="string", length=255)
     */
    private $nameAngle;

    public function __toString()
    {
        return (string) $this->getNameAngle();
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
     * Set refAngle
     *
     * @param string $refAngle
     *
     * @return Angle
     */
    public function setRefAngle($refAngle)
    {
        $this->refAngle = $refAngle;

        return $this;
    }

    /**
     * Get refAngle
     *
     * @return string
     */
    public function getRefAngle()
    {
        return $this->refAngle;
    }

    /**
     * Set nameAngle
     *
     * @param string $nameAngle
     *
     * @return Angle
     */
    public function setNameAngle($nameAngle)
    {
        $this->nameAngle = $nameAngle;

        return $this;
    }

    /**
     * Get nameAngle
     *
     * @return string
     */
    public function getNameAngle()
    {
        return $this->nameAngle;
    }
}
