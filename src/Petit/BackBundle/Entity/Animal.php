<?php

namespace Petit\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Animal
 *
 * @ORM\Table(name="animal")
 * @ORM\Entity
 */
class Animal
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_ANIMAL", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="NAME_ANIMAL", type="string", length=64, nullable=false)
     */
    private $nameAnimal;



    /**
     * Get idAnimal
     *
     * @return integer 
     */
    public function getIdAnimal()
    {
        return $this->idAnimal;
    }

    /**
     * Set nameAnimal
     *
     * @param string $nameAnimal
     * @return Animal
     */
    public function setNameAnimal($nameAnimal)
    {
        $this->nameAnimal = $nameAnimal;

        return $this;
    }

    /**
     * Get nameAnimal
     *
     * @return string 
     */
    public function getNameAnimal()
    {
        return $this->nameAnimal;
    }
    
    public function __toString() {
        return $this->nameAnimal;
    }

}
