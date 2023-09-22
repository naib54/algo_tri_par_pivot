<?php

$tabValeur = [5, 6, 11, 15, 4, 1, 7]; //Tableau de valeur
$pivot = end($tabValeur);  

if(count($tabValeur) <= 1)
{
  echo("Le tableau n'a pas besoin d'être trié puisque par il n'y figure qu'un seul élément ");
}
for($i = 0 ; $i < count($tabValeur) ; $i++)
{
  for($j = 0 ; $j < count($tabValeur) ; $j++)
  {
    if($tabValeur[$i] < $pivot){
      $tabValeur[$i] = $tabValeur[$j];
      if($tabValeur[$i + 1] > $pivot){
       $tabValeur[$j + 1] = $tabValeur[$i +1]; 
      }

    }
    
  }
  }
print_r($tabValeur);

?>