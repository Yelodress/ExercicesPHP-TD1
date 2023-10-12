<?php

main($argv);

function main (array $argv){
  $montant = getPrix($argv, "-m");
  $taux = getPrix($argv, "-t");
  echo "Le montant à convertir est $montant\n";
  echo "Le taux de change est $taux";
  echo "Le nouveau montant est ". $montant*$taux;
};
function getPrix($argv, $argument){
    for($i=1; $i<sizeof($argv); $i++){
        if($argv[$i]==$argument){
            return($argv[$i+1]);
        }
    }
}
