<?php
class Document {
    // Attributs protégés (accessible dans les classes filles)
    protected $auteur;
    protected $titre;
    protected $reference;

    // Constructeur de la classe mère
    public function __construct($auteur, $titre, $reference) {
        $this->setAuteur($auteur);
        $this->setTitre($titre);
        $this->setReference($reference);
    }

    // Getters
    public function getAuteur() {
        return $this->auteur;
    }

    public function getTitre() {
        return $this->titre;
    }

    public function getReference() {
        return $this->reference;
    }

    // Setters
    public function setAuteur($auteur) {
        if (!empty($auteur)) {
            $this->auteur = $auteur;
        }
    }

    public function setTitre($titre) {
        if (!empty($titre)) {
            $this->titre = $titre;
        }
    }

    public function setReference($reference) {
        if (!empty($reference)) {
            $this->reference = $reference;
        }
    }
}
?> 