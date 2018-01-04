<?php
include "OtvaranjeBaze.php";

$rcena=$_GET["cena"];

$result=mysql_query("SELECT Naziv, Opis, Cena, Kolicina, AkcijskaCena, IstaknutiProizvodi, Kategorija FROM `proizvodi`",$db);

    while ($myrow=mysql_fetch_row($result)) {
	            $r0=$myrow[0];
	             $r1=$myrow[1];
	              $r2=$myrow[2];
	              $r3=$myrow[3];
	              $r4=$myrow[4];
	          		
	              
	              if ( $r2>$rcena){

			             echo $r0."  -  ".$r1."  - ".$r2. "  - ". $r3 ."  - ".   $r4."<br>";
			         }

    };
#  if (($prome==$prom2) and ($prom3==$prom4)) {}
?>