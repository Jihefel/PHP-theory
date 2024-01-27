<?php 

// Timestamp UNIX est un nombre entier qui correspond au temps en secondes écoulées depuis le 1er janvier 1970 à l'instant t.
echo time();

// Obtenir le timestamp d'une date
$date = "2022-01-01";
$timestamp = strtotime($date);
echo $timestamp;

/* Accepte les formats de dates suivants :
    - 2022-01-01
    - 2022-01-01
    - 25-01-2022
    - 25-January 2022
    - January 25, 2022
    - nom d'un jour de la semaine (Ex : Monday)
    - désignation d'un jour particulier (Ex : yesterday, tomorrow, now, today, last Friday of January 2022, 2 days ago, 3 months ago, + 2 days, - 3 months)
*/

// ou
// mktime(heure, minute, seconde, mois, jour, annee)
echo mktime(0, 0, 0, 1, 1, 2022);


/* Comparaison des dates */
setlocale(LC_TIME, ["fr","fra","fr_FR"]); // Formater une date au format francais
$date1 = "25-01-2022";
$date2 = "30-June 2021";

$timestamp1 = strtotime($date1);
$timestamp2 = strtotime($date2);

if ($timestamp1 < $timestamp2) {
    echo "$date1 is before $date2";
} elseif ($timestamp1 > $timestamp2) {
    echo "$date1 is after $date2";
} else {
    echo "$date1 is the same as $date2";
}

/* Vérifier la validité d'une date */
// checkdate(mois, jour, annee)

/* Obtenir des dates et les formater */
// Get the current date and format it
$currentDate = date('Y-m-d');
echo $currentDate;

// Get a specific date and format it
$specificDate = strtotime('2022-01-13');
$formattedDate = date('d M Y - P', $specificDate);
/* Paramètre possibles :
 d : jour du mois (2 caractères)
 m : mois (2 caractères)
 n : mois (1 caractère)
 Y : anneée (4 caractères)
 D : nom du jour
 M : nom du mois (3 caractères)
 N : nombre du jour (1 = lundi, 2 = mardi, ..., 7 = dimanche)
 I : renvoie 1 si l'heure d'été est activée, 0 sinon
 H : heure (2 caractères)
 i : minute (2 caractères)
 s : seconde (2 caractères)
*/
echo $formattedDate;


