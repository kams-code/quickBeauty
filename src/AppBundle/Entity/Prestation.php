<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Prestation
 *
 * @ORM\Table(name="prestation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PrestationRepository")
 */
class Prestation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="codePres", type="string", length=255, unique=true)
     */
    private $codePres;

    /**
     * @var string
     *
     * @ORM\Column(name="designationPres", type="string", length=255)
     */
    private $designationPres;

    /**
     * @var string
     *
     * @ORM\Column(name="descPres", type="string", length=255)
     */
    private $descPres;

    /**
     * @var int
     *
     * @ORM\Column(name="montantPres", type="integer")
     */
    private $montantPres;

    /**
     * @var string
     *
     * @ORM\Column(name="imagePres", type="string", length=255)
     * * @Assert\Image(
     *     minWidth = 200,
     *     maxWidth = 600,
     *     minHeight = 200,
     *     maxHeight = 600
     * )
     * @Assert\File(mimeTypes={ "image/jpeg" })
     * 
     */
    private $imagePres;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datePres", type="datetime")
     */
    private $datePres;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set codePres
     *
     * @param string $codePres
     *
     * @return Prestation
     */
    public function setCodePres($codePres)
    {
        $this->codePres = $codePres;

        return $this;
    }

    /**
     * Get codePres
     *
     * @return string
     */
    public function getCodePres()
    {
        return $this->codePres;
    }

    /**
     * Set designationPres
     *
     * @param string $designationPres
     *
     * @return Prestation
     */
    public function setDesignationPres($designationPres)
    {
        $this->designationPres = $designationPres;

        return $this;
    }

    /**
     * Get designationPres
     *
     * @return string
     */
    public function getDesignationPres()
    {
        return $this->designationPres;
    }

    /**
     * Set descPres
     *
     * @param string $descPres
     *
     * @return Prestation
     */
    public function setDescPres($descPres)
    {
        $this->descPres = $descPres;

        return $this;
    }

    /**
     * Get descPres
     *
     * @return string
     */
    public function getDescPres()
    {
        return $this->descPres;
    }

    /**
     * Set montantPres
     *
     * @param integer $montantPres
     *
     * @return Prestation
     */
    public function setMontantPres($montantPres)
    {
        $this->montantPres = $montantPres;

        return $this;
    }

    /**
     * Get montantPres
     *
     * @return int
     */
    public function getMontantPres()
    {
        return $this->montantPres;
    }

    /**
     * Set imagePres
     *
     * @param string $imagePres
     *
     * @return Prestation
     */
    public function setImagePres($imagePres)
    {
        $this->imagePres = $imagePres;

        return $this;
    }

    /**
     * Get imagePres
     *
     * @return string
     */
    public function getImagePres()
    {
        return $this->imagePres;
    }

    /**
     * Set datePres
     *
     * @param \DateTime $datePres
     *
     * @return Prestation
     */
    public function setDatePres($datePres)
    {
        $this->datePres = $datePres;

        return $this;
    }

    /**
     * Get datePres
     *
     * @return \DateTime
     */
    public function getDatePres()
    {
        return $this->datePres;
    }
}
