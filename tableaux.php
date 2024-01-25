<?php

$tableau = array("un", "deux", "trois");
// ou
$tableau = ["un", "deux", "trois"];

$planetes[0] = "Mercure";
$planetes[1] = "Venus";
$planetes[2] = "Terre";

print_r($planetes);


/* Tableaux associatifs */
$diametres = array(
    "mercure" => 2439,
    "venus" => 6051,
    "terre" => 6371,
    "mars" => 3389
);
// ou
$diametres = [
    "mercure" => 2439,
    "venus" => 6051,
    "terre" => 6371,
    "mars" => 3389,
];

echo $diametres["venus"];


/* Tableaux multidimensionnels */
$suite = [
    [1, 2, 3],
    [1, 3, 9, 27, 81],
];

$planetes = [
    ["nom" => "Terre", "satellite" => "Lune"],
    ["nom" => "Jupiter", "satellite" => "Europe"],
    ["nom" => "Mars", "satellite" => "Phobos"],
];

echo $suite[0][2];
print_r($planetes[1]["satellite"]);