<?php

/* 
 Différences entre les interfaces et les classes abstraites :
 - Les interfaces ne peuvent pas contenir de métodes abstraites.
 - Les interfaces ne peuvent pas avoir de constructeur.
 - Les interfaces ne sont pas instanciables.
 - Les interfaces sont utilisées pour définir des contraintes de types de paramètres, de retour et de types de paramètres et de retour.
*/

interface User {
    public const EQUIPE = 15;
    public function getNom();
}

class Astronaute implements User {
    protected $user_name;
    public function __construct(string $user_name) {
        $this->user_name = $user_name;
    }
    public function getNom() {
        return $this->user_name;
    }
}

$elon = new Astronaute("Elon Musk");
$elon->getNom();

echo "Nom : " . $elon->getNom();

// Interfaces prédéfinies : stdClass, ArrayAccess, Iterator, Countable, Serializable, ArrayIterator, Traversable, IteratorAggregate, JsonSerializable
/* 
Traversable : permet d'iterer sur un objet
Countable : permet de compter le nombre d'objets
Serializable : permet de serialiser un objet
Iterator : permet d'obtenir un itérateur
Throwable : permet de traiter les erreurs et les exceptions
ArrayAccess : Permet de modifier les valeurs d'un tableau
*/