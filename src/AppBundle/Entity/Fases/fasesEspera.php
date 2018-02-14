<?php

namespace AppBundle\Entity\Fase;;

use Doctrine\ORM\Mapping as ORM;

/**
 * FasesEnEspera
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Respository\FasesEnEsperaRepository")
 */
class FasesEnEspera
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
     * @var integer
     *
     * @ORM\Column(name="proyecto_id", type="integer")
     */
    private $proyectoId;

    /**
     * @var integer
     *
     * @ORM\Column(name="fases_sip_id", type="integer")
     */
    private $fasesSipId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dias", type="date")
     */
    private $dias;


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
     * Set proyectoId
     *
     * @param integer $proyectoId
     * @return FasesEnEspera
     */
    public function setProyectoId($proyectoId)
    {
        $this->proyectoId = $proyectoId;
    
        return $this;
    }

    /**
     * Get proyectoId
     *
     * @return integer 
     */
    public function getProyectoId()
    {
        return $this->proyectoId;
    }

    /**
     * Set fasesSipId
     *
     * @param integer $fasesSipId
     * @return FasesEnEspera
     */
    public function setFasesSipId($fasesSipId)
    {
        $this->fasesSipId = $fasesSipId;
    
        return $this;
    }

    /**
     * Get fasesSipId
     *
     * @return integer 
     */
    public function getFasesSipId()
    {
        return $this->fasesSipId;
    }

    /**
     * Set dias
     *
     * @param \DateTime $dias
     * @return FasesEnEspera
     */
    public function setDias($dias)
    {
        $this->dias = $dias;
    
        return $this;
    }

    /**
     * Get dias
     *
     * @return \DateTime 
     */
    public function getDias()
    {
        return $this->dias;
    }
}
