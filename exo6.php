<?php

function tableauSansDoublons($Tab){
    $Tab1 = [];

    for ($i=0; $i < count($Tab); $i++) { 
        # code...
        $val = false ;

        for ($j=0; $j < count($Tab1); $j++) { 
            # code...
            if ( $Tab[$i] === $Tab1[$j]) {
                # code...
                $val = true;

                break;
              }
            }
    
            
              if (!$val) {
                # code...
                $Tab1 [  ] = $Tab[ $i ] ;

                // $Tab [$i] = $Tab1 [$i];
                
                
               
              }
            
    }
    return $Tab1;
}



// echo "Affichage du tableau sans doublons";

// if ($Tab1[$i] != 0) {
//     # code...
//     echo $Tab1[$i];
// }

$Tab = [25,49,38,57,32,32,55,63];

$sansDoublons = tableauSansDoublons($Tab);

echo "Affichage du tableau sans doublons " ;

foreach ($sansDoublons as $element) {
    echo $element . " ";
}




 








?>