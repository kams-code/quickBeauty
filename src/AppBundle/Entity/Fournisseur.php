<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fournisseur
 *
 * @ORM\Table(name="fournisseur")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FournisseurRepository")
 */
class Fournisseur
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
     * @ORM\Column(name="nomFour", type="string", length=255)
     */
    private $nomFour;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomFour", type="string", length=255)
     */
    private $prenomFour;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseFour", type="string", length=255)
     */
    private $adresseFour;

    /**
     * @var string
     *
     * @ORM\Column(name="telFour", type="string", length=255)
     */
    private $telFour;

    /**
     * @var string
     *
     * @ORM\Column(name="villeFour", type="string", length=255)
     */
    private $villeFour;

    /**
     * @var string
     *
     * @ORM\Column(name="emailFour", type="string", length=255)
     */
    private $emailFour;
    

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datePro", type="datetime")
     */
    private $dateFour;

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
     * Set nomFour
     *
     * @param string $nomFour
     *
     * @return Fournisseur
     */
    public function setNomFour($nomFour)
    {
        $this->nomFour = $nomFour;

        return $this;
    }

    /**
     * Get nomFour
     *
     * @return string
     */
    public function getNomFour()
    {
        return $this->nomFour;
    }

    /**
     * Set prenomFour
     *
     * @param string $prenomFour
     *
     * @return Fournisseur
     */
    public function setPrenomFour($prenomFour)
    {
        $this->prenomFour = $prenomFour;

        return $this;
    }

    /**
     * Get prenomFour
     *
     * @return string
     */
    public function getPrenomFour()
    {
        return $this->prenomFour;
    }

    /**
     * Set adresseFour
     *
     * @param string $adresseFour
     *
     * @return Fournisseur
     */
    public function setAdresseFour($adresseFour)
    {
        $this->adresseFour = $adresseFour;

        return $this;
    }

    /**
     * Get adresseFour
     *
     * @return string
     */
    public function getAdresseFour()
    {
        return $this->adresseFour;
    }

    /**
     * Set telFour
     *
     * @param string $telFour
     *
     * @return Fournisseur
     */
    public function setTelFour($telFour)
    {
        $this->telFour = $telFour;

        return $this;
    }

    /**
     * Get telFour
     *
     * @return string
     */
    public function getTelFour()
    {
        return $this->telFour;
    }

    /**
     * Set villeFour
     *
     * @param string $villeFour
     *
     * @return Fournisseur
     */
    public function setVilleFour($villeFour)
    {
        $this->villeFour = $villeFour;

        return $this;
    }

    /**
     * Get villeFour
     *
     * @return string
     */
    public function getVilleFour()
    {
        return $this->villeFour;
    }

    /**
     * Set emailFour
     *
     * @param string $emailFour
     *
     * @return Fournisseur
     */
    public function setEmailFour($emailFour)
    {
        $this->emailFour = $emailFour;

        return $this;
    }

    /**
     * Get emailFour
     *
     * @return string
     */
    public function getEmailFour()
    {
        return $this->emailFour;
    }


    /**
     * Set dateFour
     *
     * @param \DateTime $dateFour
     *
     * @return Fournisseur
     */
    public function setDateFour($dateFour)
    {
        $this->dateFour = $dateFour;

        return $this;
    }

    /**
     * Get dateFour
     *
     * @return \DateTime
     */
    public function getDateFour()
    {
        return $this->dateFour;
    }
}

