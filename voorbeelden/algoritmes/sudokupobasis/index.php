<?php

// zet de foutmeldingen aan
error_reporting(E_ALL);
ini_set('display_errors', 1);

// zorg dat je de functies kan gebruiken
require "functions.php";

// maak een multidimensionale array van de sudoku
$sudoku = array(
    array(2, 3, 0, 4),
    array(1, 0, 2, 0),
    array(4, 0, 0, 1),
    array(0, 1, 4, 0)
);

// geef alle mogelijke opties aan die in één veld kunnen
$opties = range(1,count($sudoku));

// loop door de sudoku rij voor rij, kolom voor kolom
foreach($sudoku as $indexRij => $rij) {
    foreach($rij as $indexKolom => $veld) {
        // als veld de waarde 0 heeft zorg dan dat dit wijzigt in een array met alle opties
        if($veld == 0) {
            $veld = $opties;
        }

        // is het veld een array dan moet je dus nog uitzoeken wat de juiste waarde is.
        // elemineer alle waardes uit de array die al in de rij voorkomen
        if(is_array($veld)) {
            $veld = elimineer_rij($veld, $rij);
        }

        // elemineer alle waardes uit de array die al in de kolom voorkomen
        if(is_array($veld)) {
            $veld = elimineer_kolom($veld, $indexKolom, $sudoku);
        }

        // elemineer alle waardes uit de array die al in het blok voorkomen
        if(is_array($veld)) {
            $veld = elimineer_blok($veld, $indexRij, $indexKolom, $sudoku);
        }

        // ... dit is de basis, maar niet genoeg om alle sudoku's op te lossen, maak het algoritme hier verder ...

        // plaats de gevonden waarde(s) weer terug in de sudoku
        $sudoku[$indexRij][$indexKolom] = $veld;

    }
}


// toon de sudoku
$sudokuprint = $sudoku;
require "display.php";
