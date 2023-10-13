<?php

function main(array $argv){
    $valeur[0]=getInfo($argv,"-v");
    for($i=1;$i<5;$i++){
        $valeur[$i]=readline("Entrez un autre nombre");
    }
    echo "La valeur max est ".max($valeur)."\n";
}

function getInfo($argv, $argument){
    for($i=1; $i<sizeof($argv)+1; $i++){
        if($argv[$i]==$argument){
            if(!isset($argv[$i+1])){
                echo "Valeur manquante après $argument\n";
                exit(1);
            }
            if (is_numeric($argv[$i+1])){
                return ($argv[$i+1]);
            }
            echo "Il faut indiquer une valeur numérique après $argument\n";
            exit(1);
        }
    }
    echo "Argument maquant. Argument attendu: $argument\n";
    exit(1);
}

main($argv);