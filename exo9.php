<?php

$chaine = strtolower("Bonjour tout le monde");

// Supprimer les espaces de la chaîne
$chaine = str_replace(' ', '', $chaine);

// Initialiser un tableau associatif pour stocker la fréquence des lettres
$frequences = array();

// Parcourir chaque lettre de la chaîne
for ($i = 0; $i < strlen($chaine); $i++) {
    $lettre = $chaine[$i];
    // Vérifier si la lettre existe déjà dans le tableau des fréquences
    if (array_key_exists($lettre, $frequences)) {
        // Si oui, incrémenter le compteur
        $frequences[$lettre]++;
    } else {
        // Si non, initialiser le compteur à 1
        $frequences[$lettre] = 1;
    }
}

// Afficher la fréquence de chaque lettre
foreach ($frequences as $lettre => $frequence) {
    echo "La lettre '$lettre' apparaît $frequence fois.<br>";
}

?>
