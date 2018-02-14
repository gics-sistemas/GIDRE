<?php

namespace AppBundle\Entity\Cliente;

use Doctrine\ORM\Mapping as ORM;

/**
 * rif
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Cliente\rifRepository")
 */
class rif
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="rif", type="string", length=255)
     */
    private $rif;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_adm", type="string", length=255)
     */
    private $nombreAdm;

    /**
     * @var string
     *
     * @ORM\Column(name="razon_social", type="string", length=255)
     */
    private $razonSocial;


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
     * Set rif
     *
     * @param string $rif
     * @return rif
     */
    public function setRif($rif)
    {
        $this->rif = $rif;
    
        return $this;
    }

    /**
     * Get rif
     *
     * @return string 
     */
    public function getRif()
    {
        return $this->rif;
    }

    /**
     * Set nombreAdm
     *
     * @param string $nombreAdm
     * @return rif
     */
    public function setNombreAdm($nombreAdm)
    {
        $this->nombreAdm = $nombreAdm;
    
        return $this;
    }

    /**
     * Get nombreAdm
     *
     * @return string 
     */
    public function getNombreAdm()
    {
        return $this->nombreAdm;
    }

    /**
     * Set razonSocial
     *
     * @param string $razonSocial
     * @return rif
     */
    public function setRazonSocial($razonSocial)
    {
        $this->razonSocial = $razonSocial;
    
        return $this;
    }

    /**
     * Get razonSocial
     *
     * @return string 
     */
    public function getRazonSocial()
    {
        return $this->razonSocial;
    }
}
