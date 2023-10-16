<?php

// Fonction principale qui demande à l'utilisateur d'entrer cinq nombres, puis trouve et affiche le nombre maximum et sa position
function main()
{
    // Boucle qui tourne 5 fois pour obtenir les 5 valeurs
    for ($i = 0; $i < 5; $i++) {
        // Demande à l'utilisateur d'entrer un nombre et stocke cette valeur dans le tableau $valeur
        $valeur[$i] = readline("Entrez un autre nombre");

        //tant que l'entrée n'est pas une valeur numérique, re-demander une valeur
        while(!is_numeric($valeur[$i])){
            echo "Entrez une valeur numérique:\n";
            $valeur[$i] = readline("Entrez un autre nombre");
        }
    }

    // Trouve le nombre maximum parmi les valeurs entrées
    $valMax = max($valeur);

    // Affiche la valeur maximale trouvée
    echo "La valeur max est " . $valMax . "\n";

    // Trouve la position du nombre maximum dans le tableau (index 0-based) et ajoute 1 pour obtenir une position 1-based
    // Puis affiche cette position
    echo "Sa position est " . (array_keys($valeur, $valMax)[0] + 1) . "\n";
}

// Appel de la fonction principale
main();
