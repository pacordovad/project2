<?php

namespace Petit\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Role
 *
 * @ORM\Table(name="role")
 * @ORM\Entity
 */
class Role
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_ROLE", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="NAME_ROLE", type="string", length=64, nullable=false)
     */
    private $nameRole;



    /**
     * Get idRole
     *
     * @return integer 
     */
    public function getIdRole()
    {
        return $this->idRole;
    }

    /**
     * Set nameRole
     *
     * @param string $nameRole
     * @return Role
     */
    public function setNameRole($nameRole)
    {
        $this->nameRole = $nameRole;

        return $this;
    }

    /**
     * Get nameRole
     *
     * @return string 
     */
    public function getNameRole()
    {
        return $this->nameRole;
    }
    
    public function __toString() {
        return $this->nameRole;
    }
}
