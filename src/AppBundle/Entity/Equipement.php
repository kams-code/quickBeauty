<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Equipement
 *
 * @ORM\Table(name="equipement")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EquipementRepository")
 */
class Equipement
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
     * @ORM\Column(name="codeEqui", type="string", length=255, unique=true)
     */
    private $codeEqui;

    /**
     * @var string
     *
     * @ORM\Column(name="designationEqui", type="string", length=255)
     */
    private $designationEqui;

    /**
     * @var int
     *
     * @ORM\Column(name="prixEqui", type="integer")
     */
    private $prixEqui;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEqui", type="datetime")
     */
    private $dateEqui;

    /**
     * @var string
     *
     * @ORM\Column(name="descEqui", type="string", length=255)
     */
    private $descEqui;

    /**
     * @var string
     *
     * @ORM\Column(name="imagePres", type="string", length=255)
     * @Assert\Image(
     *     minWidth = 200,
     *     maxWidth = 400,
     *     minHeight = 200,
     *     maxHeight = 400
     * )
     */
    protected $imageEqui;
 
    /**
   * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Fournisseur")
   * @ORM\JoinColumn(nullable=false)
   */
   private $fournisseur;


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
     * Set codeEqui
     *
     * @param string $codeEqui
     *
     * @return Equipement
     */
    public function setCodeEqui($codeEqui)
    {
        $this->codeEqui = $codeEqui;

        return $this;
    }

    /**
     * Get codeEqui
     *
     * @return string
     */
    public function getCodeEqui()
    {
        return $this->codeEqui;
    }

    /**
     * Set designationEqui
     *
     * @param string $designationEqui
     *
     * @return Equipement
     */
    public function setDesignationEqui($designationEqui)
    {
        $this->designationEqui = $designationEqui;

        return $this;
    }

    /**
     * Get designationEqui
     *
     * @return string
     */
    public function getDesignationEqui()
    {
        return $this->designationEqui;
    }

    /**
     * Set prixEqui
     *
     * @param integer $prixEqui
     *
     * @return Equipement
     */
    public function setPrixEqui($prixEqui)
    {
        $this->prixEqui = $prixEqui;

        return $this;
    }

    /**
     * Get prixEqui
     *
     * @return int
     */
    public function getPrixEqui()
    {
        return $this->prixEqui;
    }

    /**
     * Set dateEqui
     *
     * @param \DateTime $dateEqui
     *
     * @return Equipement
     */
    public function setDateEqui($dateEqui)
    {
        $this->dateEqui = $dateEqui;

        return $this;
    }

    /**
     * Get dateEqui
     *
     * @return \DateTime
     */
    public function getDateEqui()
    {
        return $this->dateEqui;
    }

    /**
     * Set descEqui
     *
     * @param string $descEqui
     *
     * @return Equipement
     */
    public function setDescEqui($descEqui)
    {
        $this->descEqui = $descEqui;

        return $this;
    }

    /**
     * Get descEqui
     *
     * @return string
     */
    public function getDescEqui()
    {
        return $this->descEqui;
    }

    /**
     * Set imageEqui
     *
     * @param string $imageEqui
     *
     * @return Equipement
     */
    public function setImageEqui($imageEqui)
    {
        $this->imageEqui = $imageEqui;

        return $this;
    }

    /**
     * Get imageEqui
     *
     * @return string
     */
    public function getImageEqui()
    {
        return $this->imageEqui;
    }

    /**
     * Set fournisseur
     *
     * @param \AppBundle\Entity\Fournisseur $fournisseur
     *
     * @return Equipement
     */
    public function setFournisseur(\AppBundle\Entity\Fournisseur $fournisseur)
    {
        $this->fournisseur = $fournisseur;

        return $this;
    }

    /**
     * Get fournisseur
     *
     * @return \AppBundle\Entity\Fournisseur
     */
    public function getFournisseur()
    {
        return $this->fournisseur;
    }
}
