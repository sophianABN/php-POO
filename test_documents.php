<?php
require_once 'Cd.php';
require_once 'Livre.php';
require_once 'Dvd.php';

// Création des instances
$cd1 = new Cd("Daft Punk", "Random Access Memories", "CD001", 74, 13);
$cd2 = new Cd("Pink Floyd", "The Wall", "CD002", 81, 26);

$livre1 = new Livre("Victor Hugo", "Les Misérables", "LIV001", 1488);
$livre2 = new Livre("Albert Camus", "L'Étranger", "LIV002", 159);

$dvd1 = new Dvd("Christopher Nolan", "Inception", "DVD001", 148, true);
$dvd2 = new Dvd("Peter Jackson", "Le Seigneur des Anneaux", "DVD002", 178, true);

// Affichage des informations
function afficherDocument($document) {
    echo "<h3>Information sur le document :</h3>";
    echo "Titre : " . $document->getTitre() . "<br>";
    echo "Auteur : " . $document->getAuteur() . "<br>";
    echo "Référence : " . $document->getReference() . "<br>";
    
    // Affichage des informations spécifiques selon le type
    if ($document instanceof Cd) {
        echo "Durée : " . $document->getDuree() . " minutes<br>";
        echo "Nombre de plages : " . $document->getNbPlages() . "<br>";
    } elseif ($document instanceof Livre) {
        echo "Nombre de pages : " . $document->getNbPages() . "<br>";
    } elseif ($document instanceof Dvd) {
        echo "Durée : " . $document->getDuree() . " minutes<br>";
        echo "Contient des bonus : " . ($document->getBonus() ? "Oui" : "Non") . "<br>";
    }
    echo "<hr>";
}

// Test d'affichage
afficherDocument($cd1);
afficherDocument($cd2);
afficherDocument($livre1);
afficherDocument($livre2);
afficherDocument($dvd1);
afficherDocument($dvd2);
?> 