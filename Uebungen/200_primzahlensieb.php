<?php

/*
 * Primzahlensieb (Sieb des Eratosthenes)
 *
 * Schreibe ein Programm, das alle Primzahlen bis zur Zahl n ermittelt
 * und diese in einer Tabelle mit zehn Spalten ausgibt.
 *
 * Die Primzahlen sollen mithilfe des Siebs des Eratosthenes ermittelt werden:
 *
 * - Lege ein Array an mit den Indexen von der kleinsten natürlichen Primzahl 2
 *   bis zur Zahl n mit jeweils dem Wert true.
 *
 * - Setze den Wert aller Indexe, die ein Vielfaches der Zahl 2 sind, auf false.
 *
 * - Suche die nächstgrößere Zahl, deren Wert true ist (3)
 *   und setze wieder alle Vielfachen der Zahl auf false.
 *
 * - Führe diesen Schritt so lange weiter durch, bis von einer Zahl
 *   das kleinste Vielfache ausserhalb des Arrays liegt.
 *
 * - Alle Indexe, deren Wert jetzt noch true sind, sind die Primzahlen.
 */


