<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facture
 *
 * @ORM\Table(name="facture")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FactureRepository")
 */
class Facture
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
     * @ORM\Column(name="code", type="string", length=255, unique=true)
     */
    private $code;
    

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

     /**
   * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Ticket",cascade={"persist"})
   * @ORM\JoinColumn(nullable=true, onDelete="SET NULL")
   */
   private $ticket;

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
     * Set code
     *
     * @param string $code
     *
     * @return Facture
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Facture
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

    /**
     * Set ticket
     *
     * @param \AppBundle\Entity\Ticket $ticket
     *
     * @return Facture
     */
    public function setTicket(\AppBundle\Entity\Ticket $ticket)
    {
        $this->ticket = $ticket;

        return $this;
    }

    /**
     * Get ticket
     *
     * @return \AppBundle\Entity\Ticket
     */
    public function getTicket()
    {
        return $this->ticket;
    }
}
