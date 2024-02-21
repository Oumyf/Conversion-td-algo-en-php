<?php 
    function CompteurVoyelles($chaine){

        $cpt = 0;
        $n = strlen($chaine);
        $chaine=strtolower($chaine);
        for ($i = 0; $i < $n; $i++){
          if (in_array($chaine[$i],['a','e','y','u','i','o'])) {
              # code...
              $cpt++;
          }
        }

        return $cpt;
  
         

    }
     
      $chaine = "Bonjour, je m'appelle Oumyna ?";
      $nbVoyelles = CompteurVoyelles($chaine);
      echo "Le nombre de voyelles dans la chaîne '$chaine' est : $nbVoyelles";





?>