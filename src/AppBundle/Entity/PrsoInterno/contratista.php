<?php

namespace AppBundle\Entity\PrsoInterno;

use Doctrine\ORM\Mapping as ORM;

/**
 * contratista
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PrsoInterno\contratistaRepository")
 */
class contratista
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
     * @ORM\Column(name="contratista", type="string", length=255)
     */
    private $contratista;


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
     * Set contratista
     *
     * @param string $contratista
     * @return contratista
     */
    public function setContratista($contratista)
    {
        $this->contratista = $contratista;
    
        return $this;
    }

    /**
     * Get contratista
     *
     * @return string 
     */
    public function getContratista()
    {
        return $this->contratista;
    }
}
