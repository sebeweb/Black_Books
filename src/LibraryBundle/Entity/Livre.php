<?php

namespace LibraryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Livre
 *
 * @ORM\Table(name="livre")
 * @ORM\Entity
 */
class Livre {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="isbn", type="string", length=255, nullable=false)
     */
    private $isbn;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=false)
     */
    private $titre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_de_parution", type="datetime", nullable=false)
     */
    private $dateDeParution;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_de_disponibilite", type="datetime", nullable=true)
     */
    private $dateDeDisponibilite;

    /**
     * @var string
     *
     * @ORM\Column(name="fk_exemplaire", type="string", length=255, nullable=true)
     */
    private $fkExemplaire;

    function getId() {
        return $this->id;
    }

    function getIsbn() {
        return $this->isbn;
    }

    function getTitre() {
        return $this->titre;
    }

    function getDateDeParution(): \DateTime {
        return $this->dateDeParution;
    }

    function getDateDeDisponibilite(): \DateTime {
        return $this->dateDeDisponibilite;
    }

    function getFkExemplaire() {
        return $this->fkExemplaire;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setIsbn($isbn) {
        $this->isbn = $isbn;
    }

    function setTitre($titre) {
        $this->titre = $titre;
    }

    function setDateDeParution(\DateTime $dateDeParution) {
        $this->dateDeParution = $dateDeParution;
    }

    function setDateDeDisponibilite(\DateTime $dateDeDisponibilite) {
        $this->dateDeDisponibilite = $dateDeDisponibilite;
    }

    function setFkExemplaire($fkExemplaire) {
        $this->fkExemplaire = $fkExemplaire;
    }

}
