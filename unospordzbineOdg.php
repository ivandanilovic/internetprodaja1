<?php
include "OtvaranjeBaze.php";


$rIdPartnera=$_GET["IdPartnera"];

$rTrenutnaCena=$_GET["TrenutnaCena"];

$rPorucenaKolicina=$_GET["PorucenaKolicina"];

$rBrojRacuna=$_GET["BrojRacuna"];

$rDatumPorudzbine=$_GET["DatumPorudzbine"];

$rDatumPlacanja=$_GET["DatumPlacanja"];

$rDeliveryTime=$_GET["DeliveryTime"];

$rStatus=$_GET["Status"];

$rSredstvoPlacanja=$_GET["SredstvoPlacanja"];

$rNacinPlacanja=$_GET["NacinPlacanja"];

echo $rIdPartnera."<br>";

echo $rTrenutnaCena."<br>";

echo $rPorucenaKolicina."<br>";

echo $rBrojRacuna."<br>";

echo $rDatumPorudzbine."<br>";

echo $rDatumPlacanja."<br>";

echo $rDeliveryTime."<br>";

echo $rStatus."<br>";

echo $rSredstvoPlacanja."<br>";

echo $rNacinPlacanja."<br>";


$result=mysql_query("insert porudzbine set IdPartnera='$rIdPartnera', TrenutnaCena='$rTrenutnaCena', PorucenaKolicina='$rPorucenaKolicina', BrojRacuna='$rBrojRacuna', DatumPorudzbine='$rDatumPorudzbine', DatumPlacanja='$rDatumPlacanja', DeliveryTime='$rDeliveryTime' , Status='$rStatus' , SredstvoPlacanja='$rSredstvoPlacanja' , NacinPlacanja='$rNacinPlacanja'",$db);

#$result=mysql_query("insert porudzbine set IdPartnera='$rIdPartnera'",$db);

?>
