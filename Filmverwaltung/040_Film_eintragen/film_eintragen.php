<?php

// Einen neuen Film in die Datenbank eintragen
// HTML-Formular & INSERT INTO per PDO

var_dump($_POST);

?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Film eintragen</title>
</head>
<body>
<h1>Film eintragen</h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

    Titel:<input type="text" name="titel" value="The Accountant"><br>
    Jahr:<input type="text" name="jahr" value="2016"><br>
    Genre:<input type="text" name="genre" value="Action"><br>
    Vertrieb:<input type="text" name="vertrieb" value="Warner Bros."><br>
    FSK:<input type="text" name="fsk" value="16"><br>
    Einspielergebnis:<input type="text" name="einspielergebnis" value="155.6"><br>
    Länge:<input type="text" name="laenge" value="128"><br>

    <input type="submit" value="Abschicken">

</form>

</body>
</html>

