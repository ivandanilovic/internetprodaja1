<?php
include "OtvaranjeBaze.php";

$rnazivproizvoda=$_GET["nazivproizvoda"];
// izvlacimo sve porudzbine iz tabele porudzbine
$result=mysql_query("SELECT BrojRacuna, DatumPorudzbine, DatumPlacanja, DeliveryTime, DatumIsporuke, Status, SredstvoPlacanja, NacinPlacanja, BrojPaketa, Napomena, TrenutnaCena, PorucenaKolicina, IdPartnera FROM `porudzbine` ORDER BY BrojRacuna ASC ",$db);
$ukupnacena=0;
$prvi=0;
$rezbr="";
    while ($myrow=mysql_fetch_row($result)) {
	            $r0=$myrow[0];
	            $r1=$myrow[1];
	            $r2=$myrow[2];
	            $r3=$myrow[3];
	            $r4=$myrow[4];
	            $r5=$myrow[5];
	            $r6=$myrow[6];
	            $r7=$myrow[7];
	            $r8=$myrow[8];
	            $r9=$myrow[9];
	            $r10=$myrow[10];
	            $r11=$myrow[11];
	            $r12=$myrow[12];

	            // koristimo samo za prvi prolaz kroz while petlju
	            if ($prvi==0) {
	            	$rezbr=$r0;
	            	$prvi=1;
	            }
	            // proveravamo da li je novi prolaz kroz while petlju novi racuna ili je isti, ako je novi resetujemo $rezbr na novi racun
	            if ($rezbr==$r0) {
	            	echo "novi racun<br>";
	            }else{
	            	$rezbr=$r0;
	            }
	            // ako je isti broj racuna ne radi nista
	            if ($rezbr==$r0) {
	            	if ($istiracun==$r0) {
	            		echo "preskoci<br>";
	            	}else{
	            		// izlistaj sve porudzbine za trazeni broj racuna
		            	$result1=mysql_query("SELECT BrojRacuna, TrenutnaCena, PorucenaKolicina FROM `porudzbine` WHERE BrojRacuna='$r0' ",$db);
		            	while ($myrow=mysql_fetch_row($result1)) {
		            	$rr0=$myrow[0];
			            $rr1=$myrow[1];
			            $rr2=$myrow[2];
			            $ukupnacena=$ukupnacena+($rr1*$rr2);
			        	}
			        	echo $r0."------".$ukupnacena."<br>";
			        	$resultupdate2==mysql_query("INSERT porudzbineukupno set IdProdzbine='$risporuke1', BrojRacuna='$rr0', UkupnaCena='$ukupnacena', DatumPorudzbine='$r1', DatumPlacanja='$r2', DatumIsporuka='$r4', DeliveryTime='$r3', Status='$r5', SredstvoPlacanja='$r6', NacinPlacanja='$r7', BrojPaketa='$r8', Napomena='$r9', IdPartnera='$r12' ",$db);
			        	
			        	$istiracun=$r0;
			        	$ukupnacena=0;
	            	}
	            }            
	}

?>