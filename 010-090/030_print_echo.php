<?php

// print & echo sind beides sprachliche Konstrukte

// Zeichenketten (Strings) müssen durch Anführungsstriche eingegrenzt sein.

print 'Hello';
echo 'Hello';

$var = 'Cord';
print $var;

// Bei einfachen Anführungszeichen wird der Inhalt einfach ausgegeben.
// Bei doppelten Anführungszeichen wird der Inhalt abgearbeitet:
// Steuerungszeichen werden erkannt und Variablen durch ihren inhalt ersetzt.
print "\n<br>";
print 'Hallo $var';
print "\n<br>";
print "Hallo $var";








