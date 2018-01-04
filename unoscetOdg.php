<?php
include "OtvaranjeBaze.php";


$rporuku=$_GET["poruku"];

$rstatus=$_GET["status"];



echo $rporuku."<br>";

echo $rstatus."<br>";



$result=mysql_query("insert cet set Poruka='$rporuku', Status='$rstatus'",$db);



?>