<?php
// Inclusion des classes
require_once 'Utilisateur.php';
require_once 'Animal.php';
require_once 'Salle.php';

// Création d'utilisateurs
$utilisateur1 = new Utilisateur(1, "Dupont", "Jean");
$utilisateur2 = new Utilisateur(2, "Martin", "Sophie");
$utilisateur3 = new Utilisateur(3, "Bernard", "Marie");

// Création d'animaux
$animal1 = new Animal(1, "Lion", true);
$animal2 = new Animal(2, "Zèbre", false);
$animal3 = new Animal(3, "Girafe", false);

// Création de salles
$salle1 = new Salle(1, "Salle A101", 30, false);
$salle2 = new Salle(2, "Amphithéâtre B", 200, true);
$salle3 = new Salle(3, "Laboratoire C", 15, false);

// Exemple d'utilisation des getters et setters
echo "<h3>Informations sur l'utilisateur 1:</h3>";
echo "Nom: " . $utilisateur1->getNom() . "<br>";
echo "Prénom: " . $utilisateur1->getPrenom() . "<br>";

echo "<h3>Informations sur l'animal 1:</h3>";
echo "Libellé: " . $animal1->getLibelle() . "<br>";
echo "Est un prédateur: " . ($animal1->getPredateur() ? "Oui" : "Non") . "<br>";

echo "<h3>Informations sur la salle 1:</h3>";
echo "Libellé: " . $salle1->getLibelle() . "<br>";
echo "Capacité: " . $salle1->getCapacite() . " personnes<br>";
echo "Occupée: " . ($salle1->getOccupe() ? "Oui" : "Non") . "<br>";
?> 