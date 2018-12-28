<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reglement
 *
 * @ORM\Table(name="reglement")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ReglementRepository")
 */
class Reglement
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
     * @ORM\Column(name="codeRegle", type="string", length=255, unique=true)
     */
    private $codeRegle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateRegle", type="datetime")
     */
    private $dateRegle;

    /**
     * @var string
     *
     * @ORM\Column(name="typePaiement", type="string", length=255)
     */
    private $typePaiement;

    /**
   * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Client",cascade={"persist"})
   * @ORM\JoinColumn(nullable=true, onDelete="SET NULL")
   */
   private $client;


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
     * Set codeRegle
     *
     * @param string $codeRegle
     *
     * @return Reglement
     */
    public function setCodeRegle($codeRegle)
    {
        $this->codeRegle = $codeRegle;

        return $this;
    }

    /**
     * Get codeRegle
     *
     * @return string
     */
    public function getCodeRegle()
    {
        return $this->codeRegle;
    }

    /**
     * Set dateRegle
     *
     * @param \DateTime $dateRegle
     *
     * @return Reglement
     */
    public function setDateRegle($dateRegle)
    {
        $this->dateRegle = $dateRegle;

        return $this;
    }

    /**
     * Get dateRegle
     *
     * @return \DateTime
     */
    public function getDateRegle()
    {
        return $this->dateRegle;
    }

    /**
     * Set typePaiement
     *
     * @param string $typePaiement
     *
     * @return Reglement
     */
    public function setTypePaiement($typePaiement)
    {
        $this->typePaiement = $typePaiement;

        return $this;
    }

    /**
     * Get typePaiement
     *
     * @return string
     */
    public function getTypePaiement()
    {
        return $this->typePaiement;
    }

    /**
     * Set client
     *
     * @param \AppBundle\Entity\Client $client
     *
     * @return Reglement
     */
    public function setClient(\AppBundle\Entity\Client $client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \AppBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }
}
