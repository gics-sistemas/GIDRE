<?php

namespace AppBundle\Entity\Cliente;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClienteGobiernoDetalle
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Cliente\ClienteGobiernoDetalleRepository")
 */
class ClienteGobiernoDetalle
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
     * @ORM\Column(name="propuestas_comercial", type="string", length=255)
     */
    private $propuestasComercial;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_registro", type="date")
     */
    private $fechaRegistro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mes_registro", type="date")
     */
    private $mesRegistro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_cierre_ing", type="date")
     */
    private $fechaCierreIng;

    /**
     * @var string
     *
     * @ORM\Column(name="dias", type="string", length=255)
     */
    private $dias;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mes_cierre", type="date")
     */
    private $mesCierre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_aceptacion_imp", type="date")
     */
    private $fechaAceptacionImp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_publicacion_atp", type="date")
     */
    private $fechaPublicacionAtp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_contratista", type="date")
     */
    private $fechaContratista;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_firma", type="date")
     */
    private $fechaFirma;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dias_atp", type="date")
     */
    private $diasAtp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dias_detalle", type="date")
     */
    private $diasDetalle;

    /**
     * @var string
     *
     * @ORM\Column(name="lob", type="string", length=255)
     */
    private $lob;

    /**
     * @var string
     *
     * @ORM\Column(name="region_adm", type="string", length=255)
     */
    private $regionAdm;

    /**
     * @var string
     *
     * @ORM\Column(name="region_instalacion", type="string", length=255)
     */
    private $regionInstalacion;

    /**
     * @var string
     *
     * @ORM\Column(name="in_", type="string", length=255)
     */
    private $in;
    /**
     * @var string
     *
     * @ORM\Column(name="out_", type="string", length=255)
     */
    private $out;

    /**
     * @var string
     *
     * @ORM\Column(name="nro_canales", type="string", length=255)
     */
    private $nroCanales;

    /**
     * @var string
     *
     * @ORM\Column(name="acceso", type="string", length=255)
     */
    private $acceso;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_referencial", type="string", length=255)
     */
    private $nombreReferencial;

    /**
     * @var string
     *
     * @ORM\Column(name="cir", type="string", length=255)
     */
    private $cir;

    /**
     * @var string
     *
     * @ORM\Column(name="resultado", type="string", length=255)
     */
    private $resultado;

    /**
     * @var string
     *
     * @ORM\Column(name="celda_original", type="string", length=255)
     */
    private $celdaOriginal;

    /**
     * @var string
     *
     * @ORM\Column(name="seudonimo", type="string", length=255)
     */
    private $seudonimo;


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
     * Set propuestasComercial
     *
     * @param string $propuestasComercial
     * @return ClienteGobiernoDetalle
     */
    public function setPropuestasComercial($propuestasComercial)
    {
        $this->propuestasComercial = $propuestasComercial;
    
        return $this;
    }

    /**
     * Get propuestasComercial
     *
     * @return string 
     */
    public function getPropuestasComercial()
    {
        return $this->propuestasComercial;
    }

    /**
     * Set fechaRegistro
     *
     * @param \DateTime $fechaRegistro
     * @return ClienteGobiernoDetalle
     */
    public function setFechaRegistro($fechaRegistro)
    {
        $this->fechaRegistro = $fechaRegistro;
    
        return $this;
    }

    /**
     * Get fechaRegistro
     *
     * @return \DateTime 
     */
    public function getFechaRegistro()
    {
        return $this->fechaRegistro;
    }

    /**
     * Set mesRegistro
     *
     * @param \DateTime $mesRegistro
     * @return ClienteGobiernoDetalle
     */
    public function setMesRegistro($mesRegistro)
    {
        $this->mesRegistro = $mesRegistro;
    
        return $this;
    }

    /**
     * Get mesRegistro
     *
     * @return \DateTime 
     */
    public function getMesRegistro()
    {
        return $this->mesRegistro;
    }

    /**
     * Set fechaCierreIng
     *
     * @param \DateTime $fechaCierreIng
     * @return ClienteGobiernoDetalle
     */
    public function setFechaCierreIng($fechaCierreIng)
    {
        $this->fechaCierreIng = $fechaCierreIng;
    
        return $this;
    }

    /**
     * Get fechaCierreIng
     *
     * @return \DateTime 
     */
    public function getFechaCierreIng()
    {
        return $this->fechaCierreIng;
    }

    /**
     * Set dias
     *
     * @param string $dias
     * @return ClienteGobiernoDetalle
     */
    public function setDias($dias)
    {
        $this->dias = $dias;
    
        return $this;
    }

    /**
     * Get dias
     *
     * @return string 
     */
    public function getDias()
    {
        return $this->dias;
    }

    /**
     * Set mesCierre
     *
     * @param \DateTime $mesCierre
     * @return ClienteGobiernoDetalle
     */
    public function setMesCierre($mesCierre)
    {
        $this->mesCierre = $mesCierre;
    
        return $this;
    }

    /**
     * Get mesCierre
     *
     * @return \DateTime 
     */
    public function getMesCierre()
    {
        return $this->mesCierre;
    }

    /**
     * Set fechaAceptacionImp
     *
     * @param \DateTime $fechaAceptacionImp
     * @return ClienteGobiernoDetalle
     */
    public function setFechaAceptacionImp($fechaAceptacionImp)
    {
        $this->fechaAceptacionImp = $fechaAceptacionImp;
    
        return $this;
    }

    /**
     * Get fechaAceptacionImp
     *
     * @return \DateTime 
     */
    public function getFechaAceptacionImp()
    {
        return $this->fechaAceptacionImp;
    }

    /**
     * Set fechaPublicacionAtp
     *
     * @param \DateTime $fechaPublicacionAtp
     * @return ClienteGobiernoDetalle
     */
    public function setFechaPublicacionAtp($fechaPublicacionAtp)
    {
        $this->fechaPublicacionAtp = $fechaPublicacionAtp;
    
        return $this;
    }

    /**
     * Get fechaPublicacionAtp
     *
     * @return \DateTime 
     */
    public function getFechaPublicacionAtp()
    {
        return $this->fechaPublicacionAtp;
    }

    /**
     * Set fechaContratista
     *
     * @param \DateTime $fechaContratista
     * @return ClienteGobiernoDetalle
     */
    public function setFechaContratista($fechaContratista)
    {
        $this->fechaContratista = $fechaContratista;
    
        return $this;
    }

    /**
     * Get fechaContratista
     *
     * @return \DateTime 
     */
    public function getFechaContratista()
    {
        return $this->fechaContratista;
    }

    /**
     * Set fechaFirma
     *
     * @param \DateTime $fechaFirma
     * @return ClienteGobiernoDetalle
     */
    public function setFechaFirma($fechaFirma)
    {
        $this->fechaFirma = $fechaFirma;
    
        return $this;
    }

    /**
     * Get fechaFirma
     *
     * @return \DateTime 
     */
    public function getFechaFirma()
    {
        return $this->fechaFirma;
    }

    /**
     * Set diasAtp
     *
     * @param \DateTime $diasAtp
     * @return clienteGobiernoDetalle
     */
    public function setDiasAtp($diasAtp)
    {
        $this->diasAtp = $diasAtp;
    
        return $this;
    }

    /**
     * Get diasAtp
     *
     * @return \DateTime 
     */
    public function getDiasAtp()
    {
        return $this->diasAtp;
    }

    /**
     * Set diasDetalle
     *
     * @param \DateTime $diasDetalle
     * @return ClienteGobiernoDetalle
     */
    public function setDiasDetalle($diasDetalle)
    {
        $this->diasDetalle = $diasDetalle;
    
        return $this;
    }

    /**
     * Get diasDetalle
     *
     * @return \DateTime 
     */
    public function getDiasDetalle()
    {
        return $this->diasDetalle;
    }

    /**
     * Set lob
     *
     * @param string $lob
     * @return ClienteGobiernoDetalle
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
     * Set regionAdm
     *
     * @param string $regionAdm
     * @return ClienteGobiernoDetalle
     */
    public function setRegionAdm($regionAdm)
    {
        $this->regionAdm = $regionAdm;
    
        return $this;
    }

    /**
     * Get regionAdm
     *
     * @return string 
     */
    public function getRegionAdm()
    {
        return $this->regionAdm;
    }

    /**
     * Set regionInstalacion
     *
     * @param string $regionInstalacion
     * @return ClienteGobiernoDetalle
     */
    public function setRegionInstalacion($regionInstalacion)
    {
        $this->regionInstalacion = $regionInstalacion;
    
        return $this;
    }

    /**
     * Get regionInstalacion
     *
     * @return string 
     */
    public function getRegionInstalacion()
    {
        return $this->regionInstalacion;
    }

    /**
     * Set in
     *
     * @param string $in
     * @return ClienteGobiernoDetalle
     */
    public function setIn($in)
    {
        $this->in = $in;
    
        return $this;
    }

    /**
     * Get in
     *
     * @return string 
     */
    public function getIn()
    {
        return $this->in;
    }

    /**
     * Set on
     *
     * @param string $on
     * @return ClienteGobiernoDetalle
     */
    public function setOn($on)
    {
        $this->on = $on;
    
        return $this;
    }

    /**
     * Get on
     *
     * @return string 
     */
    public function getOn()
    {
        return $this->on;
    }

    /**
     * Set out
     *
     * @param string $out
     * @return ClienteGobiernoDetalle
     */
    public function setOut($out)
    {
        $this->out = $out;
    
        return $this;
    }

    /**
     * Get out
     *
     * @return string 
     */
    public function getOut()
    {
        return $this->out;
    }

    /**
     * Set nroCanales
     *
     * @param string $nroCanales
     * @return clienteGobiernoDetalle
     */
    public function setNroCanales($nroCanales)
    {
        $this->nroCanales = $nroCanales;
    
        return $this;
    }

    /**
     * Get nroCanales
     *
     * @return string 
     */
    public function getNroCanales()
    {
        return $this->nroCanales;
    }

    /**
     * Set acceso
     *
     * @param string $acceso
     * @return ClienteGobiernoDetalle
     */
    public function setAcceso($acceso)
    {
        $this->acceso = $acceso;
    
        return $this;
    }

    /**
     * Get acceso
     *
     * @return string 
     */
    public function getAcceso()
    {
        return $this->acceso;
    }

    /**
     * Set nombreReferencial
     *
     * @param string $nombreReferencial
     * @return clienteGobiernoDetalle
     */
    public function setNombreReferencial($nombreReferencial)
    {
        $this->nombreReferencial = $nombreReferencial;
    
        return $this;
    }

    /**
     * Get nombreReferencial
     *
     * @return string 
     */
    public function getNombreReferencial()
    {
        return $this->nombreReferencial;
    }

    /**
     * Set cir
     *
     * @param string $cir
     * @return ClienteGobiernoDetalle
     */
    public function setCir($cir)
    {
        $this->cir = $cir;
    
        return $this;
    }

    /**
     * Get cir
     *
     * @return string 
     */
    public function getCir()
    {
        return $this->cir;
    }

    /**
     * Set resultado
     *
     * @param string $resultado
     * @return clienteGobiernoDetalle
     */
    public function setResultado($resultado)
    {
        $this->resultado = $resultado;
    
        return $this;
    }

    /**
     * Get resultado
     *
     * @return string 
     */
    public function getResultado()
    {
        return $this->resultado;
    }

    /**
     * Set celdaOriginal
     *
     * @param string $celdaOriginal
     * @return clienteGobiernoDetalle
     */
    public function setCeldaOriginal($celdaOriginal)
    {
        $this->celdaOriginal = $celdaOriginal;
    
        return $this;
    }

    /**
     * Get celdaOriginal
     *
     * @return string 
     */
    public function getCeldaOriginal()
    {
        return $this->celdaOriginal;
    }

    /**
     * Set seudonimo
     *
     * @param string $seudonimo
     * @return clienteGobiernoDetalle
     */
    public function setSeudonimo($seudonimo)
    {
        $this->seudonimo = $seudonimo;
    
        return $this;
    }

    /**
     * Get seudonimo
     *
     * @return string 
     */
    public function getSeudonimo()
    {
        return $this->seudonimo;
    }
}
