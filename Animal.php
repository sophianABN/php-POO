<?php
class Animal {
    // Déclaration des attributs privés
    private $id;
    private $libelle;
    private $predateur;  // true/false pour indiquer si c'est un prédateur

    // Constructeur
    public function __construct($id, $libelle, $predateur) {
        $this->id = $id;
        $this->libelle = $libelle;
        $this->predateur = $predateur;
    }

    // Accesseurs (getters)
    public function getId() {
        return $this->id;
    }
    
    public function getLibelle() {
        return $this->libelle;
    }
    
    public function getPredateur() {
        return $this->predateur;
    }

    // Mutateurs (setters)
    public function setId($id) {
        $this->id = $id;
    }
    
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
    }
    
    public function setPredateur($predateur) {
        $this->predateur = $predateur;
    }
}
?> 