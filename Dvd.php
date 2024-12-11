<?php
require_once 'Document.php';

class Dvd extends Document {
    private $duree;
    private $bonus;

    public function __construct($auteur, $titre, $reference, $duree, $bonus) {
        // Appel du constructeur parent
        parent::__construct($auteur, $titre, $reference);
        $this->setDuree($duree);
        $this->setBonus($bonus);
    }

    // Getters
    public function getDuree() {
        return $this->duree;
    }

    public function getBonus() {
        return $this->bonus;
    }

    // Setters
    public function setDuree($duree) {
        if ($duree > 0) {
            $this->duree = $duree;
        }
    }

    public function setBonus($bonus) {
        $this->bonus = $bonus;
    }
}
?> 