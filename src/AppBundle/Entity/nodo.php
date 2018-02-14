<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * nodo
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\nodoRepository")
 */
class nodo
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
     * @ORM\Column(name="nodo", type="string", length=255)
     */
    private $nodo;


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
     * Set nodo
     *
     * @param string $nodo
     * @return nodo
     */
    public function setNodo($nodo)
    {
        $this->nodo = $nodo;
    
        return $this;
    }

    /**
     * Get nodo
     *
     * @return string 
     */
    public function getNodo()
    {
        return $this->nodo;
    }
}
