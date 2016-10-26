<?php

namespace QLIO\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * typevis
 *
 * @ORM\Table(name="typevis")
 * @ORM\Entity(repositoryClass="QLIO\GestionBundle\Repository\typevisRepository")
 */
class typevis
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
     * @ORM\Column(name="TypeVis", type="string", length=10)
     */
    private $typeVis;


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
     * Set typeVis
     *
     * @param string $typeVis
     *
     * @return typevis
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
	
	public function __toString()
	{
		return (string)$this->typeVis;
	}
}
