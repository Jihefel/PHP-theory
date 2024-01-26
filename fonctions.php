<?php

function disBonjour($nom)
{
    echo "Bonjour $nom !";
}

disBonjour("Dylan");

// Comme en JavaScript

function bonjour(...$prenoms)
{
    foreach ($prenoms as $prenom) {
        echo "Bonjour $prenom !";
    }
}

bonjour("Dylan", "Alexandre", "Thomas");

/* Return */

function direMars(): string {
    return "Mars";
}
$mars = direMars();
echo $mars;


/* Scoop */
// 3 types de scopes : global, static, local
// Pour acceder aux variables globales, on utilise "global"
$a = 7;
function globalTest() {
    global $a;
    echo $a;
}

globalTest();

// Super globales
function superGlobalTest() {
    echo $GLOBALS['a'];
}

superGlobalTest();

// Static
// Static permet de conserver la valeur de la variable dans une fonction

function compteur() {
    static $nbPasLune = 0;
    echo "Le nombre de pas sur la lune est de : $nbPasLune";
    $nbPasLune++;
}

compteur();
compteur();
compteur();
// Ne réinitialise pas le compteur grâce à static