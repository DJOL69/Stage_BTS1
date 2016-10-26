<?php

namespace QLIO\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * visserie
 *
 * @ORM\Table(name="visserie")
 * @ORM\Entity(repositoryClass="QLIO\GestionBundle\Repository\visserieRepository")
 */
class visserie
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
     * @ORM\Column(name="NumVis", type="integer")
     */
    private $numVis;

    /**
     * @var string
     *
     * @ORM\Column(name="TypeVis", type="string", length=11)
     */
    private $typeVis;

    /**
     * @var string
     *
     * @ORM\Column(name="LibVis", type="text")
     */
    private $libVis;

    /**
     * @var int
     *
     * @ORM\Column(name="PoidsVis", type="integer")
     */
    private $poidsVis;

    /**
     * @var int
     *
     * @ORM\Column(name="N_EmpPick", type="integer", nullable=true, unique=true)
     */
    private $nEmpPick;


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
     * Set numVis
     *
     * @param string $numVis
     *
     * @return visserie
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
     * Set typeVis
     *
     * @param string $typeVis
     *
     * @return visserie
     */
    public function setTypeVis($typeVis)
    {
        $this->typeVis = $typeVis;

        return $this;
    }

    /**
     * Get typeVis
     *
     * @return string
     */
    public function getTypeVis()
    {
        return $this->typeVis;
    }

    /**
     * Set libVis
     *
     * @param string $libVis
     *
     * @return visserie
     */
    public function setLibVis($libVis)
    {
        $this->libVis = $libVis;

        return $this;
    }

    /**
     * Get libVis
     *
     * @return string
     */
    public function getLibVis()
    {
        return $this->libVis;
    }

    /**
     * Set poidsVis
     *
     * @param integer $poidsVis
     *
     * @return visserie
     */
    public function setPoidsVis($poidsVis)
    {
        $this->poidsVis = $poidsVis;

        return $this;
    }

    /**
     * Get poidsVis
     *
     * @return int
     */
    public function getPoidsVis()
    {
        return $this->poidsVis;
    }

    /**
     * Set nEmpPick
     *
     * @param integer $nEmpPick
     *
     * @return visserie
     */
    public function setNEmpPick($nEmpPick)
    {
        $this->nEmpPick = $nEmpPick;

        return $this;
    }

    /**
     * Get nEmpPick
     *
     * @return int
     */
    public function getNEmpPick()
    {
        return $this->nEmpPick;
    }
}

