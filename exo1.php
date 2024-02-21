<?php 
$produit=1;
$nombre=0;
$Tab = [12,23,34,45,56,67,78,89];
for( $i = 0; $i < count($Tab); $i ++){

    // $a = (float)fgets(STDIN);
   $produit*=$Tab[$i];
}

echo "Le produit est ",$produit;

?>