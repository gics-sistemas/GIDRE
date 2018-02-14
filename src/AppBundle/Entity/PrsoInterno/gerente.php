<?php

namespace AppBundle\Entity\PrsoInterno;

use Doctrine\ORM\Mapping as ORM;

/**
 * gerente
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PrsoInterno\gerenteRepository")
 */
class gerente
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
     * @ORM\Column(name="gerente", type="string", length=255)
     */
    private $gerente;


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
     * Set gerente
     *
     * @param string $gerente
     * @return gerente
     */
    public function setGerente($gerente)
    {
        $this->gerente = $gerente;
    
        return $this;
    }

    /**
     * Get gerente
     *
     * @return string 
     */
    public function getGerente()
    {
        return $this->gerente;
    }
}
