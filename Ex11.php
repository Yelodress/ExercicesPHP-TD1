<?php

// Fonction principale qui traite les arguments et trouve la valeur maximale parmi les entrées
function main(array $argv){
    // Récupère la première valeur à partir des arguments de la ligne de commande avec l'option "-v"
    $valeur[0]=getInfo($argv,"-v");

    // Demande à l'utilisateur de saisir quatre autres nombres
    for($i=1;$i<5;$i++){
        $valeur[$i]=readline("Entrez un autre nombre");
    }

    // Affiche la valeur maximale parmi les nombres saisis
    echo "La valeur max est ".max($valeur)."\n";
}

// Fonction pour récupérer la valeur associée à un argument spécifique dans les arguments de la ligne de commande
function getInfo($argv, $argument){
    // Parcourir tous les arguments de la ligne de commande
    for($i=1; $i<sizeof($argv)+1; $i++){
        // Si l'argument actuel correspond à l'argument recherché
        if($argv[$i]==$argument){
            // Vérifie si une valeur est présente après l'argument
            if(!isset($argv[$i+1])){
                echo "Valeur manquante après $argument\n";
                exit(1);
            }
            // Si la valeur après l'argument est numérique, elle est retournée
            if (is_numeric($argv[$i+1])){
                return ($argv[$i+1]);
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
