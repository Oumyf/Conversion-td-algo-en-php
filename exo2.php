<?php 
$tab=[2.5, 15, 8, 76, 29, 46];
$n=count($tab);
$tab1 = array_fill(0, $n, 0);

for ($i = 0; $i < $n; $i++) {
    // echo "Veuillez donner l'élément numéro ", $i, ": ";
    // Lire chaque élément du tableau (pas nécessaire dans ce cas puisque vous avez déjà le tableau défini)
    // $tab[$i] = (float)fgets(STDIN);

    for ($j = 0; $j < $n; $j++) {
        if ($j != $i && $tab[$j] == $tab[$i]) {
            $tab1[$j] = 0;
        } else {
            $tab1[$i] = $tab[$i];
        }
    }
}

for ($i = 0; $i < $n; $i++) {
    if ($tab1[$i] != 0) {
        echo "l'élément numéro ".$i . " est ". $tab1[$i];
    }
}
?>
