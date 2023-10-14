<?php

// Fonction principale qui traite les arguments et s'assure que la valeur entrée est comprise entre 10 et 20
function main(array $argv){
    // Récupère une valeur à partir des arguments de la ligne de commande avec l'option "-v"
    $valeur = getInfo($argv, "-v");

    // Si la valeur est inférieure à 10, demande à l'utilisateur d'entrer une valeur plus grande
    while ($valeur < 10){
        $valeur = readline("Plus grand ! ");
    }

    // Si la valeur est supérieure à 20, demande à l'utilisateur d'entrer une valeur plus petite
    while ($valeur > 20){
        $valeur = readline("Plus petit ! ");
    }

    // Affiche la valeur qui est maintenant comprise entre 10 et 20
    echo "Votre valeur entre 10 et 20 est: $valeur\n";
}

// Fonction pour récupérer la valeur associée à un argument spécifique dans les arguments de la ligne de commande
function getInfo($argv, $argument){
    // Parcourir tous les arguments de la ligne de commande
    for($i=1; $i<sizeof($argv)+1; $i++){
        // Si l'argument actuel correspond à l'argument recherché
        if($argv[$i] == $argument){
            // Vérifie si une valeur est présente après l'argument
            if(!isset($argv[$i+1])){
                echo "Valeur manquante après $argument\n";
                exit(1);
            }
            // Si la valeur après l'argument est numérique, elle est retournée
            if(is_numeric($argv[$i+1])){
                return $argv[$i+1];
            }
            // Sinon, affiche un message d'erreur et termine le script
            echo "Il faut indiquer une valeur numérique après $argument\n";
            exit(1);
        }
    }
    // Si l'argument attendu n'est pas trouvé, affiche un message d'erreur et termine le script
    echo "Argument maquant. Argument attendu: $argument\n";
    exit(1);
}

// Appel de la fonction principale avec les arguments de la ligne de commande
main($argv);
