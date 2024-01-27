<?php 

abstract class Astres {
    public function __construct() {
        echo "C'est un astre";
    }
    abstract public function seDeplacer();
}
// Une classe abstraite ne peut pas être instanciée. Ses instances doivent obligatoirement étendre la classe abstraite et avoir une implémentation des methodes abstraites.

// Class planete
class Planete extends Astres {
    // opetateur de résolution de portée; parent : sert à appeler la classe parente d'une classe enfant
    public function __construct() {
        parent::__construct();
        echo "C'est une planète";
    }
    
    public function seDeplacer() {
        echo "La planète se déplace";
    }
}

$mars = new Planete;
$mars->seDeplacer();