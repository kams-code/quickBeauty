<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ClientRepository")
 */
class Client
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
     * @ORM\Column(name="nomCli", type="string", length=255)
     */
    private $nomCli;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomCli", type="string", length=255)
     */
    private $prenomCli;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseCli", type="string", length=255)
     */
    private $adresseCli;

    /**
     * @var string
     *
     * @ORM\Column(name="villeCli", type="string", length=255)
     */
    private $villeCli;

    /**
     * @var string
     *
     * @ORM\Column(name="telCli", type="string", length=255)
     */
    private $telCli;

    /**
     * @var string
     *
     * @ORM\Column(name="emailCli", type="string", length=255)
     */
    private $emailCli;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datePro", type="datetime")
     */
    private $dateCli;


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
     * Set nomCli
     *
     * @param string $nomCli
     *
     * @return Client
     */
    public function setNomCli($nomCli)
    {
        $this->nomCli = $nomCli;

        return $this;
    }

    /**
     * Get nomCli
     *
     * @return string
     */
    public function getNomCli()
    {
        return $this->nomCli;
    }

    /**
     * Set prenomCli
     *
     * @param string $prenomCli
     *
     * @return Client
     */
    public function setPrenomCli($prenomCli)
    {
        $this->prenomCli = $prenomCli;

        return $this;
    }

    /**
     * Get prenomCli
     *
     * @return string
     */
    public function getPrenomCli()
    {
        return $this->prenomCli;
    }

    /**
     * Set adresseCli
     *
     * @param string $adresseCli
     *
     * @return Client
     */
    public function setAdresseCli($adresseCli)
    {
        $this->adresseCli = $adresseCli;

        return $this;
    }

    /**
     * Get adresseCli
     *
     * @return string
     */
    public function getAdresseCli()
    {
        return $this->adresseCli;
    }

    /**
     * Set villeCli
     *
     * @param string $villeCli
     *
     * @return Client
     */
    public function setVilleCli($villeCli)
    {
        $this->villeCli = $villeCli;

        return $this;
    }

    /**
     * Get villeCli
     *
     * @return string
     */
    public function getVilleCli()
    {
        return $this->villeCli;
    }

    /**
     * Set telCli
     *
     * @param string $telCli
     *
     * @return Client
     */
    public function setTelCli($telCli)
    {
        $this->telCli = $telCli;

        return $this;
    }

    /**
     * Get telCli
     *
     * @return string
     */
    public function getTelCli()
    {
        return $this->telCli;
    }

    /**
     * Set emailCli
     *
     * @param string $emailCli
     *
     * @return Client
     */
    public function setEmailCli($emailCli)
    {
        $this->emailCli = $emailCli;

        return $this;
    }

    /**
     * Get emailCli
     *
     * @return string
     */
    public function getEmailCli()
    {
        return $this->emailCli;
    }

    
    /**
     * Set dateCli
     *
     * @param \DateTime $dateCli
     *
     * @return Equipement
     */
    public function setDateCli($dateCli)
    {
        $this->dateCli = $dateCli;

        return $this;
    }

    /**
     * Get dateCli
     *
     * @return \DateTime
     */
    public function getDateCli()
    {
        return $this->dateCli;
    }

}

