<?php

function elimineer_rij($veld, $rij) {
    // haal uit de array $veld alle waardes die al voorkomen in de rij ($rij)
    return clear($veld);
}

function elimineer_kolom($veld, $kolomindex, $sudoku) {
    // haal uit de array $veld alle waardes die al voorkomen in de opgegeven kolom ($kolomindex)
    return clear($veld);
}

function elimineer_blok($veld, $x, $y, $sudoku) {
    // haal uit de array $veld alle waardes die al voorkomen in het blok, je moet aan de hand van de x/y positie zelf het blok bepalen.
    return clear($veld);
}

// Deze functie zorgt ervoor dat als het veld (array) nog één waarde heeft deze wordt omgezet naar een integer
function clear($veld) {
    if (count($veld) == 1) {
        return array_values($veld)[0];
    } else {
        return $veld;
    }
}
