<?php

namespace QLIO\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sachet
 *
 * @ORM\Table(name="sachet")
 * @ORM\Entity(repositoryClass="QLIO\GestionBundle\Repository\sachetRepository")
 */
class sachet
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
     * @ORM\Column(name="RefSachet", type="string", length=10)
     */
    private $refSachet;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TempsReaSach", type="time")
     */
    private $tempsReaSach;


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
     * Set refSachet
     *
     * @param string $refSachet
     *
     * @return sachet
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
     * Set tempsReaSach
     *
     * @param \DateTime $tempsReaSach
     *
     * @return sachet
     */
    public function setTempsReaSach($tempsReaSach)
    {
        $this->tempsReaSach = $tempsReaSach;

        return $this;
    }

    /**
     * Get tempsReaSach
     *
     * @return \DateTime
     */
    public function getTempsReaSach()
    {
        return $this->tempsReaSach;
    }
	
	public function __toString()
	{
		return (string)$this->refSachet;
	}
}

