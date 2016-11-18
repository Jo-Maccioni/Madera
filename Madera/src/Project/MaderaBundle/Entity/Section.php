<?php

namespace Project\MaderaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Section
 *
 * @ORM\Table(name="section")
 * @ORM\Entity(repositoryClass="Project\MaderaBundle\Repository\SectionRepository")
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
     * @var int
     *
     * @ORM\Column(name="idSection", type="integer", unique=true)
     */
    private $idSection;

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
     * Set idSection
     *
     * @param integer $idSection
     *
     * @return Section
     */
    public function setIdSection($idSection)
    {
        $this->idSection = $idSection;

        return $this;
    }

    /**
     * Get idSection
     *
     * @return int
     */
    public function getIdSection()
    {
        return $this->idSection;
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

