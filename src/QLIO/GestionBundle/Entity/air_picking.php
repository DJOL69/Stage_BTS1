<?php

namespace QLIO\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * air_picking
 *
 * @ORM\Table(name="air_picking")
 * @ORM\Entity(repositoryClass="QLIO\GestionBundle\Repository\air_pickingRepository")
 */
class air_picking
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
     * @ORM\Column(name="N_EmpPick", type="integer")
	 * 
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
     * Set nEmpPick
     *
     * @param integer $nEmpPick
     *
     * @return air_picking
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
	
	public function __toString()
	{
		return (string)$this->nEmpPick;
	}
}

