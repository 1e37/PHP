<?php

// Erstellen Sie ein Programm, das aus einem Array
// von Zahlen nur die geraden Zahlen filtert und diese verdoppel


// Funktion zum Filtern und Verdoppeln gerader Zahlen
function filterAndDoubleEvent($numbers)
{
    // Filtere gerade Zahlen
    $evenNumbers = array_filter($numbers, function ($number) {
        // Gerade Zahlen mit modolo operator testen
        return $number % 2 === 0; 
    });

    // Verdopplung der geraden Zahlen
    $doubledEvent = array_map(function ($number) 
    // Gefilterte Zahlen mit 2 Multiplizieren
    {return $number * 2; }, $evenNumbers);

    // Ergebnis Rückgabe
    return $doubledEvent;
}

// Test
$zahlen = [1, 2, 3, 4, 5, 6];
print_r(filterAndDoubleEvent($zahlen));
