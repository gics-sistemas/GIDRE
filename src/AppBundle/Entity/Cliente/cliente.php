<?php

namespace AppBundle\Entity\Cliente;

use Doctrine\ORM\Mapping as ORM;

/**
 * cliente
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Cliente\clienteRepository")
 */
class cliente
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
     * @ORM\Column(name="cliente", type="string", length=255)
     */
    private $cliente;

    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=255)
     */
    private $region;

    /**
     * @var string
     *
     * @ORM\Column(name="localidad", type="string", length=255)
     */
    private $localidad;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=255)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="municipio", type="string", length=255)
     */
    private $municipio;

    /**
     * @var string
     *
     * @ORM\Column(name="lob", type="string", length=255)
     */
    private $lob;

    /**
     * @var string
     *
     * @ORM\Column(name="cpa_cabecera", type="string", length=255)
     */
    private $cpaCabecera;

    /**
     * @var string
     *
     * @ORM\Column(name="cpa_entrante", type="string", length=255)
     */
    private $cpaEntrante;

    /**
     * @var string
     *
     * @ORM\Column(name="cpa_saliente", type="string", length=255)
     */
    private $cpaSaliente;

    /**
     * @var string
     *
     * @ORM\Column(name="ciudad", type="string", length=255)
     */
    private $ciudad;


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
     * Set cliente
     *
     * @param string $cliente
     * @return cliente
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    
        return $this;
    }

    /**
     * Get cliente
     *
     * @return string 
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Set region
     *
     * @param string $region
     * @return cliente
     */
    public function setRegion($region)
    {
        $this->region = $region;
    
        return $this;
    }

    /**
     * Get region
     *
     * @return string 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set localidad
     *
     * @param string $localidad
     * @return cliente
     */
    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;
    
        return $this;
    }

    /**
     * Get localidad
     *
     * @return string 
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return cliente
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    
        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set municipio
     *
     * @param string $municipio
     * @return cliente
     */
    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;
    
        return $this;
    }

    /**
     * Get municipio
     *
     * @return string 
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }

    /**
     * Set lob
     *
     * @param string $lob
     * @return cliente
     */
    public function setLob($lob)
    {
        $this->lob = $lob;
    
        return $this;
    }

    /**
     * Get lob
     *
     * @return string 
     */
    public function getLob()
    {
        return $this->lob;
    }

    /**
     * Set cpaCabecera
     *
     * @param string $cpaCabecera
     * @return cliente
     */
    public function setCpaCabecera($cpaCabecera)
    {
        $this->cpaCabecera = $cpaCabecera;
    
        return $this;
    }

    /**
     * Get cpaCabecera
     *
     * @return string 
     */
    public function getCpaCabecera()
    {
        return $this->cpaCabecera;
    }

    /**
     * Set cpaEntrante
     *
     * @param string $cpaEntrante
     * @return cliente
     */
    public function setCpaEntrante($cpaEntrante)
    {
        $this->cpaEntrante = $cpaEntrante;
    
        return $this;
    }

    /**
     * Get cpaEntrante
     *
     * @return string 
     */
    public function getCpaEntrante()
    {
        return $this->cpaEntrante;
    }

    /**
     * Set cpaSaliente
     *
     * @param string $cpaSaliente
     * @return cliente
     */
    public function setCpaSaliente($cpaSaliente)
    {
        $this->cpaSaliente = $cpaSaliente;
    
        return $this;
    }

    /**
     * Get cpaSaliente
     *
     * @return string 
     */
    public function getCpaSaliente()
    {
        return $this->cpaSaliente;
    }

    /**
     * Set ciudad
     *
     * @param string $ciudad
     * @return cliente
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;
    
        return $this;
    }

    /**
     * Get ciudad
     *
     * @return string 
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }
}
