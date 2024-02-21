<?php

$Tab = [25,78,93,45];


$Tab1 = [85,43,12,19,78];

$longueur_minimale = min(count($Tab), count($Tab1));


for ( $i=0 ; $i < $longueur_minimale ; $i++){
    for ( $j=0 ; $j < count($Tab1) ; $j++){
        if ($Tab1[$j] === $Tab[$i]) {
            # code...
            echo "Les éléments comments sont : " . $Tab1[$j] . " "; 
        }
    }
   
}


?>