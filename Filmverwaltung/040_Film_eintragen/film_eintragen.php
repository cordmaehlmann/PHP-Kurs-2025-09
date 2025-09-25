<?php

require_once 'lib/db_verbindung.php';

// Einen neuen Film in die Datenbank eintragen
// HTML-Formular & INSERT INTO per PDO

var_dump($_POST);
// Erstaufruf der Website: $_POST ist leer
// Aufruf der Website durch das Formular: $_POST ist gefüllt mit den Inhalten des Formulars.

var_dump($_FILES);

/*
INSERT INTO filme (titel, jahr, genre, vertrieb, fsk, einspielergebnis, laenge) VALUES
('The Accountant', 2016, 'Action', 'Warner Bros.', 16, 155.6, 128);
*/

if (isset($_POST['titel'])) {
    // Hier geht es nur nach dem Abschicken des Formulars rein!

    echo $_FILES['cover']['name'];  // accountant.jpg

    $film = $_POST;
    $film['cover'] = $_FILES['cover']['name'];

    $sql = "INSERT INTO filme (titel, jahr, genre, vertrieb, fsk, einspielergebnis, laenge, cover) VALUES "
            . "(:titel, :jahr, :genre, :vertrieb, :fsk, :einspielergebnis, :laenge, :cover);";

    // Prepared Statement
    $stmt = $db->prepare($sql);
    $stmt->execute($film);

    // Der Dateiname des Covers muss in die Datenbank.
    // Die Datei des Covers muss ins Datei-System: /cover

    // Leitet weiter zur index.php
    // header('Location: index.php');

}

?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Film eintragen</title>
</head>
<body>
<h1>Film eintragen</h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">

    Titel:<input type="text" name="titel" value="The Accountant"><br>
    Jahr:<input type="text" name="jahr" value="2016"><br>
    Genre:<input type="text" name="genre" value="Action"><br>
    Vertrieb:<input type="text" name="vertrieb" value="Warner Bros."><br>

    FSK:<!-- input type="text" name="fsk" value="16" -->

    <select name="fsk">
        <option value="0">0</option>
        <option value="6">6</option>
        <option value="12">12</option>
        <option value="16">16</option>
        <option value="18">18</option>
    </select>
    <br>

    Einspielergebnis:<input type="text" name="einspielergebnis" value="155.6"><br>
    Länge:<input type="text" name="laenge" value="128"><br>

    Cover:<input type="file" name="cover" accept="image/*"><br>

    <input type="submit" value="Abschicken">

</form>

</body>
</html>

