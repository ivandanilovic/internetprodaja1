<?php
include "OtvaranjeBaze.php";


$rSifraValute=$_GET["SifraValute"];

$rNazivValute=$_GET["NazivValute"];

$rOznakaValute=$_GET["OznakaValute"];

$rKolicinaNovca=$_GET["KolicinaNovca"];

$rKupovniKurs=$_GET["KupovniKurs"];

$rProdajniKurs=$_GET["ProdajniKurs"];

echo $rSifraValute."<br>";

echo $rNazivValute."<br>";

echo $rOznakaValute."<br>";

echo $rKolicinaNovca."<br>";

echo $rKupovniKurs."<br>";

echo $rProdajniKurs."<br>";

$result=mysql_query("insert kursnalista set SifraValute='$rSifraValute', NazivValute='$NazivValute', OznakaValute='$rOznakaValute', KolicinaNovca='$rKolicinaNovca', KupovniKurs='$rKupovniKurs', ProdajniKurs='$rProdajniKurs'",$db);



?>