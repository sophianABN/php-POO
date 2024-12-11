<?php
// Cette ligne permet d'inclure/importer le fichier Maison.php qui contient notre classe
// C'est comme si on copiait tout le code de Maison.php ici
// Le 'require_once' arrêtera le programme si le fichier n'est pas trouvé
require_once 'Maison.php';

// On crée une nouvelle maison (un nouvel objet de type Maison)
// Le mot clé 'new' permet de créer une nouvelle instance de la classe Maison
// Les valeurs entre parenthèses sont envoyées au constructeur de la classe dans cet ordre :
// - "Villa Bella" : le nom de la maison (texte)
// - 10 : la longueur en mètres (nombre)
// - 12 : la largeur en mètres (nombre)
// - 2 : le nombre d'étages (nombre)
// On stocke cette nouvelle maison dans la variable $maMaison
$maMaison = new Maison("Villa Bella", 10, 12, 2);

// On utilise la maison qu'on vient de créer ($maMaison)
// Le symbole -> permet d'accéder aux méthodes de l'objet
// Ici, on appelle la méthode surface() qui va calculer et afficher la surface totale
// Cette méthode va afficher le résultat dans le navigateur
$maMaison->surface();
?> 