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
     * @ORM\Column(name="codeFact", type="string", length=255, unique=true)
     */
    private $codeFact;
    

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datePro", type="datetime")
     */
    private $dateFact;

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
     * Set codeFact
     *
     * @param string $codeFact
     *
     * @return Facture
     */
    public function setCodeFact($codeFact)
    {
        $this->codeFact = $codeFact;

        return $this;
    }

    /**
     * Get codeFact
     *
     * @return string
     */
    public function getCodeFact()
    {
        return $this->codeFact;
    }
}
