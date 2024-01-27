<?php 
// Méthodes magiques : __get() et __set()
class MyClass {
    private $attribut = "Bonjour";
    public function __get($attribut) {
        return $this->attribut;
    }
    public function __set($attribut, $valeur) {
        $this->attribut = $valeur;
    }
    // Autres méthodes
    public function __isset($attribut) {
        // On retourne true si l'attribut est défini
        return isset($this->attribut);
    }
    public function __unset($attribut) {
        // On supprime l'attribut
        unset($this->attribut);
    }
    public function __call($methode, $arguments) {
        // On appelle une méthode
        return call_user_func_array($methode, $arguments);
    }
    public function __toString() {
        // On retourne la valeur de l'attribut
        return $this->attribut;
    }
}

$obj = new MyClass();
$obj->attribut = "Au revoir";
echo $obj->attribut;

echo isset($obj->attribut);