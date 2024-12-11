<?php
// Inclusion de la classe Utilisateur
require_once 'Utilisateur.php';

try {
    // Création d'un nouvel utilisateur
    $utilisateur1 = new Utilisateur(1, "Dupont", "Jean");

    // Utilisation des getters
    echo "<h3>Informations initiales :</h3>";
    echo "ID: " . $utilisateur1->getId() . "<br>";
    echo "Nom: " . $utilisateur1->getNom() . "<br>";
    echo "Prénom: " . $utilisateur1->getPrenom() . "<br>";
    echo "Nom complet: " . $utilisateur1->getNomComplet() . "<br>";

    // Utilisation des setters pour modifier les informations
    echo "<h3>Modification des informations :</h3>";
    $utilisateur1->setNom("Martin");
    $utilisateur1->setPrenom("Sophie");
    
    // Affichage des nouvelles informations
    echo "Nouveau nom: " . $utilisateur1->getNom() . "<br>";
    echo "Nouveau prénom: " . $utilisateur1->getPrenom() . "<br>";
    echo "Nouveau nom complet: " . $utilisateur1->getNomComplet() . "<br>";

    // Test avec des données invalides
    echo "<h3>Test avec données invalides :</h3>";
    try {
        $utilisateur1->setNom("123"); // Devrait générer une erreur
    } catch (Exception $e) {
        echo "Erreur : " . $e->getMessage() . "<br>";
    }

    try {
        $utilisateur1->setId(-5); // Devrait générer une erreur
    } catch (Exception $e) {
        echo "Erreur : " . $e->getMessage() . "<br>";
    }

} catch (Exception $e) {
    echo "Une erreur est survenue : " . $e->getMessage();
}
?> 