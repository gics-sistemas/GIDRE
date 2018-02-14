<?php

namespace AppBundle\Entity\Proyecto;



use Doctrine\ORM\Mapping as ORM;

/**
 * ProyectosCerrados
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Proyecto\ProyectosCerradosRepository")
 */
class ProyectosCerrados
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_cierre", type="date")
     */
    private $fechaCierre;


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
     * Set fechaCierre
     *
     * @param \DateTime $fechaCierre
     * @return ProyectosCerrados
     */
    public function setFechaCierre($fechaCierre)
    {
        $this->fechaCierre = $fechaCierre;
    
        return $this;
    }

    /**
     * Get fechaCierre
     *
     * @return \DateTime 
     */
    public function getFechaCierre()
    {
        return $this->fechaCierre;
    }
}
