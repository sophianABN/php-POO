<?php
class Utilisateur {
    // Déclaration des attributs en privé
    // Ils ne sont accessibles que dans la classe
    private $id;        // Identifiant unique de l'utilisateur
    private $nom;       // Nom de famille de l'utilisateur
    private $prenom;    // Prénom de l'utilisateur

    // Le constructeur est appelé lors de la création d'un nouvel utilisateur
    // Il initialise les attributs avec les valeurs reçues en paramètres
    public function __construct($id, $nom, $prenom) {
        // On utilise les setters dans le constructeur pour bénéficier des validations
        $this->setId($id);
        $this->setNom($nom);
        $this->setPrenom($prenom);
    }

    // GETTERS (Accesseurs)
    // Permettent de lire les valeurs des attributs privés

    // Retourne l'ID de l'utilisateur
    public function getId() {
        return $this->id;
    }
    
    // Retourne le nom de l'utilisateur
    public function getNom() {
        // On peut mettre le nom en majuscules avant de le retourner
        return strtoupper($this->nom);
    }
    
    // Retourne le prénom de l'utilisateur
    public function getPrenom() {
        // On met la première lettre en majuscule
        return ucfirst($this->prenom);
    }

    // SETTERS (Mutateurs)
    // Permettent de modifier les valeurs des attributs privés avec validation

    // Modifie l'ID de l'utilisateur
    public function setId($id) {
        // Vérifie que l'ID est un nombre positif
        if (is_numeric($id) && $id > 0) {
            $this->id = $id;
        } else {
            throw new Exception("L'ID doit être un nombre positif");
        }
    }
    
    // Modifie le nom de l'utilisateur
    public function setNom($nom) {
        // Vérifie que le nom n'est pas vide et contient que des lettres
        if (!empty($nom) && ctype_alpha(str_replace(' ', '', $nom))) {
            $this->nom = $nom;
        } else {
            throw new Exception("Le nom doit contenir uniquement des lettres");
        }
    }
    
    // Modifie le prénom de l'utilisateur
    public function setPrenom($prenom) {
        // Vérifie que le prénom n'est pas vide et contient que des lettres
        if (!empty($prenom) && ctype_alpha(str_replace(' ', '', $prenom))) {
            $this->prenom = $prenom;
        } else {
            throw new Exception("Le prénom doit contenir uniquement des lettres");
        }
    }

    // Méthode supplémentaire pour obtenir le nom complet
    public function getNomComplet() {
        return $this->getPrenom() . " " . $this->getNom();
    }
}
?> 