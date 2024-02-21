<?php
$val = 0;
// Vérification si la méthode d'envoi est POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérification si tous les champs sont définis et non vides
    if (isset($_POST["choix"]) && isset($_POST["temperature"]) && isset($_POST["age"]) &&
        !empty($_POST["choix"]) && !empty($_POST["temperature"]) && !empty($_POST["age"])) {
        
        // Récupération des valeurs
        $difficulte_respiratoire = $_POST["choix"];
        $temperature = $_POST["temperature"];
        $age = $_POST["age"];
        
        // Évaluation des risques
        if ($difficulte_respiratoire == 'vrai') {
            if ($temperature >= 37.5) {
                if ($age > 60) {
                    $val = 3;
                } else {
                    $val = 2;
                }
            } else {
                $val = 1;
            }
        } else {
            echo "Vous n'avez pas de difficultés respiratoires mais veuillez porter un masque pour vous protéger.";
        }
    } else {
        echo "Veuillez remplir tous les champs.";
    }
} 

// Affichage du message en fonction de $val
if ($val == 3) {
    echo "Y a de fortes chances que vous soyez atteint de covid 19.Veuillez consultez un médecin le plus tôt possible.";
} elseif ($val == 2) {
    echo "Vous avez une forte température et vous êtes du troisième âge. Veuillez consulter un médecin.";
} elseif ($val == 1) {
    echo "Vous avez une forte température. Veuillez porter un habit pour vous protéger.";
}
?>
