<?php
/* Constantes sont des variables qui ne peuvent pas changer de valeur, qui sont declarees en majuscule, qui ont une portée globale par défaut et sont sensibles à la casse.

Syntaxe : define("nom", "valeur", true) --> true = porte globale, false = porte locale
ou comme en JavaScript : const NOM = valeur
*/

define("LANGAGE", "PHP");
const LANGUAGE = "PHP";

// Constantes magiques
// 9 constantes magiques :
echo "Line number: " . __LINE__ . "\n";
echo "File path: " . __FILE__ . "\n";
echo "Directory path: " . __DIR__ . "\n";
echo "Function name: " . __FUNCTION__ . "\n";
echo "Class name: " . __CLASS__ . "\n";
echo "Method name: " . __METHOD__ . "\n";
echo "Namespace: " . __NAMESPACE__ . "\n";
echo "Trait name: " . __TRAIT__ . "\n";

