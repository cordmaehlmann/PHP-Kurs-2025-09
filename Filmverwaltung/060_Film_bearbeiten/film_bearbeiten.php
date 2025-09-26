<?php

// echo 'Film bearbeiten';

var_dump($_POST);

// UPDATE filme SET titel='The Godfather 2', jahr=1972, genre='Crime/Drama',
// vertrieb='Paramount Pictures', fsk=16, einspielergebnis=250.34, laenge=175 WHERE id=9;

?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Film bearbeiten</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Film bearbeiten</h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">

    Titel:<input type="text" name="titel" value="<?php echo $_POST['titel']; ?>"><br>
    Jahr:<input type="text" name="jahr" value="<?php echo $_POST['jahr']; ?>"><br>
    Genre:<input type="text" name="genre" value="<?php echo $_POST['genre']; ?>"><br>
    Vertrieb:<input type="text" name="vertrieb" value="<?php echo $_POST['vertrieb']; ?>"><br>

    FSK:<input type="text" name="fsk" value="<?php echo $_POST['fsk']; ?>"><br>

    Einspielergebnis:<input type="text" name="einspielergebnis" value="<?php echo $_POST['einspielergebnis']; ?>"><br>
    Länge:<input type="text" name="laenge" value="<?php echo $_POST['laenge']; ?>"><br>

    Cover:<input type="file" name="cover" accept="image/*"><br>

    <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">
    <input type="hidden" name="update" value="true">
    <input type="submit" value="Abschicken">

</form>

</body>
</html>