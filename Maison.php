<?php
// On déclare une nouvelle classe appelée 'Maison'
// Une classe est comme un plan/modèle qui définit ce qu'est une maison dans notre programme
class Maison {
    // Les attributs (ou propriétés) sont les caractéristiques de notre maison
    // 'private' signifie que ces variables ne sont accessibles que depuis l'intérieur de la classe
    // Le symbole $ indique que c'est une variable en PHP
    private $nom;        // Pour stocker le nom de la maison (exemple: "Villa Bella")
    private $longueur;   // Pour stocker la longueur en mètres
    private $largeur;    // Pour stocker la largeur en mètres
    private $nbEtages;   // Pour stocker le nombre d'étages

    // Le constructeur est une méthode spéciale qui est appelée automatiquement 
    // quand on crée une nouvelle maison
    // Il permet d'initialiser les attributs avec des valeurs
    public function __construct($nom, $longueur, $largeur, $nbEtages) {
        // $this représente l'objet maison en cours de création
        // $this->nom fait référence à l'attribut privé $nom déclaré plus haut
        // = $nom fait référence au paramètre reçu par le constructeur
        $this->nom = $nom;
        $this->longueur = $longueur;
        $this->largeur = $largeur;
        $this->nbEtages = $nbEtages;
    }

    // Une méthode est une fonction qui appartient à la classe
    // Celle-ci calcule et affiche la surface totale de la maison
    public function surface() {
        // On calcule la surface en multipliant longueur × largeur × nombre d'étages
        // On utilise $this-> pour accéder aux attributs de la maison
        $surface = $this->longueur * $this->largeur * $this->nbEtages;
        
        // On affiche le résultat avec echo
        // Le point (.) permet de concatener (assembler) des morceaux de texte
        echo "<p>La surface de " . $this->nom . " est égale à: " . $surface . " m²</p>";
    }
}
?> 