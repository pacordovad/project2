<?php

namespace Petit\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Person
 *
 * @ORM\Table(name="person", indexes={@ORM\Index(name="FK_USER_PERSON", columns={"ID_USER"})})
 * @ORM\Entity
 */
class Person
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_PERSON", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="NAME", type="string", length=64, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="LAST_NAME", type="string", length=64, nullable=false)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="CELL_PHONE", type="string", length=18, nullable=false)
     */
    private $cellPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="HOUSE_PHONE", type="string", length=18, nullable=true)
     */
    private $housePhone;

    /**
     * @var string
     *
     * @ORM\Column(name="JOB_PHONE", type="string", length=18, nullable=true)
     */
    private $jobPhone;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="BIRTHDAY", type="date", nullable=true)
     */
    private $birthday;

    /**
     * @var string
     *
     * @ORM\Column(name="ADDRESS", type="text", nullable=true)
     */
    private $address;

    /**
     * @var boolean
     *
     * @ORM\Column(name="GENDER", type="boolean", nullable=false)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="FACEBOOK_ACCOUNT", type="string", length=64, nullable=true)
     */
    private $facebookAccount;

    /**
     * @var string
     *
     * @ORM\Column(name="TWITTER_ACCOUNT", type="string", length=64, nullable=true)
     */
    private $twitterAccount;

    /**
     * @var \Petit\BackBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="Petit\BackBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_USER", referencedColumnName="ID_USER")
     * })
     */
    private $idUser;



    /**
     * Get idPerson
     *
     * @return integer 
     */
    public function getIdPerson()
    {
        return $this->idPerson;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Person
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Person
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set cellPhone
     *
     * @param string $cellPhone
     * @return Person
     */
    public function setCellPhone($cellPhone)
    {
        $this->cellPhone = $cellPhone;

        return $this;
    }

    /**
     * Get cellPhone
     *
     * @return string 
     */
    public function getCellPhone()
    {
        return $this->cellPhone;
    }

    /**
     * Set housePhone
     *
     * @param string $housePhone
     * @return Person
     */
    public function setHousePhone($housePhone)
    {
        $this->housePhone = $housePhone;

        return $this;
    }

    /**
     * Get housePhone
     *
     * @return string 
     */
    public function getHousePhone()
    {
        return $this->housePhone;
    }

    /**
     * Set jobPhone
     *
     * @param string $jobPhone
     * @return Person
     */
    public function setJobPhone($jobPhone)
    {
        $this->jobPhone = $jobPhone;

        return $this;
    }

    /**
     * Get jobPhone
     *
     * @return string 
     */
    public function getJobPhone()
    {
        return $this->jobPhone;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     * @return Person
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime 
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Person
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set gender
     *
     * @param boolean $gender
     * @return Person
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return boolean 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set facebookAccount
     *
     * @param string $facebookAccount
     * @return Person
     */
    public function setFacebookAccount($facebookAccount)
    {
        $this->facebookAccount = $facebookAccount;

        return $this;
    }

    /**
     * Get facebookAccount
     *
     * @return string 
     */
    public function getFacebookAccount()
    {
        return $this->facebookAccount;
    }

    /**
     * Set twitterAccount
     *
     * @param string $twitterAccount
     * @return Person
     */
    public function setTwitterAccount($twitterAccount)
    {
        $this->twitterAccount = $twitterAccount;

        return $this;
    }

    /**
     * Get twitterAccount
     *
     * @return string 
     */
    public function getTwitterAccount()
    {
        return $this->twitterAccount;
    }

    /**
     * Set idUser
     *
     * @param \Petit\BackBundle\Entity\User $idUser
     * @return Person
     */
    public function setIdUser(\Petit\BackBundle\Entity\User $idUser = null)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return \Petit\BackBundle\Entity\User 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }
}
