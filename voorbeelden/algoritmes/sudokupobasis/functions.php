<?php

function elimineer_rij($veld, $rij) {
    // haal uit de array $veld alle waardes die al voorkomen in de rij ($rij)
    // $veld = array - de waardes die nog kunnen in dat veld, indien alles bij een 4x4 is dat dus [1,2,3,4]
    // $rij = int - de rij waarin het veld zich bevindt, bijvoorbeeld [1, 2, [1,2,3,4], 4] het $veld dat we hier dus hebben is het 3e item (index 2!) in deze array

    // @todo: maak deze functie af


    return clear($veld);
}

function elimineer_kolom($veld, $indexKolom, $sudoku) {
    // haal uit de array $veld alle waardes die al voorkomen in de opgegeven kolom ($kolomindex)
    // $veld = array - met de waardes die nog kunnen in dat veld, indien alles bij een 4x4 is dat dus [1,2,3,4]
    // $indexKolom = int - de array index in welke kolom het veld zich bevindt
    // $sudoku = array - de hele suduku

    // @todo: maak deze functie af


    return clear($veld);
}

function elimineer_blok($veld, $x, $y, $sudoku) {
    // haal uit de array $veld alle waardes die al voorkomen in het blok, je moet aan de hand van de x/y positie zelf het blok bepalen.
    // $veld = array - de waardes die nog kunnen in dat veld, indien alles bij een 4x4 is dat dus [1,2,3,4]
    // $x = int - de array index van de rij van het veld
    // $y = int - de array index van de kolom van het veld
    // $sudoku = array - de hele suduku

    // @todo: maak deze functie af


    return clear($veld);
}

// Deze functie is klaar zorgt ervoor dat als het veld (array) nog één waarde heeft deze wordt omgezet naar een integer
function clear($veld) {
    if (count($veld) == 1) {
        return array_values($veld)[0];
    } else {
        return $veld;
    }
}
