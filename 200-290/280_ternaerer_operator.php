<?php

// Ternärer Operator

// Bedingung ? True-Fall : False-Fall

// Operator mit drei (Latein. tres) Operanden.
// Der Operator selber hat die Zeichen ? und :
// und drumherum sind die drei Operanden.

echo (2 > 1) ? 'Stimmt' : 'Stimmt nicht';  // Stimmt

echo '<hr>';

// Der Ternäre Operator ist die Kurzform von einem if else
if (2 > 1) {
    echo 'Stimmt';  // Stimmt
} else {
    echo 'Stimmt nicht';
}

echo '<hr>';

// Beispiel mit Zuweisung
$ausgabe = (2 > 3) ? 'Stimmt' : 'Stimmt nicht';
echo $ausgabe;  // Stimmt nicht

echo '<hr>';

// Beispiel Plural in der Ausgabe
$anzahl = rand(1, 2);
echo ($anzahl == 1) ? 'Mensch' : 'Menschen';

