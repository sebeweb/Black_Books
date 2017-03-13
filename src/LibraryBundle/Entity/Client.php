<?php

namespace LibraryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_C7440455793CAF69", columns={"numeroDeSerie"})})
 * @ORM\Entity
 */
class Client implements \JsonSerializable {

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
     * @ORM\Column(name="numeroDeSerie", type="integer", nullable=false)
     */
    private $numerodeserie;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=false)
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="echeance", type="date", nullable=true)
     */
    private $echeance;

    function getId() {
        return $this->id;
    }

    function getNumerodeserie() {
        return $this->numerodeserie;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getEcheance(): \DateTime {
        return $this->echeance;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNumerodeserie($numerodeserie) {
        $this->numerodeserie = $numerodeserie;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setEcheance(\DateTime $echeance) {
        $this->echeance = $echeance;
    }

    public function jsonSerialize() {
        
    }

}
