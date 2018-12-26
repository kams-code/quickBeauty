<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProduitRepository")
 */
class Produit
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
     * @ORM\Column(name="codePro", type="string", length=255, unique=true)
     */
    private $codePro;

    /**
     * @var string
     *
     * @ORM\Column(name="designationPro", type="string", length=255)
     */
    private $designationPro;

    /**
     * @var string
     *
     * @ORM\Column(name="descPro", type="string", length=255)
     */
    private $descPro;

    /**
     * @var int
     *
     * @ORM\Column(name="prixEqui", type="integer")
     */
    private $prixPro;

    /**
     * @var string
     *
     * @ORM\Column(name="imagePres", type="string", length=255)
     */
    private $imagePro;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datePro", type="datetime")
     */
    private $datePro;

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
     * Set codePro
     *
     * @param string $codePro
     *
     * @return Produit
     */
    public function setCodePro($codePro)
    {
        $this->codePro = $codePro;

        return $this;
    }

    /**
     * Get codePro
     *
     * @return string
     */
    public function getCodePro()
    {
        return $this->codePro;
    }

    /**
     * Set designationPro
     *
     * @param string $designationPro
     *
     * @return Produit
     */
    public function setDesignationPro($designationPro)
    {
        $this->designationPro = $designationPro;

        return $this;
    }

    /**
     * Get designationPro
     *
     * @return string
     */
    public function getDesignationPro()
    {
        return $this->designationPro;
    }

    /**
     * Set descPro
     *
     * @param string $descPro
     *
     * @return Produit
     */
    public function setDescPro($descPro)
    {
        $this->descPro = $descPro;

        return $this;
    }

    /**
     * Get descPro
     *
     * @return string
     */
    public function getDescPro()
    {
        return $this->descPro;
    }

    /**
     * Set datePro
     *
     * @param \DateTime $datePro
     *
     * @return Produit
     */
    public function setDatePro($datePro)
    {
        $this->datePro = $datePro;

        return $this;
    }

    /**
     * Get datePro
     *
     * @return \DateTime
     */
    public function getDatePro()
    {
        return $this->datePro;
    }

    /**
     * Set prixPro
     *
     * @param integer $prixPro
     *
     * @return Produit
     */
    public function setPrixPro($prixPro)
    {
        $this->prixPro = $prixPro;

        return $this;
    }

    /**
     * Get prixPro
     *
     * @return integer
     */
    public function getPrixPro()
    {
        return $this->prixPro;
    }

    /**
     * Set imagePro
     *
     * @param string $imagePro
     *
     * @return Produit
     */
    public function setImagePro($imagePro)
    {
        $this->imagePro = $imagePro;

        return $this;
    }

    /**
     * Get imagePro
     *
     * @return string
     */
    public function getImagePro()
    {
        return $this->imagePro;
    }

    /**
     * Set fournisseur
     *
     * @param \AppBundle\Entity\Fournisseur $fournisseur
     *
     * @return Produit
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
