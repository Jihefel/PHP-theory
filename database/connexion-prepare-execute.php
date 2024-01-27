<?php
/* 
2 API pour communiquer avec une base de données : 
PDO (PHP Data Objects (MySQL et le reste)) et MySQLi (MySQL Improved)
*/

// Avec PDO
/* Connexion à une base de données */
class Database
{
    private static $server = 'localhost';
    private static $user = 'root';
    private static $password = 'root362223';
    private static $database = 'tuto_php_mysql';
    private static $connexion;
    // private : pas accessible depuis l'extérieur de la classe
    // static : pour indiquer que la propriété appartient à la classe
    // public : accessible depuis l'extérieur de la classe

    public static function connect()
    {
        try {
            self::$connexion = new PDO(
                "mysql:host=" . self::$server . ";dbname=" . self::$database,
                self::$user,
                self::$password
            );
            self::$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e) {
            echo 'Erreur de connexion : ' . $e->getMessage();
        }
        return self::$connexion;
    }
    
    public static function disconnect()
    {
        self::$connexion = null;
    }
}

// prepare() : permet de faire des requêtes préparées
// execute() : permet d'exécuter une requête préparée
$nom = "Musk";
$prenom = "Elon";

$sql = $database->prepare("INSERT INTO users (nom, prenom) VALUES (?, ?)");

$sql->execute([$nom, $prenoms]);