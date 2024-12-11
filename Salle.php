<?php
class Salle {
    // Déclaration des attributs privés
    private $id;
    private $libelle;
    private $capacite;
    private $occupe;  // true/false pour indiquer si la salle est occupée

    // Constructeur
    public function __construct($id, $libelle, $capacite, $occupe) {
        $this->id = $id;
        $this->libelle = $libelle;
        $this->capacite = $capacite;
        $this->occupe = $occupe;
    }

    // Accesseurs (getters)
    public function getId() {
        return $this->id;
    }
    
    public function getLibelle() {
        return $this->libelle;
    }
    
    public function getCapacite() {
        return $this->capacite;
    }
    
    public function getOccupe() {
        return $this->occupe;
    }

    // Mutateurs (setters)
    public function setId($id) {
        $this->id = $id;
    }
    
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
    }
    
    public function setCapacite($capacite) {
        $this->capacite = $capacite;
    }
    
    public function setOccupe($occupe) {
        $this->occupe = $occupe;
    }
}
?> 