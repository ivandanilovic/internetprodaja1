<?php
include "OtvaranjeBaze.php";

$rbrojracuna=$_GET["istibrojracuna"];

$ridpartnera=$_GET["idpartnera"];
?> idpartnera: <?php echo $ridpartnera; ?> <br> <?php 

$rpotvrdi=$_GET["potvrdi"];
?> potvrdi: <?php echo $rpotvrdi; ?> <br> <?php 

$rtiplica=$_GET["tiplica"];
?> tiplica: <?php echo $rtiplica; ?> <br> <?php 

// ========================================= Logovanje ===========================================================================
// $rusername=htmlspecialchars($username);
?> username: <?php echo $rusername; ?> <br> <?php 
// $rpassword=htmlspecialchars($password);
?> password: <?php echo $rpassword; ?> <br><br><br>  

<!-- <form method="get" action="zavrsetakkupovine.php">
Unesi username  <input type="text" name="username"><br><br>
Unesi password <input type="password" name="password"><br><br>

<input type="hidden" name="istibrojracuna" value="<?  echo $rbrojracuna; ?>" size="9">
<input type="hidden" name="idpartnera" value="<?  echo $ridpartnera; ?>" size="9">	

<input type="submit" name="submit" value="Login">
</form> -->
<!-- ========================================= Logovanje kraj=============================================================================== -->
<?php 
// $result=mysql_query("SELECT IdPartnera, Username, Password, EmailPartnera, TelefonMob FROM `partneri`",$db);
// while ($myrow=mysql_fetch_row($result)) {
    		// $ar0=$myrow[0];
	     //    $ar1=$myrow[1];
	     //    $ar2=$myrow[2];
	     //    $ar3=$myrow[3];
	     //    $ar4=$myrow[4];
	        
	// if ($ridpartnera==$r0) {
	// 	$arr0=$r0;
	// 	$arr1=$r1;
	// 	$arr2=$r2;
	// 	$arr3=$r3;
	// 	$arr4=$r4;

	// 	if ($rusername==$arr1) {
	// 		if ($rpassword==$arr2) {
				
// =============================================================================================================================================



 // ako je korisnik ulogovan

// =============================================================================================================================================
				
// 			}
// 		}
		
// 	}
// }



if ($potvrdi==1) {
	$rbrojracuna=$_GET["istibrojracuna"];
	?> Vas broj racuna je:  <?php echo $rbrojracuna;
	?> <br><br><br> 
	Uspesno ste zavrsili kupovinu <?php
	
	$rimeprezime=$_GET["imeprezime"];
	$rdrzava=$_GET["drzava"];
	$rmesto=$_GET["mesto"];
	$radresa=$_GET["adresa"];
	$rpostanskiBroj=$_GET["postanskiBroj"];
	$rzipKod=$_GET["zipKod"];
	$rtelefonMobilni=$_GET["telefonMobilni"];
	$rPIB=$_GET["PIB"];
	$rMB=$_GET["MB"];
	$rnapomena=$_GET["napomena"];

	$resultinsert==mysql_query("INSERT isporuke set BrojRacuna='$rbrojracuna', ImePrezime='$rimeprezime', Drzava='$rdrzava', Mesto='$rmesto', Adresa='$radresa', PostanskiBroj='$rpostanskiBroj', ZipKod='$rzipKod', TelefonMobilni='$rtelefonMobilni', PIB='$rPIB', MB='$rMB' ",$db);

	$resultupdate==mysql_query("UPDATE porudzbine set Napomena='$rnapomena' WHERE BrojRacuna='$rbrojracuna' ",$db);


}else {

$result=mysql_query("SELECT IdPartnera, ImePrezime, EmailPartnera, Drzava, Mesto, Adresa, PostanskiBroj, ZipKod, TelefonMob, PIB, MB FROM `partneri`",$db);
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

	if ($ridpartnera==$r0) {
		$rr0=$r0;
		$rr1=$r1;
		$rr2=$r2;
		$rr3=$r3;
		$rr4=$r4;
		$rr5=$r5;
		$rr6=$r6;
		$rr7=$r7;
		$rr8=$r8;
		$rr9=$r9;
		$rr10=$r10;
	}
}

?>





<br><br><br><br>

Unesi podatke za isporuku proizvoda: <br><br>
<table>
	<td>
		<form method="get" action="zavrsetakkupovine.php">
		<input type="hidden" name="tiplica" value="<?php  echo $tiplica=1; ?>">
		<input type="hidden" name="istibrojracuna" value="<?php  echo $rbrojracuna; ?>" size="9">
		<input type="hidden" name="idpartnera" value="<?php  echo $ridpartnera; ?>" size="9">	
		<input type="submit" name="fizickolice" value="Fizicko lice" style="width: 150px; height: 40px">
		</form>
	</td>
	<td>
		<form method="get" action="zavrsetakkupovine.php">
		<input type="hidden" name="istibrojracuna" value="<?php  echo $rbrojracuna; ?>" size="9">
		<input type="hidden" name="tiplica" value="<?php  echo $tiplica=2; ?>">
		<input type="submit" name="pravnolice" value="Pravno lice" style="width: 150px; height: 40px">
		</form>
	</td>
</table>
<br>

<?php 
if ($rtiplica==2) { ?>
	<form method="get" action="zavrsetakkupovine.php">
	Unesi naziv pravnog lica <input type="text" name="imeprezime" value="<?php  echo $rr1; ?>"><br><br>
	Unesi PIB <input type="text" name="PIB" value="<?php  echo $rr9; ?>"><br><br>
	Unesi MB <input type="text" name="MB" value="<?php  echo $rr10; ?>"><br><br>
	Unesi drzavu <input type="text" name="drzava" value="<?php  echo $rr3; ?>"><br><br>
	Unesi mesto <input type="text" name="mesto" value="<?php  echo $rr4; ?>"><br><br>
	Unesi adresu <input type="text" name="adresa" value="<?php  echo $rr5; ?>"><br><br>
	Unesi postanski broj <input type="text" name="postanskiBroj" value="<?php  echo $rr6; ?>"><br><br>
	Unesi pak kod <input type="text" name="zipKod" value="<?php  echo $rr7; ?>"><br><br>
	Unesi broj mobilnog telefona <input type="text" name="telefonMobilni" value="<?php  echo $rr8; ?>"><br><br>
	Napomena <br>
	<textarea name="napomena" style="width: 400px; height: 100px"></textarea><br><br>

	<input type="hidden" name="istibrojracuna" value="<?php  echo $rbrojracuna; ?>" size="9">
	<input type="hidden" name="idpartnera" value="<?php  echo $ridpartnera; ?>" size="9">	
	<input type="hidden" name="potvrdi" value="<?php  echo $potvrdi=1; ?>" size="9">

	<input type="submit" name="submit" value="Potvrdi">
	</form>
	<?php } else {
	?>

<form method="get" action="zavrsetakkupovine.php">
	Unesi ime i prezime <input type="text" name="imeprezime" value="<?php  echo $rr1; ?>"><br><br>
	Unesi drzavu <input type="text" name="drzava" value="<?php  echo $rr3; ?>"><br><br>
	Unesi mesto <input type="text" name="mesto" value="<?php  echo $rr4; ?>"><br><br>
	Unesi adresu <input type="text" name="adresa" value="<?php  echo $rr5; ?>"><br><br>
	Unesi postanski broj <input type="text" name="postanskiBroj" value="<?php  echo $rr6; ?>"><br><br>
	Unesi pak kod <input type="text" name="zipKod" value="<?php  echo $rr7; ?>"><br><br>
	Unesi broj mobilnog telefona <input type="text" name="telefonMobilni" value="<?php  echo $rr8; ?>"><br><br>
	Napomena <br>
	<textarea name="napomena" style="width: 400px; height: 100px"></textarea><br><br>

	<input type="hidden" name="istibrojracuna" value="<?php  echo $rbrojracuna; ?>" size="9">
	<input type="hidden" name="idpartnera" value="<?php  echo $ridpartnera; ?>" size="9">	
	<input type="hidden" name="potvrdi" value="<?php  echo $potvrdi=1; ?>" size="9">

	<input type="submit" name="submit" value="Potvrdi">
</form>

<?php } } 





