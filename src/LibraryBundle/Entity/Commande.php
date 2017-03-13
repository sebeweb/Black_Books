<?php

namespace LibraryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_6EEAA67D8721BCFA", columns={"NumeroDeCommande"})})
 * @ORM\Entity
 */
class Commande implements \JsonSerializable {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumeroDeCommande", type="integer", nullable=false)
     */
    private $numerodecommande;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateDeCommande", type="date", nullable=false)
     */
    private $datedecommande;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateDeLivraison", type="date", nullable=false)
     */
    private $datedelivraison;

    function getId() {
        return $this->id;
    }

    function getNumerodecommande() {
        return $this->numerodecommande;
    }

    function getDatedecommande(): \DateTime {
        return $this->datedecommande;
    }

    function getDatedelivraison(): \DateTime {
        return $this->datedelivraison;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNumerodecommande($numerodecommande) {
        $this->numerodecommande = $numerodecommande;
    }

    function setDatedecommande(\DateTime $datedecommande) {
        $this->datedecommande = $datedecommande;
    }

    function setDatedelivraison(\DateTime $datedelivraison) {
        $this->datedelivraison = $datedelivraison;
    }

    public function jsonSerialize() {
        
    }

}
