<?php

$x = "Les voyages dans l'espace";
$y = "c'est de la balle";

// Concatenation de chaines de caractères
echo $x . ' ' . $y;

// Longueur d'une chaine de caractères
echo strlen($x);

// Longueur d'une chaine de caractères sans espaces
echo trim($x);

// Nombre de mots dans une chaine de caractères
echo str_word_count($x);

// Reverse un string
echo strrev($x);

// Chercher l'index à partir duquel un mot commence dans une chaine de caractères
echo strpos($x, 'es');

// Afficher les informations structurées d'une variable
var_dump($x);

// Remplacer un mot dans une chaine de caractères (mot à remplacer, nouveau mot, string entier)
echo str_replace('balle', 'bombe', $y);