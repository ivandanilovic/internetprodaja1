<style>
	th {border: 1px solid black;}
	
	/*table#prudzbine th, td {
    border: 1px solid black;
}*/
</style>

<?php
include "OtvaranjeBaze.php";
include "funkcije.php";

$rusername=$_GET["username"]($username);
?> ovo je username <?php echo $rusername ?> <br> <?php;
$rpassword=$_GET["password"]($password);
?> ovo je password <?php echo $rpassword ?> <br> <?php;
$rprolaz=$_GET["prolaz"]($prolaz);
?> ovo je prolaz <?php echo $rprolaz ?> <br> <?php;
$rpodaci=$_GET["podaci"]($podaci);
?> ovo je podaci <?php echo $rpodaci ?> <br><br><br> <?php;
$ridporudzbine=$_GET["idporudzbine"]($idporudzbine);

$rstatus=$_GET["rstatus"]($rstatus);
$rstatus1=$_GET["rstatus1"]($rstatus1);
$rstatus2=$_GET["rstatus2"]($rstatus2);
$rstatus4=$_GET["rstatus4"]($rstatus4);
$rstatus5=$_GET["rstatus5"]($rstatus5);

if ($rprolaz==1) { // ako smo uneli username i password prolaz je 1
//====================================proveravamo username i password=================================================================
$resultpartneri=mysql_query("SELECT IdPartnera, ImePrezime, EmailPartnera, Username, Password, Drzava, Mesto, Adresa, PostanskiBroj, ZipKod, TelefonMob, PIB, MB, Prioritet FROM `partneri`",$db);
while ($myrow=mysql_fetch_row($resultpartneri)) {
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
	        $r13=$myrow[13];
	        
	 	if ($rusername==$r3) {
	 		if ($rpassword==$r4) {

				$flag=1;

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
				$rr13=$r13;
				
			}
 		}		
 	}
}

if ( $flag==1) { // ako je ulogovan
 		echo "Dobrodosao korisnice" 
 		 ?> <br><br> 
 		 <?
 		 $linkchat="chat.php?id=".$rr0
 		 ?>
 		 <a href="<?php echo $linkchat?>" name="chat">chat</a><br><br>

 		<table id="prudzbine">
			<td>
				<?php
				$podaci=1;
				tasterfizickapravna($podaci, $prolaz, $username, $password);
			    ?>  
			</td>
			<td>
				<?php
				$podaci=2;
				tasterfizickapravna($podaci, $prolaz, $username, $password);
			    ?> 
			</td>
			
		</table>
 		
<!-- ========================================================================================== -->
<?php
if ($rpodaci==2) { ?> <!-- ako trazimo podatke o porudzbinama -->

<?php 	
$status1=1;
$status2=2;
$status3=3;
$status4=4;
$status5=5;
	$link1="korisnickastranaadministrator.php?username=".$rusername."&password=".$rpassword."&brojracuna=".$rpordzbineukupno1."&nazivpartnera=".$risporuke1."&drzava=".$risporuke2."&mesto=".$risporuke3."&adresa=".$risporuke4."&postanskibroj=".$risporuke5."&datumporudzbine=".$rpordzbine5."&datumisporuke=".$rpordzbine10."&idporudzbine=".$rpordzbine13."&podaci=".$rpodaci."&flag=".$flag."&prolaz=".$prolaz."&rstatus=".$status2."&rstatus1=".$status3."&rstatus2=".$status1."&rstatus4=".$status4."&rstatus5=".$status5."&prioritetpartnera=".$rr13;
	$link2="korisnickastranaadministrator.php?username=".$rusername."&password=".$rpassword."&brojracuna=".$rpordzbineukupno1."&nazivpartnera=".$risporuke1."&drzava=".$risporuke2."&mesto=".$risporuke3."&adresa=".$risporuke4."&postanskibroj=".$risporuke5."&datumporudzbine=".$rpordzbine5."&datumisporuke=".$rpordzbine10."&idporudzbine=".$rpordzbine13."&statusisporuke=".$rpordzbine14."&podaci=".$rpodaci."&flag=".$flag."&prolaz=".$prolaz."&rstatus=".$status2."&rstatus3=".$status3."&prioritetpartnera=".$rr13;
	$link3="korisnickastranaadministrator.php?username=".$rusername."&password=".$rpassword."&brojracuna=".$rpordzbineukupno1."&nazivpartnera=".$risporuke1."&drzava=".$risporuke2."&mesto=".$risporuke3."&adresa=".$risporuke4."&postanskibroj=".$risporuke5."&datumporudzbine=".$rpordzbine5."&datumisporuke=".$rpordzbine10."&idporudzbine=".$rpordzbine13."&statusisporuke=".$rpordzbine14."&podaci=".$rpodaci."&flag=".$flag."&prolaz=".$prolaz."&rstatus=".$status5."&prioritetpartnera=".$rr13;
	$link4="korisnickastranaadministrator.php?username=".$rusername."&password=".$rpassword."&brojracuna=".$rpordzbineukupno1."&nazivpartnera=".$risporuke1."&drzava=".$risporuke2."&mesto=".$risporuke3."&adresa=".$risporuke4."&postanskibroj=".$risporuke5."&datumporudzbine=".$rpordzbine5."&datumisporuke=".$rpordzbine10."&idporudzbine=".$rpordzbine13."&statusisporuke=".$rpordzbine14."&podaci=".$rpodaci."&flag=".$flag."&prolaz=".$prolaz."&rstatus=".$status4."&prioritetpartnera=".$rr13;
	
?>		

		<select name="forma" onchange="location = this.value;">
			 <option value="korisnickastranaadministrator.php?link=".$link1."">Sve porudzbine</option>
			 <option value="korisnickastranaadministrator.php?link=".$link2."">Porucene</option>
			 <option value="korisnickastranaadministrator.php?link=".$link3."">Isporucene</option>
		</select>
		<br><br>
		
		<a href="<?php echo $link1 ?>" name="Sve porudzbine">Sve porudzbine | </a>
		<a href="<?php echo $link2 ?>" name="Sve porudzbine">Porucene | </a>
		<a href="<?php echo $link4 ?>" name="Sve porudzbine">Poslate | </a>
		<a href="<?php echo $link3 ?>" name="Sve porudzbine">Primljene porudzbine</a>

		<table style="border: 2px solid black;">						
				<tr>
	        		<td style="width: 250px; border: 1px solid black">Broj racuna</td>
	        		<td style="width: 100px; border: 1px solid black">Iznos</td>
	        		<td style="width: 100px; border: 1px solid black">Datum porudzbine</td>
	        		<td style="width: 670px; border: 1px solid black">Podaci o isporuci</td>
	        		<td style="width: 100px; border: 1px solid black">Status porudzbine</td>
	        		<td style="width: 50px; border: 1px solid black">Izmene</td>
	        		<td style="width: 50px; border: 1px solid black">Obrisi</td>
	        	</tr>
	    </table>

	    <?php 
	    if ($rr13==1) {
	    	$resultporudzbineukupno=mysql_query("SELECT IdProdzbine, BrojRacuna, UkupnaCena, DatumPorudzbine, DatumPlacanja, DatumIsporuka, DeliveryTime, Status, SredstvoPlacanja, NacinPlacanja, BrojPaketa, Napomena, IdPartnera FROM `porudzbineukupno` WHERE Status='$rstatus' OR Status='$rstatus1'OR Status='$rstatus2'OR Status='$rstatus4'OR Status='$rstatus5' ",$db);
	    }else{
			$resultporudzbineukupno=mysql_query("SELECT IdProdzbine, BrojRacuna, UkupnaCena, DatumPorudzbine, DatumPlacanja, DatumIsporuka, DeliveryTime, Status, SredstvoPlacanja, NacinPlacanja, BrojPaketa, Napomena, IdPartnera FROM `porudzbineukupno` WHERE IdPartnera='$rr0' AND (Status='$rstatus' OR Status='$rstatus1'OR Status='$rstatus2'OR Status='$rstatus4'OR Status='$rstatus5') ",$db);
		}
			while ($myrow=mysql_fetch_row($resultporudzbineukupno)) {
	    		$rpordzbineukupno0=$myrow[0];
		        $rpordzbineukupno1=$myrow[1];
		        $rpordzbineukupno2=$myrow[2];
		        $rpordzbineukupno3=$myrow[3];
		        $rpordzbineukupno4=$myrow[4];
		        $rpordzbineukupno5=$myrow[5];
		        $rpordzbineukupno6=$myrow[6];
		        $rpordzbineukupno7=$myrow[7];
		        $rpordzbineukupno8=$myrow[8];
		        $rpordzbineukupno9=$myrow[9];
		        $rpordzbineukupno10=$myrow[10];
		        $rpordzbineukupno11=$myrow[11];
		        $rpordzbineukupno12=$myrow[12];

		        $resultisporuke=mysql_query("SELECT BrojRacuna, ImePrezime, Drzava, Mesto, Adresa, PostanskiBroj, ZipKod FROM `isporuke` WHERE BrojRacuna='$rpordzbineukupno1'",$db);
				while ($myrow=mysql_fetch_row($resultisporuke)) {
	    		$risporuke0=$myrow[0];
		        $risporuke1=$myrow[1];
		        $risporuke2=$myrow[2];
		        $risporuke3=$myrow[3];
		        $risporuke4=$myrow[4];
		        $risporuke5=$myrow[5];
		        $risporuke6=$myrow[6];
		        

		        ?>
		        <table id="prudzbine">
	        	<tr>
	        		<td style="width: 250px; border: 1px solid black">	<?php echo $rpordzbineukupno1 ?>  </td>
	        		<td style="width: 100px; border: 1px solid black">	<?php echo $rpordzbineukupno2 ?>  </td>
	        		<td style="width: 100px; border: 1px solid black">	<?php echo $rpordzbineukupno3 ?>  </td>
	        		<td style="width: 100px; border: 1px solid black">	<?php echo $rpordzbineukupno5 ?>  </td>
	        		<td style="width: 150px; border: 1px solid black">	<?php echo $risporuke1 ?>  </td>
	        		<td style="width: 100px; border: 1px solid black">	<?php echo $risporuke2 ?>  </td>
	        		<td style="width: 100px; border: 1px solid black">	<?php echo $risporuke3 ?>  </td>
	        		<td style="width: 200px; border: 1px solid black">	<?php echo $risporuke4 ?>  </td>
	        		<?php 
	        		if ($rpordzbineukupno7==1) {
	        			$statustekst="porudzbina u izradi";
	        		}
	        		if ($rpordzbineukupno7==2 || $rpordzbineukupno7==3) {
	        			$statustekst="dat zahtev za isporuku";
	        		}
	        		if ($rpordzbineukupno7==4 ) {
	        			$statustekst="odobrena isporuka";
	        		}
	        		if ($rpordzbineukupno7==5 ) {
	        			$statustekst="isporuceno";
	        		}
	        		?>
	        		<td style="width: 100px; border: 1px solid black">	<?php echo $statustekst ?>  </td>
	        		
	        		<?php 	
	        			$link="korisnickastranaizmene.php?brojracuna=".$rpordzbineukupno1."&prioritetpartnera=".$rr13;
	        			$linkbrisanjeracuna="brisanjeracuna.php?username=".$rusername."&password=".$rpassword."&podaci=".$rpodaci."&flag=".$flag."&prolaz=".$prolaz."&id=".$r0."&prioritetpartnera=".$rr13."&idporudzbine=".$rpordzbineukupno0;
	        		?>
	        		
	        		<td style="width: 50px; border: 1px solid black">	<a href="<?php echo $link?>" name="izmeni">izmeni</a>  </td>
	        		<td style="width: 50px; border: 1px solid black">	<a href="<?php echo $linkbrisanjeracuna ?>" name="obrisi">Obrisi</a>  </td>
	        		<?php } ?> <!-- kraj resultisporuke -->
	        		
	        	</tr>
	        		
	        </table>
		    <?php } ?> <!-- kraj resultporudzbineukupno -->
		

<?php }else { ?>  <!-- ako trazimo licne podatke -->
<!-- ================================================================= -->
			<!-- tabela licni podaci -->
 			<table style="width: 600px; ">
 			<tr>
 				<td > 	        
						LICNI PODACI
				</td>
 			</tr>
 		</table>
 		
 		<form action="korisnickastranaadministrator.php">
 		<table style="width: 600px">	
			<tr>
				<td style="width: 30%"> 	        
						Ime Prezime
				</td>
				<td style="width: 60%"> 	        
						<input type="text" name="imeprezime" size="52" value="<?  echo $rr1; ?>">
				</td>							
			</tr>
			<tr>
				<td style="width: 30%"> 	        
						Email
				</td>
				<td style="width: 60%"> 	        
						<input type="text" name="email" size="52" value="<?  echo $rr2; ?>">
				</td>							
			</tr>
			<tr>
				<td style="width: 30%"> 	        
						Username
				</td>
				<td style="width: 60%"> 	        
						<input type="text" name="username" size="52" value="<?  echo $rr3; ?>">
				</td>							
			</tr>
			<tr>
				<td style="width: 30%"> 	        
						Password
				</td>
				<td style="width: 60%"> 	        
						<input type="text" name="password" size="52" value="<?  echo $rr4; ?>">
				</td>							
			</tr>
			<tr>
				<td style="width: 30%"> 	        
						Drzava
				</td>
				<td style="width: 60%"> 	        
						<input type="text" name="drzava" size="52" value="<?  echo $rr5; ?>">
				</td>							
			</tr>
			<tr>
				<td style="width: 30%"> 	        
						Mesto
				</td>
				<td style="width: 60%"> 	        
						<input type="text" name="mesto" size="52" value="<?  echo $rr6; ?>">
				</td>							
			</tr>
			<tr>
				<td style="width: 30%"> 	        
						Adresa
				</td>
				<td style="width: 60%"> 	        
						<input type="text" name="adresa" size="52" value="<?  echo $rr7; ?>">
				</td>							
			</tr>
			<tr>
				<td style="width: 30%"> 	        
						Postanski broj
				</td>
				<td style="width: 60%"> 	        
						<input type="text" name="postanskibroj" size="52" value="<?  echo $rr8; ?>">
				</td>							
			</tr>
			<tr>
				<td style="width: 30%"> 	        
						Zip kod
				</td>
				<td style="width: 60%"> 	        
						<input type="text" name="zipkod" size="52" value="<?  echo $rr9; ?>">
				</td>							
			</tr>
			<tr>
				<td style="width: 30%"> 	        
						Mobilni telefon
				</td>
				<td style="width: 60%"> 	        
						<input type="text" name="mobilnitelefon" size="52" value="<?  echo $rr10; ?>">
				</td>							
			</tr>
			
		</table>
		<br>

		<input type="hidden" name="prolaz" value="1"  size="9">
		<input type="hidden" name="izmenipodatkepkupca" value="1"  size="9">
		<input type="hidden" name="idpartnera" value="<?  echo $rr0; ?>"  size="9">

		<input type="submit" name="submit" value="Sacuvaj izmene" style="width: 150px; height: 40px">
		</form>
		<!-- kraj ako trazimo licne podatke -->

		<!-- tabela partnera bez administratora -->
			<?php
			$link5="korisnickastranaadministrator.php?username=".$rusername."&password=".$rpassword."&podaci=".$rpodaci."&flag=".$flag."&prolaz=".$prolaz."&id=".$r0."&prioritetpartnera=".$rr13;

			$resultpartneri1=mysql_query("SELECT IdPartnera, ImePrezime, EmailPartnera, Username, Password, Drzava, Mesto, Adresa, PostanskiBroj, ZipKod, TelefonMob, PIB, MB, Prioritet FROM `partneri` WHERE Prioritet=2 AND Status=1 ",$db);
			while ($myrow=mysql_fetch_row($resultpartneri1)) {
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
		        $r13=$myrow[13];

		        // samo administrator moze da vidi ostale partnere i da ih brise
		        if ($rr13==1) { ?>

		        <? $link5="brisanjepartnera.php?username=".$rusername."&password=".$rpassword."&podaci=".$rpodaci."&flag=".$flag."&prolaz=".$prolaz."&id=".$r0."&prioritetpartnera=".$rr13; ?>

		        	<table>
			        	<tr>
			        		<td style="width: 150px; border: 1px solid black">	<?php echo $r1 ?>  </td>
			        		<td style="width: 150px; border: 1px solid black">	<?php echo $r2 ?>  </td>
			        		<td style="width: 100px; border: 1px solid black">	<?php echo $r3 ?>  </td>
			        		<td style="width: 100px; border: 1px solid black">	<?php echo $r5 ?>  </td>
			        		<td style="width: 100px; border: 1px solid black">	<?php echo $r6 ?>  </td>
			        		<td style="width: 200px; border: 1px solid black">	<?php echo $r7 ?>  </td>
			        		<td style="width: 50px; border: 1px solid black">	<?php echo $r8 ?>  </td>
			        		<td style="width: 100px; border: 1px solid black">	<?php echo $r10 ?>  </td>
			        		<td style="width: 50px; border: 1px solid black">	<a href="<?php echo $link5 ?>" name="obrisi">Obrisi</a>  </td>
			        	</tr>
			    	</table>
		        <?php }else{} ?>
				<!-- kraj provere da li je partner administrator ili kupac -->

		    <?php } ?>
		    <!-- kraj while petlje select partnera -->
		    
 		<?php }
 		// kraj ako je ulogovan
 	} 
        else {
			 echo "Netacan username ili password" ?> <br><br> <?php; 
			 $rprolaz=0;
			 //header ("location:korisnickastrana.php");
	 	} ?>

<?php
if ($rprolaz==0) { 
	login ($username, $password, $prolaz, $izbor);
	} 
?>

<?php 
echo $rr1;
?>