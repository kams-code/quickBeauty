<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personnel
 *
 * @ORM\Table(name="personnel")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PersonnelRepository")
 */
class Personnel
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
     * @ORM\Column(name="codePerso", type="string", length=255, unique=true)
     */
    private $codePerso;

    /**
     * @var string
     *
     * @ORM\Column(name="nomPerso", type="string", length=255)
     */
    private $nomPerso;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomPerso", type="string", length=255)
     */
    private $prenomPerso;

    /**
     * @var string
     *
     * @ORM\Column(name="adressePerso", type="string", length=255)
     */
    private $adressePerso;

    /**
     * @var string
     *
     * @ORM\Column(name="villePerso", type="string", length=255)
     */
    private $villePerso;

    /**
     * @var string
     *
     * @ORM\Column(name="telPerso", type="string", length=255)
     */
    private $telPerso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datePerso", type="datetime")
     */
    private $datePerso;


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
     * Set codePerso
     *
     * @param string $codePerso
     *
     * @return Personnel
     */
    public function setCodePerso($codePerso)
    {
        $this->codePerso = $codePerso;

        return $this;
    }

    /**
     * Get codePerso
     *
     * @return string
     */
    public function getCodePerso()
    {
        return $this->codePerso;
    }

    /**
     * Set nomPerso
     *
     * @param string $nomPerso
     *
     * @return Personnel
     */
    public function setNomPerso($nomPerso)
    {
        $this->nomPerso = $nomPerso;

        return $this;
    }

    /**
     * Get nomPerso
     *
     * @return string
     */
    public function getNomPerso()
    {
        return $this->nomPerso;
    }

    /**
     * Set prenomPerso
     *
     * @param string $prenomPerso
     *
     * @return Personnel
     */
    public function setPrenomPerso($prenomPerso)
    {
        $this->prenomPerso = $prenomPerso;

        return $this;
    }

    /**
     * Get prenomPerso
     *
     * @return string
     */
    public function getPrenomPerso()
    {
        return $this->prenomPerso;
    }

    /**
     * Set adressePerso
     *
     * @param string $adressePerso
     *
     * @return Personnel
     */
    public function setAdressePerso($adressePerso)
    {
        $this->adressePerso = $adressePerso;

        return $this;
    }

    /**
     * Get adressePerso
     *
     * @return string
     */
    public function getAdressePerso()
    {
        return $this->adressePerso;
    }

    /**
     * Set villePerso
     *
     * @param string $villePerso
     *
     * @return Personnel
     */
    public function setVillePerso($villePerso)
    {
        $this->villePerso = $villePerso;

        return $this;
    }

    /**
     * Get villePerso
     *
     * @return string
     */
    public function getVillePerso()
    {
        return $this->villePerso;
    }

    /**
     * Set telPerso
     *
     * @param string $telPerso
     *
     * @return Personnel
     */
    public function setTelPerso($telPerso)
    {
        $this->telPerso = $telPerso;

        return $this;
    }

    /**
     * Get telPerso
     *
     * @return string
     */
    public function getTelPerso()
    {
        return $this->telPerso;
    }

    /**
     * Set datePerso
     *
     * @param \DateTime $datePerso
     *
     * @return Personnel
     */
    public function setDatePerso($datePerso)
    {
        $this->datePerso = $datePerso;

        return $this;
    }

    /**
     * Get datePerso
     *
     * @return \DateTime
     */
    public function getDatePerso()
    {
        return $this->datePerso;
    }
}
