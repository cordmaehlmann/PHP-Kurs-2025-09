<?php

// Zuweisungen

// Bei der Zuweisung in PHP entsteht eine Kopie.
$x = 'Peter';
$y = $x;
$y = 'Paul';
echo $x . ' & ' . $y;

echo '<hr>';


// Multiple Zuweisung
$zahl1 = $zahl2 = $zahl3 = 0;
echo $zahl1 . $zahl2 . $zahl3;  // 000

// Besser so:
$zahl1 = 0;
$zahl2 = 0;
$zahl3 = 0;
echo $zahl1 . $zahl2 . $zahl3;  // 000

