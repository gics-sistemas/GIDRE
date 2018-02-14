<?php

namespace AppBundle\Entity\PrsoInterno;

use Doctrine\ORM\Mapping as ORM;

/**
 * lider
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PrsoInterno\liderRepository")
 */
class lider
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
     * @ORM\Column(name="lider", type="string", length=255)
     */
    private $lider;


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
     * Set lider
     *
     * @param string $lider
     * @return lider
     */
    public function setLider($lider)
    {
        $this->lider = $lider;
    
        return $this;
    }

    /**
     * Get lider
     *
     * @return string 
     */
    public function getLider()
    {
        return $this->lider;
    }
}
