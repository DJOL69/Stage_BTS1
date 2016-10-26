<?php

namespace QLIO\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * box
 *
 * @ORM\Table(name="box")
 * @ORM\Entity(repositoryClass="QLIO\GestionBundle\Repository\boxRepository")
 */
class box
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
     * @var int
     *
     * @ORM\Column(name="TempsReaBox", type="integer")
     */
    private $tempsReaBox;
	
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
     * @return box
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
     * Set tempsReaBox
     *
     * @param integer $tempsReaBox
     *
     * @return box
     */
    public function setTempsReaBox($tempsReaBox)
    {
        $this->tempsReaBox = $tempsReaBox;

        return $this;
    }

    /**
     * Get tempsReaBox
     *
     * @return int
     */
    public function getTempsReaBox()
    {
        return $this->tempsReaBox;
    }
	
	public function __toString()
	{
		return (string)$this->refBox;
	}
	
}

