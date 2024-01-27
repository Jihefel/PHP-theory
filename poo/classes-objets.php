<?php 

// 1 fichier par class
class astronaute {
    private $nom;
    public function set_nom($nom){
        return $this->nom = $nom;
    }
    public function get_nom(){
        return $this->nom;
    }
}

// Instanciation
include_once('astronaute.php'); // Pour inclure le fichier de classe dans le fichier d'instance
$astronaute1 = new astronaute();
$astronaute1->set_nom('Marie');

$astronaute2 = new astronaute();
$astronaute2->set_nom('Jean');

echo $astronaute1->get_nom();
echo $astronaute2->get_nom();