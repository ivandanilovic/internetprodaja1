<?php
function ispisporuka($rtiket, $rid, $rnovitiket, $rprolaz1) {
include "OtvaranjeBaze.php";
if ($rprolaz1==1) {
	$resultcet=mysql_query("SELECT Poruka, Kome, OdKoga, Datum, Tiket, Status FROM `cet` WHERE Tiket='$rtiket' ",$db);
}else{
	$resultcet=mysql_query("SELECT Poruka, Kome, OdKoga, Datum, Tiket, Status FROM `cet` WHERE Tiket='$rnovitiket' ",$db);
}

while ($myrow=mysql_fetch_row($resultcet)) {
    		$rcet0=$myrow[0];
	        $rcet1=$myrow[1];
	        $rcet2=$myrow[2];
	        $rcet3=$myrow[3];
	        $rcet4=$myrow[4];
	        $rcet5=$myrow[5];
	$resultpartneri=mysql_query("SELECT IdPartnera, ImePrezime, Prioritet FROM `partneri` WHERE IdPartnera='$rcet2'",$db);
	while ($myrow=mysql_fetch_row($resultpartneri)) {
				$rpartneri0=$myrow[0];
	        	$rpartneri1=$myrow[1];
	        	$rpartneri2=$myrow[2];

	        	$izbor1="ispis";
				$mDatum=$rcet3;
				$vreme1=trenutnovreme($mDatum, $izbor1);

	        	?>
				<table style="border: 2px solid white;">						
					<tr>
						<? if ($rid==$rcet2) {?>
							<td style="width: 300px; border: 1px solid white">  </td>
		        			<td style="width: 300px; border: 1px solid black">	<?php echo $vreme1.'<br>'.$rcet0 ?>  </td>
						<? }else { ?>
							<td style="width: 300px; border: 1px solid black">	<?php echo $vreme1.'<br>'.$rcet0 ?>  </td>
			        		<td style="width: 300px; border: 1px solid white">	 </td>
		        		<? } ?>
					</tr>
				</table>
				<?
		}
	}
}

function trenutnovreme($mDatum, $izbor) {

	$godina=$mDatum['year'];
	$mesec=$mDatum['mon'];
	$dan=$mDatum['mday'];
	$sat=$mDatum['hours'];
	$minut=$mDatum['minutes'];
	$sekund=$mDatum['seconds'];

	if ($izbor=="upis") {
		//upisuje trenutno vreme u bazu kao timestam (kao varchar)
		$datumtimestamp= mktime ($sat,$minut,$sekund,$mesec,$dan,$godina);
		return $datumtimestamp;
	}
	if ($izbor=="ispis") {
		//pretvara varchar iz baze (vreme kao timestamp) u intiger
		settype($mDatum, "integer");
		//pretvara timestamp u citljivo vreme
		$Odda= date('Y-m-d H:i:s',$mDatum);
		return $Odda;
	}

}

function poslednjitiket() {
		include "OtvaranjeBaze.php";
		$resultiket=mysql_query("SELECT Tiket FROM `cet` ORDER BY Tiket ASC",$db);
		while ($myrow=mysql_fetch_row($resultiket)) {
					$rtiket0=$myrow[0];
			}
		return $rtiket0;	
}

function prvislobodantiket($rposlednitiket) {
		$novitiket=$rposlednitiket+1;
	return $novitiket;
}



function procenat($iznos, $procenat) {
	// Ukupan broj poseta strani
	// echo $iznos ."<br>"; 
	// echo $procenat ."<br>";
	$rezultat=($procenat/100)*$iznos;
	echo $procenat ?> % od broja <?php echo $iznos ?> = <?php echo $rezultat."<br><br>";
}


function stepenovanje1($rez, $izn) {
$rez=$rez*$izn;	
echo "usao u funkciju stepenovanje1---".$rez."<br>"; 
return $rez;
	}

function stepenovanje($iznos, $stepen) {
    
$riznos=$iznos;
$rezultat=1;
	$brojac=1;
while ( $brojac<=$stepen) {
		
 		$rezultat=stepenovanje1($rezultat, $iznos);
		$brojac++;
 	}
	echo $riznos ?> na <?php echo $stepen ?> stepen = <?php echo $rezultat."<br><br>";
 }

function stepen1($iznos, $stepen, $rezultat, $brojac) {
    
$riznos=$iznos;
// $rezultat=1;
// 	$brojac=1;
// while ( $brojac<=$stepen) 
		if($brojac<=$stepen){
			$rezultat=$rezultat*$iznos;
			$brojac++;
			echo $iznos ."<br>";
			echo $stepen ."<br>";
			echo $rezultat ."<br>";
			echo $brojac ."<br>";
			echo "---------<br>";
 		 	stepen1( $iznos, $stepen, $rezultat, $brojac);
		
 	} else {
    echo $riznos ?> na <?php echo $stepen ?> stepen = <?php echo $rezultat."<br><br>";
	// echo $riznos."na". echo $stepen."stepen =". echo $rezultat."<br><br>";
	}
 }

 // function faktorijel1($broj){
 // 	$broj--;
 // }

 function faktorijel($broj, $rezultat){
 	$rbroj=$broj;
 	if ($broj>0) {
 		$rezultat=$rezultat*$broj;
 		$broj--;
 		faktorijel($broj, $rezultat);
 	}else{
 	 echo "faktorijel od broja".$rbroj."=".$rezultat;
 	}
 }

function tasterfizickapravna($podaci, $prolaz, $username, $password){

	if ($podaci==1){
		$tekst="Licni podaci";
	} else {
		$tekst="Kupovine";
	}
	
 	?>
				<form method="get" action="korisnickastranaadministrator.php">
				<input type="hidden" name="podaci" value="<?  echo $podaci; ?>">
				<input type="hidden" name="prolaz" value="1"  size="9">
				<input type="hidden" name="username" value="<?  echo $username; ?>" size="9">
				<input type="hidden" name="password" value="<?  echo $password; ?>" size="9">
				<input type="submit" name="licnipodaci" value= " <?php echo $tekst ?> " style="width: 150px; height: 40px">
				</form>

 	<?php
 }

function login ($username, $password, $prolaz, $izbor) {
	?>
	<form method="get" action="korisnickastranaadministrator.php">
	Unesi username: <input type="text" name="username"><br><br>
	Unesi password: <input type="password" name="password"><br><br>

	<input type="hidden" name="prolaz" value="1"  size="9">
	<input type="submit" name="login" value="login">
	</form>
	<?php
}
?>