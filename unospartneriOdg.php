<?php

include "OtvaranjeBaze.php";


$rImePrezime=$_GET["ImePrezime"];

$rusername=$_GET["username"];

$rpassword=$_GET["password"];

$remail=$_GET["email"];

$rdrzava=$_GET["drzava"];

$rmesto=$_GET["mesto"];

$radresa=$_GET["adresa"];

$rpostanskiBroj=$_GET["postanskiBroj"];

$rzipKod=$_GET["zipKod"];

$rtelefonMobilni=$_GET["telefonMobilni"];

$rPIB=$_GET["PIB"];

$rMB=$_GET["MB"];

$rziroRacun=$_GET["ziroRacun"];

$rprioritet=$_GET["prioritet"];

$rstatus=$_GET["status"];

echo $rImePrezime."<br>";

echo $rusername."<br>";

echo $rpassword."<br>";

echo $remail."<br>";

echo $rdrzava."<br>";

echo $rmesto."<br>";

echo $radresa."<br>";

echo $rpostanskiBroj."<br>";

echo $rzipKod."<br>";

echo $rtelefonMobilni."<br>";

echo $rPIB."<br>";

echo $rMB."<br>";

echo $rziroRacun."<br>";

echo $rprioritet."<br>";

echo $rstatus."<br>";


$result=mysql_query("insert partneri set ImePrezime='$rImePrezime', Username='$rusername', Password='$rpassword', EmailPartnera='$remail', Drzava='$rdrzava', Mesto='$rmesto', Adresa='$radresa', PostanskiBroj='$rpostanskiBroj', ZipKod='$rzipKod', TelefonMob='$rtelefonMobilni', PIB='$rPIB', MB='$rMB', ZiroRacun='$rziroRacun', Prioritet='$rprioritet', Status='$rstatus'",$db);

?>