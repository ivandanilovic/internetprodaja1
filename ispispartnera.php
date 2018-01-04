<?php
include "OtvaranjeBaze.php";

$rcena=$_GET["cena"];

$result=mysql_query("SELECT Naziv, Opis, Cena, Kolicina, AkcijskaCena, IstaknutiProizvodi, Kategorija FROM `proizvodi`",$db);
$ukupnasuma=0;
    while ($myrow=mysql_fetch_row($result)) {
	            $r0=$myrow[0];
	             $r1=$myrow[1];
	              $r2=$myrow[2];
	              $r3=$myrow[3];
	              $r4=$myrow[4];
	          		
	          		$iznos=$r2*$r3;
	                $ukupnasuma=$ukupnasuma+$iznos;


	             		echo $r0."  - ".$r2."  -  ".$r3." - ".$iznos."<br>";
    };
    echo "=================================================================="."<br>";
    echo "ukupan iznos lagera je".$ukupnasuma;

?>