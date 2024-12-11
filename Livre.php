<?php
require_once 'Document.php';

class Livre extends Document {
    private $nbPages;

    public function __construct($auteur, $titre, $reference, $nbPages) {
        // Appel du constructeur parent
        parent::__construct($auteur, $titre, $reference);
        $this->setNbPages($nbPages);
    }

    // Getter
    public function getNbPages() {
        return $this->nbPages;
    }

    // Setter
    public function setNbPages($nbPages) {
        if ($nbPages > 0) {
            $this->nbPages = $nbPages;
        }
    }
}
?> 