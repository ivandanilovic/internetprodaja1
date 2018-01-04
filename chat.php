<?
include "OtvaranjeBaze.php";
include "funkcije.php";
spl_autoload_register(function ($class)  
 {  
 include $class.'.php';  
 });  

$rid=$_GET["id"];

$rposlednitiket=poslednjitiket();
$rprvislobodantiket=prvislobodantiket($rposlednitiket);
$rnaslovtiketaprolaz=1;
$rtiket=$_GET["tiket"];
$rzavrsitiket=$_GET["zavrsitiket"];

$link1="chat.php?id=".$rid;
?>
<a href="<?php echo $link1?>"> Pcetna chat</a> <br><br>

<form method="get" action="chatnovitiket.php">
	<input type="hidden" name="id" value="<?  echo $rid; ?>">
	<input type="hidden" name="novitiket" value="<?  echo $rprvislobodantiket; ?>">
	<input type="hidden" name="naslovtiketaprolaz" value="<?  echo $rnaslovtiketaprolaz; ?>">
	<!-- <input type="submit" name="submit" value="Otvori novi tiket" style="color: red"> -->
	<?php
	// Kreiranje novog objekta koji ima 4 parametra  
 	//$f = new taster('submit','submit','Otvori novi tiket','color: red');  
	
	// Poziv metoda za ispis stringa  
 	//echo $f->customize_print();   
	//$print1 = new taster('submit','submit','Otvori novi tiket','color: red');
 	?>
</form>

<?
// ako kliknemo na zavrsi tiket stratus u tabeli cat menjamo na 0
if ($rzavrsitiket==1) {
	$result=mysql_query("UPDATE cet set Status='0' WHERE Tiket='$rtiket' ",$db);
}
// ako je administrator vidi sve tikete, dok korisnik vidi samo svoje tikete
if ($rid==3) {
	$resultcet1=mysql_query("SELECT Tiket, Datum, NaslovTiketa FROM `cet` WHERE Status='1' ORDER BY Tiket ASC",$db);
}else{
	$resultcet1=mysql_query("SELECT Tiket, Datum, NaslovTiketa FROM `cet` WHERE OdKoga='$rid' AND Status='1' ORDER BY Tiket ASC",$db);
}
	while ($myrow=mysql_fetch_row($resultcet1)) {
    		$rcet0=$myrow[0];
	        $rcet1=$myrow[1];
	        $rcet2=$myrow[2];

	        // -------------------------------------------vreme---------------------------------------------------
			$izbor="ispis";
			$mDatum=$rcet1;
			$vreme=trenutnovreme($mDatum, $izbor);
				// $godina=$mDatum['year'];
				// $mesec=$mDatum['mon'];
				// $dan=$mDatum['mday'];
				// $sat=$mDatum['hours'];
				// $minut=$mDatum['minutes'];
				// $sekund=$mDatum['seconds'];

				// $datumtimestamp= mktime ($sat,$minut,$sekund,$mesec,$dan,$godina);
				// $Odda= date('Y-m-d H:i:s',mktime ($sat,$minut,$sekund,$mesec,$dan,$godina));
			//--------------------------------------------------------------------------------------------------

			// link za tikete u tabeli cat koji imaju status 1
	      	$status1=1;
	        $link="chatporuke.php?tiket=".$rcet0."&id=".$rid."&prolaz1=".$status1;

	        // ne ponavljaj brojeve tiketa
	        if ($jedinstventiket==$rcet0) {
	        	# code...
	        }else{
	        	?> <a href="<?php echo $link?>"> <? echo $rcet0 ?></a> -----<? echo $vreme ?> -----<? echo $rcet2 ?> <br><?
	        }
	        $jedinstventiket=$rcet0;
		}


?>