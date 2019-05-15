<?php
echo "Jesse\n";
$nimi = "Nelli\n";
echo $nimi;
$tervehdys = "Hei mitä kuuluu $nimi\n";
echo "Missä olet " . $nimi . "?\n";
$nimet = ["Jesse", "Nelli", "Tiina"];
echo $nimet[1];
$age = 18;
if($age == 18){
    echo "Olet tasan 18\n";
} else {
    echo "Olet vielä lapsi\n";
}
function tervehdi($nimi){
    return "Heippa $nimi\n";
}
echo tervehdi("Nelli");
echo tervehdi("Tiina");

echo 5 ** 2;