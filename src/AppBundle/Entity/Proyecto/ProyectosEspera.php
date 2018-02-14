<?php

namespace AppBundle\Entity\Proyecto;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProyectosEnEspera
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Proyecto\ProyectosEnEsperaRepository")
 */
class proyectos_en_espera
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
     * @ORM\Column(name="dias_en_espera", type="string", length=255)
     */
    private $diasEnEspera;


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
     * Set diasEnEspera
     *
     * @param string $diasEnEspera
     * @return ProyectosEnEspera
     */
    public function setDiasEnEspera($diasEnEspera)
    {
        $this->diasEnEspera = $diasEnEspera;
    
        return $this;
    }

    /**
     * Get diasEnEspera
     *
     * @return string 
     */
    public function getDiasEnEspera()
    {
        return $this->diasEnEspera;
    }
}
