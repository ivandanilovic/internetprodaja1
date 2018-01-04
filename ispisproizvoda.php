<?php
include "OtvaranjeBaze.php";

$rnazivproizvoda=$_GET["nazivproizvoda"];

$result=mysql_query("SELECT Naziv, Opis, Cena, Kolicina, AkcijskaCena, IstaknutiProizvodi, Kategorija FROM `proizvodi`",$db);

    while ($myrow=mysql_fetch_row($result)) {
	            $r0=$myrow[0];
	             $r1=$myrow[1];
	              $r2=$myrow[2];
	              $r3=$myrow[3];
	              $r4=$myrow[4];
	              $uslov="Pegla";
	              $r0 = strtolower($r0);	
	               $rnazivproizvoda = strtolower($rnazivproizvoda);
	              #echo $r0. " - " . $rnazivproizvoda;	
	              if ( $rnazivproizvoda==$r0){

			             echo $r0."  -  ".$r1."  - ".$r2. "  - ". $r3 ."  - ".   $r4."<br>";
			         }

    };
#  if (($prome==$prom2) and ($prom3==$prom4)) {}
?>


