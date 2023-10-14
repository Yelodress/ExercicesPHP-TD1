<?php

// Fonction principale qui gère les arguments et affiche les étoiles selon le mode spécifié
function main(array $argv){
    // Récupère le nombre d'étoiles à afficher à partir des arguments de la ligne de commande
    $nEtoiles = getArg($argv, "-n");
    // Récupère le mode d'affichage à partir des arguments de la ligne de commande
    $mode = getArg($argv, "-m");

    // Si le mode est "ligne", affiche les étoiles à l'horizontale
    if($mode == "ligne"){
        for($i = 0; $i < $nEtoiles; $i++){
            echo "*";
        }
    }
    // Si le mode est "colonne", affiche les étoiles à la verticale
    if($mode == "colonne"){
        for($i = 0; $i < $nEtoiles; $i++){
            echo "*\n";
        }
    }
}

// Fonction pour récupérer la valeur associée à un argument spécifique parmi les arguments de la ligne de commande
function getArg($argv, $argument){
    // Parcourir tous les arguments de la ligne de commande
    for($i = 1; $i < sizeof($argv) + 1; $i++){
        if($argv[$i] == $argument){
            if(!isset($argv[$i + 1])){
                echo "Valeur manquante après $argument\n";
                exit(1);
            }
            // Si la valeur suivant l'argument est numérique, elle est retournée
            if(is_numeric($argv[$i + 1])){
                return $argv[$i + 1];
            }
            // Si la valeur suivant l'argument est "ligne" ou "colonne", elle est retournée
            if($argv[$i + 1] == "ligne" || $argv[$i + 1] == "colonne"){
                return $argv[$i + 1];
            }
            echo "Il faut insérer une valeur numérique après -n et/ou \"ligne\" ou \"colonne\" après -m";
            exit(1);
        }
    }
    // Si l'argument attendu n'est pas trouvé, affiche un message d'erreur et termine le script
    echo "Argument maquant. Argument attendu: $argument\n";
    exit(1);
}

// Appel de la fonction principale avec les arguments de la ligne de commande
main($argv);
