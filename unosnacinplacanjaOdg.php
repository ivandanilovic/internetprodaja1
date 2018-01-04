<?php
include "OtvaranjeBaze.php";


$rNacinPlacanja=$_GET["NacinPlacanja"];

$rStatus=$_GET["Status"];

$ropis=$_GET["opis"];


echo $rNacinPlacanja."<br>";

echo $rStatus."<br>";

echo $ropis."<br>";

$result=mysql_query("insert nacinplacanja set NacinPlacanja='$rNacinPlacanja', Status='$rStatus', Opis='$ropis'",$db);



?>