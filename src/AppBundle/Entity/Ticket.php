<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ticket
 *
 * @ORM\Table(name="ticket")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TicketRepository")
 */
class Ticket
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
     * @ORM\Column(name="codeTic", type="string", length=255, unique=true)
     */
    private $codeTic;

    /**
     * @var int
     *
     * @ORM\Column(name="montantTic", type="integer")
     */
    private $montantTic;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateTic", type="datetime")
     */
    private $dateTic;

       /**
   * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Prestation")
   * @ORM\JoinColumn(nullable=false)
   */
   private $prestation; 

   /**
  * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Client")
  * @ORM\JoinColumn(nullable=false)
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
     * Set codeTic
     *
     * @param string $codeTic
     *
     * @return Ticket
     */
    public function setCodeTic($codeTic)
    {
        $this->codeTic = $codeTic;

        return $this;
    }

    /**
     * Get codeTic
     *
     * @return string
     */
    public function getCodeTic()
    {
        return $this->codeTic;
    }

    /**
     * Set montantTic
     *
     * @param integer $montantTic
     *
     * @return Ticket
     */
    public function setMontantTic($montantTic)
    {
        $this->montantTic = $montantTic;

        return $this;
    }

    /**
     * Get montantTic
     *
     * @return int
     */
    public function getMontantTic()
    {
        return $this->montantTic;
    }

    /**
     * Set dateTic
     *
     * @param \DateTime $dateTic
     *
     * @return Ticket
     */
    public function setDateTic($dateTic)
    {
        $this->dateTic = $dateTic;

        return $this;
    }

    /**
     * Get dateTic
     *
     * @return \DateTime
     */
    public function getDateTic()
    {
        return $this->dateTic;
    }

    /**
     * Set prestation
     *
     * @param \AppBundle\Entity\Prestation $prestation
     *
     * @return Ticket
     */
    public function setPrestation(\AppBundle\Entity\Prestation $prestation)
    {
        $this->prestation = $prestation;

        return $this;
    }

    /**
     * Get prestation
     *
     * @return \AppBundle\Entity\Prestation
     */
    public function getPrestation()
    {
        return $this->prestation;
    }

    /**
     * Set client
     *
     * @param \AppBundle\Entity\Client $client
     *
     * @return Ticket
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
