<?php

// Arrays

// Nummerisches Array (in Python die Liste)

$leute = ['Peter', 'Paul', 'Mary'];

// echo $leute;  // Array & WARNING

// var_dump() zur Information beim Programmieren:
// Variable fallen lassen/auskippen.
var_dump($leute);

echo $leute[0] . "\n";  // Peter
echo $leute[1] . "\n";  // Paul
echo $leute[2] . "\n";  // Mary


// Assoziative Array (in Python das Dictionary)

// Schlüssel/Key - Wert/Value - Paare.
// Der Doppelpfeil steht zwischen Schlüssel und Wert.
$person = [
    'vorname' => 'Peter',
    'nachname' => 'Wellert',
    'alter' => 39
];

var_dump($person);

echo $person['vorname'] . "\n";   // Peter
echo $person['nachname'] . "\n";  // Wellert
echo $person['alter'] . "\n";     // 39


// count()
// Gibt die Anzahl der Indexe/Keys zurück.
echo count($leute) . "\n";  // 3
echo count($person) . "\n";  // 3


// foreach-Schleife (speziell für Arrays)

// Python: for i in range(1, 5)

$menschen = ['Peter', 'Paul', 'Mary'];
foreach ($menschen as $mensch) {
    echo 'Hallo ' . $mensch . "\n";
}

$person = [
    'vorname' => 'Peter',
    'nachname' => 'Wellert',
    'alter' => 39
];
foreach ($person as $s => $w) {  // $s für Schlüssel, $w für Wert
    echo $s . ': ' . $w . "\n";
}































