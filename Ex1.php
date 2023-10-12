<?php


main($argv);

function main(array $argv)
{
    $lettre = getLaLettre($argv);
    testLaLettre($lettre);
    afficheLaLettre($lettre);
}

function afficheLaLettre($lettre)
{
    echo ctype_upper($lettre) ? strtolower($lettre) : strtoupper($lettre);
    echo "\n";
}

function getLaLettre(array $argv): string
{
    return sizeof($argv) < 2 ? readline("La lettre : ") : $argv[1];
}

function testLaLettre($laLettre)
{
    if (strlen($laLettre) != 1) {
        echo "C'est pas 1 (une) lettre\n";
        exit(1);
    }
    if (!ctype_alpha($laLettre)) {
        echo "Pas une lettre\n";
        exit(1);
    }
}