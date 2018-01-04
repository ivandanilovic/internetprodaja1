<?php
include "OtvaranjeBaze.php";
$rbrojracuna=$_GET["brojracuna"];
$rusername=$_GET["username"];
$rpassword=$_GET["password"];
$rnacinplacanja=$_GET["Meni"];

?> broj racuna: <?php echo $rbrojracuna; ?> <br> <?php 
?> username: <?php echo $rusername; ?> <br> <?php
?> password: <?php echo $rpassword; ?> <br> <?php
/*?> idporudzbine: <?php echo $ridporudzbine; ?> <br> <?php*/ //ovo nije potrebno 

$rflag1=$_GET["vrednostflaga"];
?> ovo je vrednost flaga <?php echo $rflag1; ?> <br> <?php

$ridpartnera=$_GET["idpartnera"];
?> ovo je idpartnera <?php echo $ridpartnera; ?> <br> <?php 

$rnasaokorisnika=$_GET["nasaokorisnika"];
?> ovo je nasaokorisnika <?php echo $rnasaokorisnika; ?> <br> <?php 

$result3=mysql_query("SELECT IdNacinplacanja, NacinPlacanja  FROM `nacinplacanja` WHERE NacinPlacanja='$rnacinplacanja' ",$db);
while ($myrow1=mysql_fetch_row($result3)) {
	   $er0=$myrow1[0];
	   $er1=$myrow1[1];					            
};

// proveri da li treba update jer na izaberi placanje ima update
if ($rnasaokorisnika==1) {
	$resultupdate==mysql_query("UPDATE porudzbine set IdPartnera='$ridpartnera', NacinPlacanja='$er0' WHERE BrojRacuna='$rbrojracuna' ",$db);
}else{
	// proveravaju se username i password korisnika sa stranice izaberi placanje ako su tacni njegov id se upisuje na njegovu porudzbinu
	$result=mysql_query("SELECT IdPartnera, Username, Password FROM `partneri`",$db);
	$nasao=0;
	$idParRez=0;
    while ($myrow=mysql_fetch_row($result)) {
    		$r0=$myrow[0];
	        $r1=$myrow[1];
	        $r2=$myrow[2];

	        if($r1==$rusername){
	        	if ($r2==$rpassword) {
	        			$nasao=1;
	        			$idParRez=$r0;
	        			 $resultupdate==mysql_query("UPDATE porudzbine set IdPartnera='$idParRez', NacinPlacanja='$er0' WHERE BrojRacuna='$rbrojracuna' ",$db);
	        		
	        	}
	        }
	    }
	    // ne moze upit u upitu mora van while petlje kao dole
	    // if ($nasao==1) {
	    // 	$resultupdate==mysql_query("UPDATE porudzbine set IdPartnera='$idParRez' WHERE BrojRacuna='$rbrojracuna' ",$db);

	    // }
	    // ne moze bez znaka navoda
	    //WHERE BrojRacuna=$rbrojracuna
	
}



?>


<br><br>
		<form method="get" action="kupovina.php">
			<input type="hidden" name="idpartnera" value="<?  echo $idParRez; ?>" size="9">
			<input type="hidden" name="vrednostflaga" value="<?  echo $rflag1; ?>" size="9">
			<input type="hidden" name="istibrojracuna" value="<?  echo $rbrojracuna; ?>" size="9"> 				       
			<input type="submit" name="kupi" value="nastavi dalje kupovinu">
										
		</form>

		<form method="get" action="zavrsetakkupovine.php">
		<input type="hidden" name="istibrojracuna" value="<?  echo $rbrojracuna; ?>" size="9"> 
		<input type="hidden" name="idpartnera" value="<?  echo $idParRez; ?>" size="9">
							       
			<input type="submit" name="zavrsi kupovinu" value="zavrsi kupovini">
										
		</form>