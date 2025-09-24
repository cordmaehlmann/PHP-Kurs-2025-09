<?php

// require_once bindet eine Datei nur einmalig (once) ein.

require_once 'hello.php';
require_once 'hello.php';  // Diese Zeile macht nichte, da 'hello.php' schon eingebunden ist.

// require bindet eine Datei jedes Mal neu ein.
require 'hello.php';
require 'hello.php';
require 'hello.php';

// Bei require/require_once wird das Skript abgebrochen,
// wenn die einzubindende Datei nicht gefunden wird.
# require 'hello_world.php';

// Bei include/include_once gibt es nur eine Warning und das Skript wird weiter ausgeführt.
// Daher bindet man wichtige Sachen (z.B. DB-Verbindung) mit require ein
// und unwichtige Sachen (Layout-Element) mit include.
# include 'hello_world.php';
echo 'Weiter geht es!';
echo '<hr>';

// Die Endung ist frei wählbar.
include 'functions.inc';

echo addiere(3, 4);

