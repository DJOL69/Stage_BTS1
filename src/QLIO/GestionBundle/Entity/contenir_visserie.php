<?php

namespace QLIO\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * contenir_visserie
 *
 * @ORM\Table(name="contenir_visserie")
 * @ORM\Entity(repositoryClass="QLIO\GestionBundle\Repository\contenir_visserieRepository")
 */
class contenir_visserie
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
     * @ORM\Column(name="QteVis", type="integer")
     */
    private $qteVis;

    /**
     * @var int
     *
     * @ORM\Column(name="NumVis", type="integer")
     */
    private $numVis;

    /**
     * @var string
     *
     * @ORM\Column(name="RefSachet", type="string", length=10)
     */
    private $refSachet;


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
     * Set qteVis
     *
     * @param integer $qteVis
     *
     * @return contenir_visserie
     */
    public function setQteVis($qteVis)
    {
        $this->qteVis = $qteVis;

        return $this;
    }

    /**
     * Get qteVis
     *
     * @return int
     */
    public function getQteVis()
    {
        return $this->qteVis;
    }

    /**
     * Set numVis
     *
     * @param string $numVis
     *
     * @return contenir_visserie
     */
    public function setNumVis($numVis)
    {
        $this->numVis = $numVis;

        return $this;
    }

    /**
     * Get numVis
     *
     * @return string
     */
    public function getNumVis()
    {
        return $this->numVis;
    }

    /**
     * Set refSachet
     *
     * @param string $refSachet
     *
     * @return contenir_visserie
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
}

