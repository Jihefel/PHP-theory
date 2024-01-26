<?php 

// Variable super globale est une variable interne au PHP, accessible depuis tout le code PHP.
// 9 types de variables super globales existent: $_GET, $_POST, $_COOKIE, $_SESSION, $_REQUEST, $_FILES, $_ENV, $_SERVER, $_GLOBALS.

// Exemple d'utilisation de la variable super globale $_GET
// SearchParams comme en Next.js
if(isset($_GET['name'])) {
    $name = $_GET['name'];
    echo "Hello, $name!";
}

// Exemple d'utilisation de la variable super globale $_POST
// method POST des name des inputs du form
if(isset($_POST['email'])) {
    $email = $_POST['email'];
    echo "Your email is: $email";
}

// Exemple d'utilisation de la variable super globale $_COOKIE
if(isset($_COOKIE['username'])) {
    $username = $_COOKIE['username'];
    echo "Welcome back, $username!";
}

// Exemple d'utilisation de la variable super globale $_SESSION
session_start();
if(isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    echo "Logged in as user $user_id";
}

// Exemple d'utilisation de la variable super globale $_REQUEST
if(isset($_REQUEST['message'])) {
    $message = $_REQUEST['message'];
    echo "Received message: $message";
}

// Exemple d'utilisation de la variable super globale $_FILES
if(isset($_FILES['file'])) {
    $file = $_FILES['file'];
    $filename = $file['name'];
    $filetype = $file['type'];
    echo "Uploaded file: $filename ($filetype)";
}

// Exemple d'utilisation de la variable super globale $_ENV
$environment = $_ENV['ENVIRONMENT'];
echo "Current environment: $environment";

// Exemple d'utilisation de la variable super globale $_SERVER
$server_path = $_SERVER['PHP_SELF'];
$server_name = $_SERVER['SERVER_NAME'];
$server_port = $_SERVER['SERVER_PORT'];
$server_request_time = $_SERVER['REQUEST_TIME'];
echo "Server path: $server_path";
echo "Server name: $server_name";
echo "Server port: $server_port";
echo "Server request time: $server_request_time";

// Exemple d'utilisation de la variable super globale $_GLOBALS
$a = 5;
$b = 10;
function mult() {
    $GLOBALS['result'] = $GLOBALS['a'] * $GLOBALS['b'];
}
mult();
echo "Result: " . $result;