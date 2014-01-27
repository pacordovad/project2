<?php

namespace Petit\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Race
 *
 * @ORM\Table(name="race", indexes={@ORM\Index(name="FK_RELATIONSHIP_4", columns={"ID_ANIMAL"})})
 * @ORM\Entity
 */
class Race
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_RACE", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="NAME_RACE", type="string", length=128, nullable=false)
     */
    private $nameRace;

    /**
     * @var string
     *
     * @ORM\Column(name="PICTURE_RACE", type="string", length=64, nullable=true)
     */
    private $pictureRace;

    /**
     * @var \Petit\BackBundle\Entity\Animal
     *
     * @ORM\ManyToOne(targetEntity="Petit\BackBundle\Entity\Animal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_ANIMAL", referencedColumnName="ID_ANIMAL")
     * })
     */
    private $idAnimal;



    /**
     * Get idRace
     *
     * @return integer 
     */
    public function getIdRace()
    {
        return $this->idRace;
    }

    /**
     * Set nameRace
     *
     * @param string $nameRace
     * @return Race
     */
    public function setNameRace($nameRace)
    {
        $this->nameRace = $nameRace;

        return $this;
    }

    /**
     * Get nameRace
     *
     * @return string 
     */
    public function getNameRace()
    {
        return $this->nameRace;
    }

    /**
     * Set pictureRace
     *
     * @param string $pictureRace
     * @return Race
     */
    public function setPictureRace($pictureRace)
    {
        $this->pictureRace = $pictureRace;

        return $this;
    }

    /**
     * Get pictureRace
     *
     * @return string 
     */
    public function getPictureRace()
    {
        return $this->pictureRace;
    }

    /**
     * Set idAnimal
     *
     * @param \Petit\BackBundle\Entity\Animal $idAnimal
     * @return Race
     */
    public function setIdAnimal(\Petit\BackBundle\Entity\Animal $idAnimal = null)
    {
        $this->idAnimal = $idAnimal;

        return $this;
    }

    /**
     * Get idAnimal
     *
     * @return \Petit\BackBundle\Entity\Animal 
     */
    public function getIdAnimal()
    {
        return $this->idAnimal;
    }
}
