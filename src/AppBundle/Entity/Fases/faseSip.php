<?php

namespace AppBundle\Entity\Fase;;

use Doctrine\ORM\Mapping as ORM;

/**
 * FasesSip
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Intranet\IndicadoresGidreBundle\Entity\FasesSipRepository")
 */
class fases_sip
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
     * @ORM\Column(name="departamento_id", type="integer")
     */
    private $departamentoId;

    /**
     * @var integer
     *
     * @ORM\Column(name="proyecto_id", type="integer")
     */
    private $proyectoId;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_tarea", type="string", length=255)
     */
    private $nombreTarea;

    /**
     * @var string
     *
     * @ORM\Column(name="estatu_tarea", type="string", length=255)
     */
    private $estatuTarea;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_inicio", type="date")
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_fin", type="datetime")
     */
    private $fechaFin;


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
     * Set departamentoId
     *
     * @param integer $departamentoId
     * @return FasesSip
     */
    public function setDepartamentoId($departamentoId)
    {
        $this->departamentoId = $departamentoId;
    
        return $this;
    }

    /**
     * Get departamentoId
     *
     * @return integer 
     */
    public function getDepartamentoId()
    {
        return $this->departamentoId;
    }

    /**
     * Set proyectoId
     *
     * @param integer $proyectoId
     * @return FasesSip
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
     * Set nombreTarea
     *
     * @param string $nombreTarea
     * @return FasesSip
     */
    public function setNombreTarea($nombreTarea)
    {
        $this->nombreTarea = $nombreTarea;
    
        return $this;
    }

    /**
     * Get nombreTarea
     *
     * @return string 
     */
    public function getNombreTarea()
    {
        return $this->nombreTarea;
    }

    /**
     * Set estatuTarea
     *
     * @param string $estatuTarea
     * @return fasesSip
     */
    public function setEstatuTarea($estatuTarea)
    {
        $this->estatuTarea = $estatuTarea;
    
        return $this;
    }

    /**
     * Get estatuTarea
     *
     * @return string 
     */
    public function getEstatuTarea()
    {
        return $this->estatuTarea;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return FasesSip
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;
    
        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime 
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaFin
     *
     * @param \DateTime $fechaFin
     * @return FasesSip
     */
    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;
    
        return $this;
    }

    /**
     * Get fechaFin
     *
     * @return \DateTime 
     */
    public function getFechaFin()
    {
        return $this->fechaFin;
    }
}
