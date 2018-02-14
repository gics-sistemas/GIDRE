<?php

namespace AppBundle\Entity\Cliente;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoCliente
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Cliente\TipoClienteRepository")
 */
class tipo_cliente
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
     * @ORM\Column(name="tipo_cliente", type="string", length=255)
     */
    private $tipoCliente;


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
     * Set tipoCliente
     *
     * @param string $tipoCliente
     * @return TipoCliente
     */
    public function setTipoCliente($tipoCliente)
    {
        $this->tipoCliente = $tipoCliente;
    
        return $this;
    }

    /**
     * Get tipoCliente
     *
     * @return string 
     */
    public function getTipoCliente()
    {
        return $this->tipoCliente;
    }
}
