<?php
echo"Het Albumoverzicht:".PHP_EOL;

$albums = array(
    "Citizen of Glass" => 4.5,
    "Night" => 9,
    "New Eyes" => 5,
    "Strange Trails" => 10,
);

foreach($albums as $album => $prijs){

    $gemmideldebedrag = array_sum($albums) / count($albums);
    echo"$album "." $prijs".PHP_EOL;

}
echo"Totaal bedrag voor alle album's :" . array_sum($albums).PHP_EOL;
echo"Gemmidelde bedrag van alle albums : $gemmideldebedrag".PHP_EOL;
?>