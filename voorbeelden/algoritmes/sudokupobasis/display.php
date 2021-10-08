<?php
/*
Deze php code zorgt ervoor dat de sudoku in een raster wordt getoond. Deze is direct zo gemaakt dat dit zowel een 4x4 als 9x9 kan zijn.
In principe hoef je verder niet iets aan deze code te wijzigen
*/

$lijnen = array();
if(count($sudokuprint) == 9) {
    $lijnen = array(2, 5);
}
elseif (count($sudokuprint) == 4) {
    $lijnen = array(1);
}

foreach($sudokuprint as $y => $rij): ?>
    <div style="display: flex; height 50px; justify-content: flex-start; flex-direction: row;">
        <?php foreach($rij as $x => $veld): ?>
            <?php
            $stylegewijzigd = "";

            if(in_array($x, $lijnen)) $stylegewijzigd = "border-right: 2px solid #000000;";
            if(in_array($y, $lijnen)) $stylegewijzigd .= "border-bottom: 2px solid #000000;"
            ?>
            <div style="width: 70px; height: 50px; text-align: center; padding-top: 20px; border: 1px solid #666666; <?php echo $stylegewijzigd; ?>">
                <?php
                if(is_array($veld)) {
                    echo implode(",", $veld);
                } else {
                    echo $veld;
                }
                ?>
            </div>
        <?php endforeach; ?>
    </div>
<?php endforeach; ?>
