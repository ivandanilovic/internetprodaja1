<style>
	table, th, td {border: 1px solid black;}
</style>

<?php
include "OtvaranjeBaze.php";

$rbrojracuna=$_GET["brojracuna"];
echo $rbrojracuna; ?> <br> <?php

$rflag1=$_GET["vrednostflaga"];
 ?> ovo je vrednost flaga <?php echo $rflag1; ?> <br> <?php

$ridpartnera=$_GET["idpartnera"];
?> ovo je idpartnera <?php echo $ridpartnera; ?> <br> <?php

$ristibrojracuna=$_GET["istibrojracuna"];
?> ovo je isti br racuna <?php echo $ristibrojracuna; ?> <br> <?php

$rusername=$_GET["username"];
?> ovo je username <?php echo $rusername; ?> <br> <?php

$rpassword=$_GET["password"];
?> ovo je password <?php echo $rpassword; ?> <br> <?php

$iznos=0;
echo $rbrojracuna; ?> <br> <?php
?><br><br>

<table style="width: 1300px">
	<tr>
								<!-- <td style="width: 20%;"> 
							        
							        broj racuna :
								</td> -->
								<td style="width: 20%"> 
							        
							        id proizvoda :
								</td>
								<td style="width: 20%"> 
							        
							        Cena :
								</td>
								<td style="width: 20%"> 
							        
							        kolicina :
								</td>
								<td style="width: 20%"> 
							        
							        Iznos (kolicina x cena):
								</td>
							
	</tr>
</table>

<?php

$result=mysql_query("SELECT BrojRacuna, IdProizvoda, TrenutnaCena, PorucenaKolicina, IdPorudzbine FROM `porudzbine`",$db);

    while ($myrow=mysql_fetch_row($result)) {
    		$r0=$myrow[0];
	        $r1=$myrow[1];
	        $r2=$myrow[2];
	        $r3=$myrow[3];
	        $r4=$myrow[4];
	        if ($rbrojracuna==$r0) {
	        	$iznos=$r2 * $r3;
?>

<table style="width: 1300px">
	<tr>
								<!-- <td style="width: 20%;">  -->
							        
							        <!-- <?php echo $r0; ?> -->
								<!-- </td> -->
								<td style="width: 20%"> 
							        
							        <?php echo $r1;?>
								</td>
								<td style="width: 20%"> 
							        
							        <?php echo $r2; ?>
								</td>
								<td style="width: 20%"> 
							        
							        <?php echo $r3; ?>
								</td>
								<td style="width: 20%"> 
							        
							      <?php echo $iznos; ?>
								</td>					
	</tr>
</table>

<?php  
}
}
?>
<br><br><br>

<?php 
$result=mysql_query("SELECT IdPartnera FROM `partneri`",$db);
$nasaokorisnika=0;
   
    while ($myrow=mysql_fetch_row($result)) {
    		$r0=$myrow[0];
    		if ($ridpartnera==$r0) {
    			$nasaokorisnika=1;
    		}
    		
	    }
	    // ako je korisnik ulogovan na predhodnoj kupovini samo nastavlja kupovinu else loguje se ili ostavlja podatke
	    if($nasaokorisnika==1){
	        	
	 			echo "Vi ste Ulogovani " ?> <br><br>  <?php;
	 			?>
	 			<form method="get" action="kupovina.php">					
					<input type="hidden" name="idpartnera" value="<?php  echo $ridpartnera; ?>" size="9">
					<input type="hidden" name="nasaokorisnika" value="<?php  echo $nasaokorisnika; ?>" size="9">
					<input type="hidden" name="vrednostflaga" value="<?php  echo $rflag1; ?>" size="9">
					<input type="hidden" name="istibrojracuna" value="<?php  echo $ristibrojracuna; ?>" size="9">
					<input type="submit" name="kupi" value="nastavi dalje kupovinu">					
				</form>
				

				<form method="get" action="zavrsetakkupovine.php">					
					<input type="hidden" name="idpartnera" value="<?php  echo $ridpartnera; ?>" size="9">
					<input type="hidden" name="nasaokorisnika" value="<?php  echo $nasaokorisnika; ?>" size="9">
					<input type="hidden" name="istibrojracuna" value="<?php  echo $ristibrojracuna; ?>" size="9">
					<input type="submit" name="zavrsi kupovinu" value="zavrsi kupovini">					
				</form>
				<!-- unosi se id partnera na porudzbinu prema broju racuna kada je korisnik logovan -->
				<?php $resultupdate==mysql_query("UPDATE porudzbine set IdPartnera='$ridpartnera' WHERE BrojRacuna='$ristibrojracuna' ",$db); ?>


				<?php
	        }else {
	   //      	$uspesnologovanje=0;
	   //      	$result=mysql_query("SELECT IdPartnera, Username, Password FROM `partneri`",$db);
			 //    while ($myrow=mysql_fetch_row($result)) {
			 //    		$r0=$myrow[0];
				//         $r1=$myrow[1];
				//         $r2=$myrow[2];

				//         if($r1==$rusername){
				//         	if ($r2==$rpassword) {
				//         		$uspesnologovanje=1;
				//         		// header('Location: kupovinapartnera.php');
				//         	}
				//         }
				//     }    
				// if ($uspesnologovanje==1) {
				//     	header('Location: kupovinapartnera.php');
				// }else{
				// 	echo "netacan username ili password";
				// }
	        	?>
	        	<table style="width: 40px;">
						<tr>
							<td>

								<form method="get" action="kupovinapartnera.php" >
								<select size="1" name="Meni">
					            <?
								$result1=mysql_query("SELECT IdNacinplacanja, NacinPlacanja, Opis  FROM `nacinplacanja`",$db);
					    		while ($myrow1=mysql_fetch_row($result1)) {
						            $er0=$myrow1[0];
						            $er1=$myrow1[1];
						            $er2=$myrow1[2];
					            ?>
					            <option ><? echo $er1; ?></option>
					            <?
					        	}
					            ?>
					            </select><br><br><br>
									Unesi username: <input type="text" name="username"><br><br>
									Unesi password: <input type="password" name="password"><br><br>
									
									<input type="hidden" name="vrednostflaga" value="<?php  echo $rflag1; ?>" size="9">
									<input type="hidden" name="brojracuna" value="<?php  echo $rbrojracuna; ?>" size="9">
									<input type="hidden" name="idporudzbine" value="<?php  echo $rr4;  ?>" size="9"> <!-- idporudzbine koji se prenosi -->

									<input type="submit" name="submit">
								</form>
							</td>

							<td>
								<form method="get" action="kupvinabezregistracije.php">
								<select size="1" name="Meni">
					            <?
								$result2=mysql_query("SELECT IdNacinplacanja, NacinPlacanja, Opis  FROM `nacinplacanja`",$db);
					    		
					    		while ($myrow1=mysql_fetch_row($result2)) {
						            $er0=$myrow1[0];
						            $er1=$myrow1[1];
						            $er2=$myrow1[2];
					            ?>
					            <option><? echo $er1; ?></option>
					            <?
					        	}

					            ?>
					            </select><br><br><br>
									Unesi ime i prezime <input type="text" name="imeprezime"><br><br>
									Unesi username  <input type="text" name="username"><br><br>
									Unesi password <input type="password" name="password"><br><br>
									Unesi email <input type="email" name="email"><br><br>
									Unesi drzavu <input type="text" name="drzava"><br><br>
									Unesi mesto <input type="text" name="mesto"><br><br>
									Unesi adresu <input type="text" name="adresa"><br><br>
									Unesi postanski broj <input type="text" name="postanskiBroj"><br><br>
									Unesi pak kod <input type="text" name="zipKod"><br><br>
									Unesi broj mobilnog telefona <input type="text" name="telefonMobilni"><br><br>

									<input type="hidden" name="vrednostflaga" value="<?php  echo $rflag1; ?>" size="9">
									<input type="hidden" name="brojracuna" value="<?php  echo $rbrojracuna; ?>" size="9">

									<input type="submit" name="submit">
								</form>
							</td>
						</tr>
					</table>
					<?php

	        }

?>