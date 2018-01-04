<?php
include "OtvaranjeBaze.php";

$rcena=$_GET["cena"];

$result=mysql_query("SELECT Naziv, Opis, Cena, Kolicina, AkcijskaCena, IstaknutiProizvodi, Kategorija FROM `proizvodi`",$db);
$ukupnasuma=0;
$sumaPDVa=0;
    while ($myrow=mysql_fetch_row($result)) {
	            $r0=$myrow[0];
	            $r1=$myrow[1];
	            $r2=$myrow[2];
	            $r3=$myrow[3];
	            $r4=$myrow[4];
	          		
	          		$iznos=$r2*$r3;
	          		$iznosPDVa=$iznos*0.2;
	          		$sumaPDVa=$sumaPDVa+$iznosPDVa;
	                $ukupnasuma=$ukupnasuma+$iznos;


	             		echo $r0."  - ".$r2."  -  ".$r3." - ".$iznos."  -  ".$iznosPDVa."<br><br>";

	             		
    };
    echo "=================================================================="."<br>";
    echo "ukupan iznos lagera je  ".$ukupnasuma."  ----  ";
    echo "ukupan iznos PDVa  ".$sumaPDVa."<br><br>";


$result=mysql_query("SELECT Naziv, Opis, Cena, Kolicina, AkcijskaCena, IstaknutiProizvodi, Kategorija FROM `proizvodi` WHERE Kolicina=1",$db);

    while ($myrow=mysql_fetch_row($result)) {
    		$r0=$myrow[0];
	        $r1=$myrow[1];
	        $r2=$myrow[2];
	        $r3=$myrow[3];
	        $r4=$myrow[4];

    			if ($r3>0) {
    				echo $r0."  -  ".$r2."   -  ".$r3."<br>";
    			}
    		
    }


?>

<!-- ispisi sve proizvode cija je kolicina veca od 0  u lager listi
ispis svih proizvoda sa tasterom kupi nova stranica -->