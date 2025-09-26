<?php

// echo 'Film gelöscht!';
// var_dump($_POST);

// DELETE FROM filme WHERE id=1;

require_once 'lib/db_verbindung.php';

if (isset($db)) {
    $db->query("DELETE FROM filme WHERE id={$_POST['id']};");
}

header('Location: index.php');
