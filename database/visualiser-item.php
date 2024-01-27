<?php

while ($item = $statement->fetch()) {
    echo '<a href="visualiser.php?id=' . $item['id'] . '> Voir </a>';
}

// voir.php
require 'Database.php';

if (empty($_GET['id'])) {
    $id = tester($_GET['id']);
}

$db        = Database::connect();
$statement = $db->prepare('SELECT nom, prenom FROM users WHERE id = ?');
$statement->execute([$id]);
$item = $statement->fetch();

function tester($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<!-- HTML pour visualiser-->
<form>
    <label>Nom</label>
    <?php echo $item['nom']; ?><br>
    <label>Prenom</label>
    <?php echo $item['prenom']; ?>
</form>