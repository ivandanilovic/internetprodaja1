<?php
include "OtvaranjeBaze.php";
$ridpro=$_GET["idpro"];
$rkolicina=$_GET["kolicina"];

$ristibrojracuna=$_GET["istibrojracuna"];
?> ovo je isti br racuna <?php echo $ristibrojracuna; ?> <br> <?php

$rflag1=$_GET["vrednostflaga"];
?> ovo je vrednost flaga <?php echo  $rflag1; ?> <br> <?php

$ridpartnera=$_GET["idpartnera"];
?> ovo je idpartnera <?php echo $ridpartnera; ?> <br> <?php 


// uslov da li se porucuje jedan proizvod ili smo isli na nastavi kupovinu i u tom slucaju se ne kreira novi broj racuna vec uzima kreirani
if ($rflag1==1) {
	$kontrbroj=$ristibrojracuna; 
	// flag postavljamo na vrednost 1 da bi se u sledecoj kupovini ne kreira broj racuna
	$flag1=1; 
}else{
	// ========================================= za slucajan broj racuna ===================================
$mDatum=getdate();
$godina=$mDatum['year'];
$mesec=$mDatum['mon'];
$dan=$mDatum['mday'];
                 $Odda= date('Y-m-d',mktime (0,0,0,$mesec,$dan,$godina));

    $mDatum=getdate();
	$godina=$mDatum['year'];
	$mesec=$mDatum['mon'];
	$dan=$mDatum['mday'];
	$sat=$mDatum['hours'];
	$minut=$mDatum['minutes'];
	$sekund=$mDatum['seconds'];
	$usekundama=($sat*3600) + ($minut*60) + $sekund;
    $ukukonbr=29000;
    srand ((double) microtime() * 1234567);
	$kontbroj1 = rand(1,$ukukonbr);
    $ukukonbr=29000;
    srand ((double) microtime() * 1234567);
	$kontbroj2 = rand(1,$ukukonbr);
	$kontrbroj=$usekundama . '-' . $kontbroj1 . '-' . $kontbroj2 . '-' . $dan . $mesec . '-' . $godina;

// ========================================= kraj za slucajan broj racuna ===================================
// kreira se datum porudzbine koji se upisuje u tabelu porudzbine u timestamp formatu
	$datumtimestamp= mktime (0,0,0,$mesec,$dan,$godina);

	// flag postavljamo na vrednost 1 i nastavkom kupovine ne kreira se novi broj racuna
	$flag1=1; 
}

	


$kolonauredu=1;
$result=mysql_query("SELECT Naziv, Opis, Cena, Kolicina, AkcijskaCena, IstaknutiProizvodi, Kategorija, IdProizvoda FROM `proizvodi`",$db);

    while ($myrow=mysql_fetch_row($result)) {
    		$r0=$myrow[0];
	        $r1=$myrow[1];
	        $r2=$myrow[2];
	        $r3=$myrow[3];
	        $r4=$myrow[4];
	        $r7=$myrow[7];
	        if ($ridpro==$r7) {
?>
<table>
	<tr>
								<td style="width: 33.33%"> 
							        
							        
							        <?php $slika ="image/".$r7.".jpg";?>
							        <img src="<?php echo $slika; ?>" alt="" border="0" /><br><br><br>

							        

							        
								</td>

								<td style="width: 33.33%"> 
									<?php echo $r0; ?> <br><br><br>

							        <?php echo $r1; ?><br><br><br>
							        
							        
							        Cena : <?php echo $r2; ?><br><br><br>

							        <!-- trazimo partnera u bazi prema idPartnera za if ulov if($nasaokorisnika==1)-->
							        <?php 
										$result=mysql_query("SELECT IdPartnera FROM `partneri`",$db);
										$nasaokorisnika=0;
										   
										    while ($myrow=mysql_fetch_row($result)) {
										    		$r0=$myrow[0];
										    		if ($ridpartnera==$r0) {
										    			$nasaokorisnika=1;
										    		}
										    		
											    }
									// da li je korinik ulogovan, ako jeste pojavi ce se taster zavrsi kupovinu else pojavice se izaberi placanje		    
									if($nasaokorisnika==1){
										?><form method="get" action="izaberiplacanje.php">

							        	porucena kolicina: <?php echo $rkolicina ?> <br><br>
							        	<input type="hidden" name="idpartnera" value="<?php  echo $ridpartnera; ?>" size="9">
							        	<input type="hidden" name="vrednostflaga" value="<?php  echo $flag1; ?>" size="9">
										<input type="hidden" name="idpro" value="<?php  echo $r7; ?>" size="9">
										<!-- proveri da li ovo treba -->
										<!-- prenosi broj racuna na izaberiplacanje.php ako se korisnik nije ulogovao-->
										<input type="hidden" name="brojracuna" value="<?php  echo $kontrbroj; ?>" size="9"> 
										<!-- prenosi broj racuna na izaberiplacanje.php ako se korisnik ulogovao i nastavlja kupovinu-->
							       		<input type="hidden" name="istibrojracuna" value="<?php  echo $kontrbroj; ?>" size="9">
										<input type="submit" name="kupi" value="zavrsi kupovinu">
										</form><?php
									}else{

										?><form method="get" action="izaberiplacanje.php">

							        	porucena kolicina: <?php echo $rkolicina ?> <br><br>
							        	<input type="hidden" name="idpartnera" value="<?php  echo $ridpartnera; ?>" size="9">
							        	<input type="hidden" name="vrednostflaga" value="<?php  echo $flag1; ?>" size="9">
										<input type="hidden" name="idpro" value="<?php  echo $r7; ?>" size="9">

										<!-- prenosi broj racuna na izaberiplacanje.php -->
										<input type="hidden" name="brojracuna" value="<?php  echo $kontrbroj; ?>" size="9"> 
							       
										<input type="submit" name="kupi" value="izaberi placanje">

									</form><?php
									}
									?>

									<form method="get" action="kupovina.php">
										<input type="hidden" name="idpartnera" value="<?php  echo $ridpartnera; ?>" size="9">
							       		<input type="hidden" name="brojracuna" value="<?php  echo $kontrbroj; ?>" size="9">
							       		<input type="hidden" name="vrednostflaga" value="<?php  echo $flag1; ?>" size="9"> <!-- prenosimo vrednost flag-a -->
							       		<input type="hidden" name="istibrojracuna" value="<?php  echo $kontrbroj; ?>" size="9">

										<input type="submit" name="kupi" value="nastavi dalje kupovinu">
										
									</form>
								</td>
	</tr>
	
</table>






<?php
$datum=time();
?> vrednost flag <?php echo $flag1 ?> <br> <?php;
// uslov ako narucujemo jedan proizvod upisujemo kreirani broj racuna ako nastavljamo kupovinu uzimamo kreirani broj racuna sa predhodne kupovine
if ($rflag1==1) {
	$result1=mysql_query("INSERT porudzbine set IdProizvoda='$ridpro', BrojRacuna='$ristibrojracuna', TrenutnaCena='$r2', PorucenaKolicina='$rkolicina', DatumPorudzbine='$datum', DatumPlacanja='$datum'",$db);

	$result11=mysql_query("SELECT BrojRacuna, UkupnaCena FROM `porudzbineukupno` WHERE BrojRacuna='$ristibrojracuna'",$db);
    while ($myrow=mysql_fetch_row($result11)) {
    		$rporudzbineukupno0=$myrow[0];
	        $rporudzbineukupno1=$myrow[1];
		}

	$ukupnacena=($r2*$rkolicina)+$rporudzbineukupno1;
	$result10=mysql_query("UPDATE porudzbineukupno set UkupnaCena='$ukupnacena',  DatumPorudzbine='$datum' WHERE BrojRacuna='$ristibrojracuna'",$db);
}else{
	echo $kontrbroj; ?> <br> <?php;

	$result1=mysql_query("INSERT porudzbine set IdProizvoda='$ridpro', BrojRacuna='$kontrbroj', TrenutnaCena='$r2', PorucenaKolicina='$rkolicina', DatumPorudzbine='$datum'",$db);

	$ukupnacena=$r2*$rkolicina;
	$result10=mysql_query("INSERT porudzbineukupno set BrojRacuna='$kontrbroj', UkupnaCena='$ukupnacena',  DatumPorudzbine='$datum' ",$db);
	echo "usao else";
}

?> ovo je id partnera <?php echo $ridpartnera; ?> <br> <?php

echo $datum."<br>";
$d=$datum/86400;
echo $d;

?>

<?php  

}
}
?>