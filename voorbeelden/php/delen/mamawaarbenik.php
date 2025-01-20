<?php
// dobbelsteen
// 1 = zon
// 2 = zon
// 3 = schaap
// 4 = hond
// 5 = paard
// 6 = koe


$posKoe = 0; // stappen naar 16
$posSchaap = 0;
$posHond = 0;
$posPaard = 0;

while($posKoe < 16 && $posSchaap < 16 && $posHond < 16 && $posPaard < 16) {

    $gooi = rand(1, 6);

    if($gooi == 1 || $gooi == 2) {
        // huidige pos + 1
        $posKoe = $posKoe + 1; 
        $posSchaap = $posSchaap + 1;
        $posHond = $posHond + 1;
        $posPaard = $posPaard + 1;
    } elseif($gooi == 3) {
        $posSchaap = $posSchaap + 1;
    } elseif($gooi == 4) {
        $posHond = $posHond + 1;
    } elseif($gooi == 5) {
        $posPaard = $posPaard + 1;
    } else {
        $posKoe = $posKoe + 1;
    }

    echo "Koe: $posKoe, Hond: $posHond, Schaap: $posSchaap, Paard: $posPaard\n";
    
    sleep(1)
} 

echo "Spel afgelopen";