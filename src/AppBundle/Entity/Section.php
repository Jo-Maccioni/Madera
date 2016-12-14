<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Section
 *
 * @ORM\Table(name="section")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SectionRepository")
 */
class Section
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
     * @ORM\Column(name="refSection", type="string", length=30, unique=true)
     */
    private $refSection;

    /**
     * @var string
     *
     * @ORM\Column(name="nameSection", type="string", length=255)
     */
    private $nameSection;


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
     * Set refSection
     *
     * @param string $refSection
     *
     * @return Section
     */
    public function setRefSection($refSection)
    {
        $this->refSection = $refSection;

        return $this;
    }

    /**
     * Get refSection
     *
     * @return string
     */
    public function getRefSection()
    {
        return $this->refSection;
    }

    /**
     * Set nameSection
     *
     * @param string $nameSection
     *
     * @return Section
     */
    public function setNameSection($nameSection)
    {
        $this->nameSection = $nameSection;

        return $this;
    }

    /**
     * Get nameSection
     *
     * @return string
     */
    public function getNameSection()
    {
        return $this->nameSection;
    }
}

