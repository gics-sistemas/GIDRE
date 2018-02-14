<?php

namespace AppBundle\Entity\PrsoInterno;

use Doctrine\ORM\Mapping as ORM;

/**
 * supervisor
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PrsoInterno\supervisorRepository")
 */
class supervisor
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
     * @ORM\Column(name="supervisor", type="string", length=255)
     */
    private $supervisor;


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
     * Set supervisor
     *
     * @param string $supervisor
     * @return supervisor
     */
    public function setSupervisor($supervisor)
    {
        $this->supervisor = $supervisor;
    
        return $this;
    }

    /**
     * Get supervisor
     *
     * @return string 
     */
    public function getSupervisor()
    {
        return $this->supervisor;
    }
}
