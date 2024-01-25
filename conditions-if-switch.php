<?php 

$nbPlanetes = 8;

/* if */

// Syntaxe JS ou Python

if ($nbPlanetes >= 0) {
    echo "nbPlanetes est positif";
}

$nbSatellites = 6;
if ($nbPlanetes == $nbSatellites) {
    echo "nbPlanetes est égal à nbSatellites";
} else {
    echo "nbPlanetes est différent de nbSatellites";
}

if ($nbPlanetes > 10):
    echo "nbPlanetes est supérieur à 10";
elseif($nbPlanetes > 5):
    echo "nbPlanetes est supérieur à 5 et inférieur ou égal à 10";
else:
    echo "nbPlanetes est inférieur ou égal à 5";
endif;


/* Switch */

// Syntaxe comme en JS