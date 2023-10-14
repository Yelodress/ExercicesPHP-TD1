<?php

// Fonction principale qui calcule et affiche l'Indice de Masse Corporelle (IMC) d'un utilisateur en fonction de sa masse et de sa taille
function main(array $argv){
    // Récupère la masse de l'utilisateur à partir des arguments de la ligne de commande avec l'option "-m"
    $masse = getInfo($argv,"-m");

    // Récupère la taille de l'utilisateur à partir des arguments de la ligne de commande avec l'option "-t"
    $taille = getInfo($argv, "-t");

    // Calcule l'IMC en utilisant la formule masse / (taille au carré) et affiche le résultat
    echo "Votre IMC est de ".($masse/($taille*$taille)).".";
}

// Fonction pour récupérer la valeur associée à un argument spécifique parmi les arguments de la ligne de commande
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
                return $argv[$i+1];
            }
            // Sinon, affiche un message d'erreur et termine le script
            echo "Il faut indiquer une valeur numérique après $argument";
            exit(1);
        }
    }
    // Si l'argument attendu n'est pas trouvé, affiche un message d'erreur et termine le script
    echo "Argument maquant. Argument attendu: $argument";
    exit(1);
}

// Appel de la fonction principale avec les arguments de la ligne de commande
main($argv);
