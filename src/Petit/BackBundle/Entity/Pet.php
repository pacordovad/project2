<?php

namespace Petit\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pet
 *
 * @ORM\Table(name="pet", indexes={@ORM\Index(name="FK_RELATIONSHIP_2", columns={"ID_PERSON"}), @ORM\Index(name="FK_RELATIONSHIP_3", columns={"ID_RACE"})})
 * @ORM\Entity
 */
class Pet
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_PET", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="NAME_PET", type="string", length=60, nullable=true)
     */
    private $namePet;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="BIRTHDAY_PET", type="date", nullable=true)
     */
    private $birthdayPet;

    /**
     * @var string
     *
     * @ORM\Column(name="PICTURE", type="string", length=64, nullable=true)
     */
    private $picture;

    /**
     * @var string
     *
     * @ORM\Column(name="CODE", type="string", length=6, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="PECULIARITY", type="text", nullable=true)
     */
    private $peculiarity;

    /**
     * @var \Petit\BackBundle\Entity\Race
     *
     * @ORM\ManyToOne(targetEntity="Petit\BackBundle\Entity\Race")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_RACE", referencedColumnName="ID_RACE")
     * })
     */
    private $idRace;

    /**
     * @var \Petit\BackBundle\Entity\Person
     *
     * @ORM\ManyToOne(targetEntity="Petit\BackBundle\Entity\Person")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_PERSON", referencedColumnName="ID_PERSON")
     * })
     */
    private $idPerson;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="UPDATED_AT", type="datetime", nullable=false)
     */
    private $updatedAt;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATED_AT", type="datetime", nullable=false)
     */
    private $createdAt;
    
    public function getUpdatedAt() {
        return $this->updatedAt;
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    public function setUpdatedAt(\DateTime $updatedAt) {
        $this->updatedAt = $updatedAt;
    }

    public function setCreatedAt(\DateTime $createdAt) {
        $this->createdAt = $createdAt;
    }

    /**
     * Get idPet
     *
     * @return integer 
     */
    public function getIdPet()
    {
        return $this->idPet;
    }

    /**
     * Set namePet
     *
     * @param string $namePet
     * @return Pet
     */
    public function setNamePet($namePet)
    {
        $this->namePet = $namePet;

        return $this;
    }

    /**
     * Get namePet
     *
     * @return string 
     */
    public function getNamePet()
    {
        return $this->namePet;
    }

    /**
     * Set birthdayPet
     *
     * @param \DateTime $birthdayPet
     * @return Pet
     */
    public function setBirthdayPet($birthdayPet)
    {
        $this->birthdayPet = $birthdayPet;

        return $this;
    }

    /**
     * Get birthdayPet
     *
     * @return \DateTime 
     */
    public function getBirthdayPet()
    {
        return $this->birthdayPet;
    }

    /**
     * Set picture
     *
     * @param string $picture
     * @return Pet
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string 
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return Pet
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set peculiarity
     *
     * @param string $peculiarity
     * @return Pet
     */
    public function setPeculiarity($peculiarity)
    {
        $this->peculiarity = $peculiarity;

        return $this;
    }

    /**
     * Get peculiarity
     *
     * @return string 
     */
    public function getPeculiarity()
    {
        return $this->peculiarity;
    }

    /**
     * Set idRace
     *
     * @param \Petit\BackBundle\Entity\Race $idRace
     * @return Pet
     */
    public function setIdRace(\Petit\BackBundle\Entity\Race $idRace = null)
    {
        $this->idRace = $idRace;

        return $this;
    }

    /**
     * Get idRace
     *
     * @return \Petit\BackBundle\Entity\Race 
     */
    public function getIdRace()
    {
        return $this->idRace;
    }

    /**
     * Set idPerson
     *
     * @param \Petit\BackBundle\Entity\Person $idPerson
     * @return Pet
     */
    public function setIdPerson(\Petit\BackBundle\Entity\Person $idPerson = null)
    {
        $this->idPerson = $idPerson;

        return $this;
    }

    /**
     * Get idPerson
     *
     * @return \Petit\BackBundle\Entity\Person 
     */
    public function getIdPerson()
    {
        return $this->idPerson;
    }
}
