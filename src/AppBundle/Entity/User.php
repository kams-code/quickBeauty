<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

     /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     * @Assert\NotBlank(message="Entrer votre nom.", groups={"Registration", "Profile"})
     */
    protected $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255, unique=true)
     * @Assert\NotBlank(message="Entrer votre code.", groups={"Registration", "Profile"})
     */
    protected $code;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     * @Assert\NotBlank(message="Entrer votre prenom.", groups={"Registration", "Profile"})
     */
    protected $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     * @Assert\NotBlank(message="Entrer votre adresse.", groups={"Registration", "Profile"})
     */
    protected $adresse;

    /**
     * @var int
     *
     * @ORM\Column(name="numero", type="integer")
     * @Assert\NotBlank(message="Entrer votre numero.", groups={"Registration", "Profile"})
     */
    protected $numero;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     * @Assert\NotBlank(message="Entrer votre date.", groups={"Registration", "Profile"})
     */
    protected $date;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

     

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return User
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return User
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return User
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set numero
     *
     * @param integer $numero
     *
     * @return User
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return integer
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return User
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }
}
