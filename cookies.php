<?php

// Un cookie est un fichier texte stocké sur le navigateur de l'utilisateur.
// Création d'un cookie
// setcookie(name,value,expiration, path, domain, secure, httponly);
setcookie('prenom', 'Jean', time() + 365*24*3600, "/", "salope.fr", false, true);

// Récupération d'un cookie
if(isset($_COOKIE['nom']))
{
    $nom = $_COOKIE['nom'];
    echo $nom;
}

// Modifier un cookie
setcookie('prenom', 'Adil', time() + 3600, "/", null, false, true);