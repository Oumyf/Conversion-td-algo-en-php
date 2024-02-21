<?php 
$tab=[21,5,49,48,37];
$n=count($tab);
$tab1=[];
for ($i = 0; $i < $n; $i++) {
    $tab1[$i]=$tab[$i];
}
$x=2;
for ($i = 0; $i < $n; $i++){
    $a=($i+$x)% $n;
    $tab1[$i]=$tab[$a];
  }
foreach($tab1 as $val)
echo $val . " ";

?>

