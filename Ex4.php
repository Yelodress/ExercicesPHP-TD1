<?php

function main(array $argv){
    $masse = getInfo($argv,"-m");
    $taille = getInfo($argv, "-t");
    echo "Votre IMC est de ".($masse/($taille*$taille)).".";
}

function getInfo($argv, $argument){
    for($i=1; $i<sizeof($argv)+1; $i++){
        if($argv[$i]==$argument){
            if (is_numeric($argv[$i+1])){
                return $argv[$i+1];
            }
            echo "Il faut indiquer une valeur numérique après $argument";
            exit(1);
        }
    }
        echo "Argument maquant. Argument attendu: $argument";
        exit(1);
}


main($argv);