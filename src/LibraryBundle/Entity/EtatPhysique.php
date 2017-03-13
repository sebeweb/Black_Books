<?php

namespace LibraryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtatPhysique
 *
 * @ORM\Table(name="etat_physique")
 * @ORM\Entity
 */
class EtatPhysique implements \JsonSerializable {

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
     * @ORM\Column(name="definition", type="string", length=255, nullable=false)
     */
    private $definition;

    function getId() {
        return $this->id;
    }

    function getDefinition() {
        return $this->definition;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDefinition($definition) {
        $this->definition = $definition;
    }

    public function jsonSerialize() {
        
    }

}
