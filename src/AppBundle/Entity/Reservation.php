<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ReservationRepository")
 */
class Reservation
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
     * @ORM\Column(name="codeReserv", type="string", length=255, unique=true)
     */
    private $codeReserv;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateReserv", type="datetime")
     */
    private $dateReserv;


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
     * Set codeReserv
     *
     * @param string $codeReserv
     *
     * @return Reservation
     */
    public function setCodeReserv($codeReserv)
    {
        $this->codeReserv = $codeReserv;

        return $this;
    }

    /**
     * Get codeReserv
     *
     * @return string
     */
    public function getCodeReserv()
    {
        return $this->codeReserv;
    }

    /**
     * Set dateReserv
     *
     * @param \DateTime $dateReserv
     *
     * @return Reservation
     */
    public function setDateReserv($dateReserv)
    {
        $this->dateReserv = $dateReserv;

        return $this;
    }

    /**
     * Get dateReserv
     *
     * @return \DateTime
     */
    public function getDateReserv()
    {
        return $this->dateReserv;
    }
}

