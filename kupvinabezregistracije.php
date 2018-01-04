<?php
include "OtvaranjeBaze.php";
$rbrojracuna=$_GET["brojracuna"];
$ridporudzbine=$_GET["idporudzbine"];
$rnacinplacanja=$_GET["Meni"];

$rimeprezime=$_GET["imeprezime"];
$remail=$_GET["email"];
$rdrzava=$_GET["drzava"];
$rmesto=$_GET["mesto"];
$radresa=$_GET["adresa"];
$rpostanskiBroj=$_GET["postanskiBroj"];
$rzipKod=$_GET["zipKod"];
$rtelefonMobilni=$_GET["telefonMobilni"];

$rflag1=$_GET["vrednostflaga"]; 
?> ovo je vrednost flaga <?php echo  $rflag1;

$rnasaokorisnika=$_GET["nasaokorisnika"];
?> ovo je nasaokorisnika <?php echo $rnasaokorisnika; ?> <br> <?php 

?> broj racuna: <?php echo $rbrojracuna; ?> <br> <?php 
?> email: <?php echo $remail; ?> <br> <?php
?> mobilni telefon: <?php echo $rtelefonMobilni; ?> <br> <?php

$result3=mysql_query("SELECT IdNacinplacanja, NacinPlacanja  FROM `nacinplacanja` WHERE NacinPlacanja='$rnacinplacanja' ",$db);
while ($myrow1=mysql_fetch_row($result3)) {
	   $er0=$myrow1[0];
	   $er1=$myrow1[1];					            
};

if ($rnasaokorisnika==1) {
	$resultupdate==mysql_query("UPDATE porudzbine set IdPartnera='$ridpartnera', NacinPlacanja='$er0' WHERE BrojRacuna='$rbrojracuna' ",$db);
}else{
// prenose se podaci korisnika sa stranice izaberi placanje i njegov id se upisuje na njegovu porudzbinu
$resulinsert==mysql_query("INSERT partneri set ImePrezime='$rimeprezime', EmailPartnera='$remail', Drzava='$rdrzava', Mesto='$rmesto', Adresa='$radresa', PostanskiBroj='$rpostanskiBroj', ZipKod='$rzipKod', TelefonMob='$rtelefonMobilni' ",$db);

$result=mysql_query("SELECT IdPartnera, ImePrezime, EmailPartnera, Drzava, Mesto, Adresa, PostanskiBroj, ZipKod, TelefonMob FROM `partneri`",$db);

$idParRez=0;
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
	        if ($r2==$remail && $r8== $rtelefonMobilni) {
	        	$idParRez=$r0;
	        	$resultupdate==mysql_query("UPDATE porudzbine SET IdPartnera='$r0', NacinPlacanja='$er0' WHERE BrojRacuna='$rbrojracuna' ",$db);
	        }

		}
		// potrebno je izvuci samo email i broj telefona ne sve podatke o partneru
}
?>
		<br><br>
		<form method="get" action="kupovina.php">
			<input type="hidden" name="idpartnera" value="<?  echo $idParRez; ?>" size="9">
			<input type="hidden" name="vrednostflaga" value="<?  echo $rflag1; ?>" size="9">
			<input type="hidden" name="brojracuna" value="<?  echo $rbrojracuna; ?>" size="9"> 	
			<input type="hidden" name="istibrojracuna" value="<?  echo $rbrojracuna; ?>" size="9">

			<input type="submit" name="kupi" value="nastavi dalje kupovinu">
										
		</form>

		<form method="get" action="zavrsetakkupovine.php">
			<input type="hidden" name="istibrojracuna" value="<?  echo $rbrojracuna; ?>" size="9"> 
			<input type="hidden" name="idpartnera" value="<?  echo $idParRez; ?>" size="9">	
							       
			<input type="submit" name="zavrsi kupovinu" value="zavrsi kupovini">
										
		</form>