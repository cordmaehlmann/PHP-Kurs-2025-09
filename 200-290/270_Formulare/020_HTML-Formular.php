<?php

// Bei GET werden die Inhalte sichtbar in der URL übergeben.
var_dump($_GET);

// Bei der Methode POST werden die Inhalte im Hintergrund überliefert.
var_dump($_POST);


?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>HTML-Formular</title>
</head>
<body>
<h1>HTML-Formular</h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

    Vorname:<input type="text" name="vorname">
    <input type="submit" value="Abschicken">

</form>

</body>
</html>
