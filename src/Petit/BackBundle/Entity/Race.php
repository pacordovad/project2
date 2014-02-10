<?php

namespace Petit\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Race
 *
 * @ORM\Table(name="race", indexes={@ORM\Index(name="FK_RELATIONSHIP_4", columns={"ID_ANIMAL"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Race
{
    const PICTURE800 = 'x800';
    const PICTURE256 = 'x256';
    const PICTURE96 = 'x96';
    
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_RACE", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
    public function getId() {
        return $this->id;
    }
    
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

    /**
     * @Assert\File(maxSize="60000000")
     */
    private $file;

    private $temp;

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
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;
        // check if we have an old image path
        if (isset($this->pictureRace)) {
            // store the old name to delete after the update
            $this->temp = $this->pictureRace.".jpg";
            $this->pictureRace = null;
        } else {
            $this->pictureRace = 'initial';
        }
    }

    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getFile()
    {
        return $this->file;
    }

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
     * Get pictureRace
     *
     * @return string 
     */
    public function getPictureRaceBySize($size = "")
    {
        return $this->pictureRace."$size".".jpg";
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
    
    public function getAbsolutePath()
    {
        return null === $this->pictureRace
            ? null
            : $this->getUploadRootDir().'/'.$this->pictureRace;
    }

    public function getWebPath()
    {
        return null === $this->pictureRace
            ? null
            : $this->getUploadDir().'/'.$this->pictureRace;
    }
    
    public function getWebPathBySize($size = "")
    {
        return null === $this->pictureRace
            ? null
            : $this->getUploadDir().'/'.$this->getPictureRaceBySize($size);
    }

    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'uploads/races';
    }
    
    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()
    {
        if (null === $this->getFile()) {
            return;
        }

        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error
        $this->getFile()->move($this->getUploadRootDir(), $this->pictureRace.".jpg");
        
        $image = new SimpleImage();
        $image->load($this->getAbsolutePath().".jpg");
        if($image->getWidth() > 800){
            $image->resizeToWidth(800);
        }
        $image->save($this->getUploadRootDir().'/'.$this->pictureRace.'x800.jpg', IMAGETYPE_JPEG, 85);
        
        $image1 = new SimpleImage();
        $image1->load($this->getAbsolutePath().".jpg");
        if($image1->getWidth() > 256){
            $image1->resizeToWidth(256);
        }
        $image1->save($this->getUploadRootDir().'/'.$this->pictureRace.'x256.jpg', IMAGETYPE_JPEG, 90);
        
        $image2 = new SimpleImage();
        $image2->load($this->getAbsolutePath().".jpg");
        if($image2->getWidth() > 96){
            $image2->resizeToWidth(96);
        }
        $image2->save($this->getUploadRootDir().'/'.$this->pictureRace.'x96.jpg', IMAGETYPE_JPEG, 90);
        
        // check if we have an old image
        if (isset($this->temp)) {
            // delete the old image
            unlink($this->getUploadRootDir().'/'.$this->temp);
            // clear the temp image path
            $this->temp = null;
        }
        $this->file = null;
    }
    
    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        if (null !== $this->getFile()) {
            // do whatever you want to generate a unique name
            $filename = sha1(uniqid(mt_rand(), true));
            $this->pictureRace = $filename;
        }
    }
    
    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        if ($file = $this->getAbsolutePath().".jpg") {
            unlink($file);
        }
        if ($file = $this->getAbsolutePath()."x800.jpg") {
            unlink($file);
        }
        if ($file = $this->getAbsolutePath()."x256.jpg") {
            unlink($file);
        }
        if ($file = $this->getAbsolutePath()."x96.jpg") {
            unlink($file);
        }
    }
}
