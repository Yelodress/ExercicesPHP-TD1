<?php
function main()
{
    for ($i = 0; $i < 5; $i++) {
        $valeur[$i] = readline("Entrez un autre nombre");
    }
    $valMax=max($valeur);
    echo "La valeur max est " . max($valeur) . "\n";
    echo "Sa position est ".array_keys($valeur, $valMax)[0]+1 ."\n";
}

main();
