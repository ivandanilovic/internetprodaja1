<?php

include "OtvaranjeBaze.php";


$rSredstvoPlacanja=$_GET["sredstvoPlacanja"];

$rOpis=$_GET["Opis"];


echo $rSredstvoPlacanja."<br>";

echo $rOpis."<br>";


$result=mysql_query("insert sredstvoplacanja set SredstvoPlacanja='$rSredstvoPlacanja', Opis='$rOpis'",$db);

?>