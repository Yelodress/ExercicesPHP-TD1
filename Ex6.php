<?php

function main(array $argv){
    $nEtoiles=getArg($argv,"-n");
    $mode=getArg($argv,"-m");
    if($mode=="ligne"){
        for($i=0; $i<$nEtoiles; $i++){
            echo "*";
        }
    }
    if($mode=="colonne"){
        for($i=0; $i<$nEtoiles; $i++){
            echo "*\n";
        }
    }

}

function getArg($argv, $argument){
    for($i=1; $i<sizeof($argv)+1; $i++){
        if($argv[$i]==$argument){
            if(!isset($argv[$i+1])){
                echo "Valeur manquante après $argument\n";
                exit(1);
            }
            if (is_numeric($argv[$i+1])){
                return $argv[$i+1];
            }
            if ($argv[$i+1]=="ligne" || $argv[$i+1]=="colonne"){
                return $argv[$i+1];
            }
            echo "Il faut insérer une valeur numérique après -n et/ou \"ligne\" ou \"colonne\" après -m";
        }
    }
    echo "Argument maquant. Argument attendu: $argument\n";
    exit(1);
}

main($argv);