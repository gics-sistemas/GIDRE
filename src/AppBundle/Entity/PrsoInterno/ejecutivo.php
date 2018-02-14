<?php

namespace AppBundle\Entity\PrsoInterno;

use Doctrine\ORM\Mapping as ORM;

/**
 * ejecutivo
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PrsoInterno\ejecutivoRepository")
 */
class ejecutivo
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
     * @ORM\Column(name="ejecutivo", type="string", length=255)
     */
    private $ejecutivo;


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
     * Set ejecutivo
     *
     * @param string $ejecutivo
     * @return ejecutivo
     */
    public function setEjecutivo($ejecutivo)
    {
        $this->ejecutivo = $ejecutivo;
    
        return $this;
    }

    /**
     * Get ejecutivo
     *
     * @return string 
     */
    public function getEjecutivo()
    {
        return $this->ejecutivo;
    }
}
