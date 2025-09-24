<?php

// switch case

// In Python erst seit 3.10 als match case

$tag = rand(1, 7);
echo $tag . ': ';
// Variablenbezeichner: lowerCamelCase

switch ($tag) {
    case 1:
        echo 'Montag';
        break;
    case 2:
        echo 'Dienstag';
        break;
    case 3:
        echo 'Mittwoch';
        break;
    case 4:
        echo 'Donnerstag';
        break;
    case 5:
        echo 'Freitag';
        break;
    case 6:
        echo 'Samstag';
        break;
    case 7:
        echo 'Sonntag';
        break;
    default:
        echo 'FEHLER';
}

echo '<hr>';

// In der Variablen darf auch ein String sein:
$essen = ['Apfel', 'Birne', 'Zucchini', 'Gurke', 'Banane'];
$essen = ['Apfel', 'Birne', 'Zucchini', 'Banane', 'Gurke'];

$index = rand(0, 4);

switch ($essen[$index]){
    case 'Apfel':
    case 'Birne':
    case 'Banane':
        $ergebnis = 'Obst';
        break;
    case 'Zucchini':
    case 'Gurke':
        $ergebnis = 'Gemüse';
        break;
    default:
        $ergebnis = 'FEHLER!';
}
echo $essen[$index] . ' ist ' . $ergebnis;






