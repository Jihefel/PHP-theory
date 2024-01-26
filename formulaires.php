<form action="target.php" method="post">
    <h2>Form PHP</h2>
    <div>
        <label for="name">Entrez votre nom</label>
        <input type="text" name="name" id="name">
    </div>
    <button type="submit">Envoyer</button>
</form>

<!-- target.php -->
<?php
$name = $_POST['name'];
echo $name;
?>

<!-- Sécurisation -->

<!-- HTMLSPECIALCHARS -->
<?php
// Permet d'empêcher l'interprétation des caractères HTML
$name = htmlspecialchars($_POST['name']);
echo $name;
?>
<!-- STRIPTAGS -->
<?php
// Permet de supprimer les balises HTML
$name = strip_tags($_POST['name']);
echo $name;
?>
<!-- STRIPSLASHES -->
<?php
// Permet de supprimer les slashs
$name = stripslashes($_POST['name']);
echo $name;
?>

<!-- Créer sa propre fonction de sécurisation -->
<?php
function verifier($var)
{
    $var = trim($var);
    $var = htmlspecialchars($var);
    $var = strip_tags($var);
    $var = stripslashes($var);
    return $var;
}
?>

<!-- Validation côté serveur -->
<?php 
// Verifier et démarrer une session
session_start();
// Fermer la session
session_destroy();
?>
<!-- puis code HTML -->