<?php

require_once 'lib/db_verbindung.php';

// var_dump($_GET);
// echo !isset($_GET['id']);

// Nach der Entwicklung raus:
if (!isset($_GET['id'])) $_GET['id'] = 1;  // Verhindert die Fehlermeldung beim Direktzugriff

// SELECT * FROM filme WHERE id=3;
// $stmt = $db->query('SELECT * FROM filme WHERE id=3;');
$stmt = $db->query("SELECT * FROM filme WHERE id={$_GET['id']};");
$film = $stmt->fetch();
$film['cover'] = '<img src="cover/' . $film['cover'] . '">';

var_dump($film);

$gross = ['id', 'fsk'];
foreach ($film as $k => $v) {
    if (in_array($k, $gross)) $k = strtoupper($k);
    // TODO: ucfirst() hier hin
    if ($k == 'laenge') $k = 'länge';
    if ($k == 'einspielergebnis') {
        $v = $v * 1_000_000;
        $v = number_format($v, 0, ',', '.');
    }
    $film_ausgabe[$k] = $v;
}
// $film = $film_ausgabe;

?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Film anzeigen</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img {
            width: 200px;
        }
    </style>
</head>
<body>
<h1>Film anzeigen</h1>

<table>
        <?php foreach ($film_ausgabe as $k => $v) { ?>
        <tr>
            <th>
                <?php echo ucfirst($k); ?>
            </th>
            <td>
                <?php echo $v; ?>
            </td>
        </tr>
        <?php } ?>
</table>

</body>
</html>
