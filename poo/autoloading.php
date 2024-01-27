<?php 
// Autoloading sert à charger automatiquement les classes lorsqu elles sont instancées

function autoloader($class){
    require $class . 'books.php';
}
spl_autoload_register('autoloader');

// $book = new Books();