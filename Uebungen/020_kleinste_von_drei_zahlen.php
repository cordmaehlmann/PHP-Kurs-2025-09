<?php

/*
 * Kleinste von drei Zahlen
 * 
 * Schreibe ein Programm, 
 * das drei Variablen mit zufälligen Zahlen befüllt.
 * Dann soll das Programm testen,
 * welcher Zahlenwert der kleinste ist und diesen ausgeben.
 *
 * Hilfsmittel: rand(), if-elseif-else
 */

$zahl1 = rand(1, 10);
$zahl2 = rand(1, 10);
$zahl3 = rand(1, 10);

$zahl1 = 2;
$zahl2 = 2;
$zahl3 = 3;

print $zahl1 . ' ' . $zahl2 . ' ' . $zahl3;
print "\n<br>\n";

if ($zahl1 < $zahl2 && $zahl1 < $zahl3) {
    print 'Zahl 1 ist am kleinsten: ' . $zahl1;
} elseif ($zahl2 < $zahl3) {
    print 'Zahl 2 ist am kleinsten: ' . $zahl2;
} else {
    print 'Zahl 3 ist am kleinsten: ' . $zahl3;
}



/*
if ($zahl1 < $zahl2 && $zahl1 < $zahl3) {
    print 'Zahl 1 ist am kleinsten: ' . $zahl1;
} elseif ($zahl2 < $zahl1 && $zahl2 < $zahl3) {
    print 'Zahl 2 ist am kleinsten: ' . $zahl2;
} elseif ($zahl3 < $zahl1 && $zahl3 < $zahl2) {
    print 'Zahl 3 ist am kleinsten: ' . $zahl3;
}
*/













