<?php

namespace QLIO\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * contenir_sachet
 *
 * @ORM\Table(name="contenir_sachet")
 * @ORM\Entity(repositoryClass="QLIO\GestionBundle\Repository\contenir_sachetRepository")
 */
class contenir_sachet
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
     * @ORM\Column(name="RefBox", type="string", length=10)
     */
    private $refBox;

    /**
     * @var string
     *
     * @ORM\Column(name="RefSachet", type="string", length=10)
     */
    private $refSachet;

    /**
     * @var int
     *
     * @ORM\Column(name="QteSachet", type="integer")
     */
    private $qteSachet;


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
     * Set refBox
     *
     * @param string $refBox
     *
     * @return contenir_sachet
     */
    public function setRefBox($refBox)
    {
        $this->refBox = $refBox;

        return $this;
    }

    /**
     * Get refBox
     *
     * @return string
     */
    public function getRefBox()
    {
        return $this->refBox;
    }

    /**
     * Set refSachet
     *
     * @param string $refSachet
     *
     * @return contenir_sachet
     */
    public function setRefSachet($refSachet)
    {
        $this->refSachet = $refSachet;

        return $this;
    }

    /**
     * Get refSachet
     *
     * @return string
     */
    public function getRefSachet()
    {
        return $this->refSachet;
    }

    /**
     * Set qteSachet
     *
     * @param integer $qteSachet
     *
     * @return contenir_sachet
     */
    public function setQteSachet($qteSachet)
    {
        $this->qteSachet = $qteSachet;

        return $this;
    }

    /**
     * Get qteSachet
     *
     * @return int
     */
    public function getQteSachet()
    {
        return $this->qteSachet;
    }
}

