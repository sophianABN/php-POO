<?php
require_once 'Document.php';

class Cd extends Document {
    private $duree;
    private $nbPlages;

    public function __construct($auteur, $titre, $reference, $duree, $nbPlages) {
        // Appel du constructeur parent
        parent::__construct($auteur, $titre, $reference);
        $this->setDuree($duree);
        $this->setNbPlages($nbPlages);
    }

    // Getters
    public function getDuree() {
        return $this->duree;
    }

    public function getNbPlages() {
        return $this->nbPlages;
    }

    // Setters
    public function setDuree($duree) {
        if ($duree > 0) {
            $this->duree = $duree;
        }
    }

    public function setNbPlages($nbPlages) {
        if ($nbPlages > 0) {
            $this->nbPlages = $nbPlages;
        }
    }
}
?> 