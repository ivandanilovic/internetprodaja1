
<!-- korisnickastranaadministrator.php -->

<style>
	th {border: 1px solid black;}
	
	/*table#prudzbine th, td {
    border: 1px solid black;
}*/
</style>

<?php
include "OtvaranjeBaze.php";
include "funkcije.php";
$link=$_GET["link"];
// $rlink=htmlspecialchars($link5);
$rizmenipodatkepkupca=$_GET["izmenipodatkepkupca"];
?> ovo je izmeni podatke kupca <?php echo $rizmenipodatkepkupca ?> <br> <?php;
$ridpartnera=$_GET["idpartnera"];
?> ovo je id partnera <?php echo $ridpartnera ?> <br> <?php;
$rusername=$_GET["username"];
?> ovo je username <?php echo $rusername ?> <br> <?php;
$rpassword=$_GET["password"];
?> ovo je password <?php echo $rpassword ?> <br> <?php;
$rprolaz=$_GET["prolaz"];
?> ovo je prolaz <?php echo $rprolaz ?> <br> <?php;

$rpodaci=$_GET["podaci"];
?> ovo je podaci <?php echo $rpodaci ?> <br><br><br> <?php;
$rimeprezime=$_GET["imeprezime"];
$remail=$_GET["email"];
$rdrzava=$_GET["drzava"];
$rmesto=$_GET["mesto"];
$radresa=$_GET["adresa"];
$rpostanskibroj=$_GET["postanskibroj"];
$rzipkod=$_GET["zipkod"];
$rmobilnitelefon=$_GET["mobilnitelefon"];
$flag=$_GET["flag"];
$prolaz=$_GET["prolaz"];
$rstatus=$_GET["rstatus"];
$rstatus1=$_GET["rstatus1"];
$rstatus2=$_GET["rstatus2"];




$brojac=0;

//======================================uradi update kad smo kliknuli na scuvaj izmene podataka o partneru==============================
if ($rizmenipodatkepkupca==1) {
	$resultupdatekupci==mysql_query("UPDATE partneri set ImePrezime='$rimeprezime', Username='$rusername', Password='$rpassword',EmailPartnera='$remail', Drzava='$rdrzava', Mesto='$rmesto', Adresa='$radresa', PostanskiBroj='$rpostanskibroj', ZipKod='$rzipkod', TelefonMob='$rmobilnitelefon' WHERE IdPartnera='$ridpartnera' ",$db);
}
//=======================================================update kraj====================================================================
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
//==============================================kraj provere username i passworda=================================================

 	if ( $flag==1) { // ako je ulogovan
 		echo "Dobrodosao korisnice" 
 		 ?> <br><br> 

 		<table id="prudzbine">
			<td>

				<?php

				$podaci=1;
				tasterfizickapravna($podaci, $prolaz, $username, $password);

			    ?>
			    <!-- ovo je zamenila funkcija -->
				<!-- <form method="get" action="korisnickastranaadministrator.php">
				<input type="hidden" name="podaci" value="<?  echo $podaci=1; ?>">
				<input type="hidden" name="prolaz" value="1"  size="9">
				<input type="hidden" name="username" value="<?  echo $rusername; ?>" size="9">
				<input type="hidden" name="password" value="<?  echo $rpassword; ?>" size="9">	
				<input type="submit" name="licnipodaci" value="Licni podaci" style="width: 150px; height: 40px">
				</form> -->
			</td>
			<td>

				<?php

				$podaci=2;
				tasterfizickapravna($podaci, $prolaz, $username, $password);

			    ?>
			    <!-- ovo je zamenila funkcija -->
				<!-- <form method="get" action="korisnickastranaadministrator.php">
				<input type="hidden" name="prolaz" value="1"  size="9">
				<input type="hidden" name="podaci" value="<?  echo $podaci=2; ?>">
				<input type="hidden" name="username" value="<?  echo $rusername; ?>" size="9">
				<input type="hidden" name="password" value="<?  echo $rpassword; ?>" size="9">
				<input type="submit" name="kupovine" value="Kupovine" style="width: 150px; height: 40px">
				</form> -->
			</td>
		</table>
 
		
 		<?php 


 		// =================================================================
if ($rpodaci==2) { ?> <!-- ako trazimo podatke o porudzbinama -->

<?php 	
$status1=1;
$status2=2;
$status3=3;
// $rlink=$link1;
	$link1="korisnickastranaadministrator.php?username=".$rusername."&password=".$rpassword."&brojracuna=".$rpordzbine4."&idproizvoda=".$rpordzbine0."&kolicina=".$rpordzbine3."&nazivpartnera=".$risporuke1."&drzava=".$risporuke2."&mesto=".$risporuke3."&adresa=".$risporuke4."&postanskibroj=".$risporuke5."&nazivproizvoda=".$rproizvodi0."&datumporudzbine=".$rpordzbine5."&datumisporuke=".$rpordzbine10."&brojzapracenjeposilke=".$rpordzbine12."&idporudzbine=".$rpordzbine13."&statusisporuke=".$rpordzbine14."&podaci=".$rpodaci."&flag=".$flag."&prolaz=".$prolaz."&rstatus=".$status2."&rstatus1=".$status3."&rstatus2=".$status1;
	$link2="korisnickastranaadministrator.php?username=".$rusername."&password=".$rpassword."&brojracuna=".$rpordzbine4."&idproizvoda=".$rpordzbine0."&kolicina=".$rpordzbine3."&nazivpartnera=".$risporuke1."&drzava=".$risporuke2."&mesto=".$risporuke3."&adresa=".$risporuke4."&postanskibroj=".$risporuke5."&nazivproizvoda=".$rproizvodi0."&datumporudzbine=".$rpordzbine5."&datumisporuke=".$rpordzbine10."&brojzapracenjeposilke=".$rpordzbine12."&idporudzbine=".$rpordzbine13."&statusisporuke=".$rpordzbine14."&podaci=".$rpodaci."&flag=".$flag."&prolaz=".$prolaz."&rstatus=".$status2;
	$link3="korisnickastranaadministrator.php?username=".$rusername."&password=".$rpassword."&brojracuna=".$rpordzbine4."&idproizvoda=".$rpordzbine0."&kolicina=".$rpordzbine3."&nazivpartnera=".$risporuke1."&drzava=".$risporuke2."&mesto=".$risporuke3."&adresa=".$risporuke4."&postanskibroj=".$risporuke5."&nazivproizvoda=".$rproizvodi0."&datumporudzbine=".$rpordzbine5."&datumisporuke=".$rpordzbine10."&brojzapracenjeposilke=".$rpordzbine12."&idporudzbine=".$rpordzbine13."&statusisporuke=".$rpordzbine14."&podaci=".$rpodaci."&flag=".$flag."&prolaz=".$prolaz."&rstatus=".$status3;
?>		

		<select name="forma" onchange="location = this.value;">
			 <option value="korisnickastranaadministrator.php?link=".$link1."">Sve porudzbine</option>
			 <option value="korisnickastranaadministrator.php?link=".$link2."">Porucene</option>
			 <option value="korisnickastranaadministrator.php?link=".$link3."">Isporucene</option>
		</select>
		<br><br>
		
		<a href="<?php echo $link1 ?>" name="Sve porudzbine">Sve porudzbine</a>
		<a href="<?php echo $link2 ?>" name="Sve porudzbine">Porucene</a>
		<a href="<?php echo $link3 ?>" name="Sve porudzbine">Isporucene</a>

		<table style="border: 2px solid black;">						
				<tr>
	        		<td style="width: 250px; border: 1px solid black">Broj racuna</td>
	        		<td style="width: 100px; border: 1px solid black">Iznos</td>
	        		<!-- <td style="width: 100px; border: 1px solid black">Naziv proizvoda</td>
	        		<td style="width: 50px; border: 1px solid black">Kol.</td> -->
	        		<td style="width: 100px; border: 1px solid black">Datum porudzbine</td>
	        		<td style="width: 670px; border: 1px solid black">Podaci o isporuci</td>
	        		<!-- <td style="width: 110px; border: 1px solid black">Broj za pracenje posiljke</td> -->
	        		<!-- <td style="width: 100px; border: 1px solid black">Stanje isporuke</td> -->
	        		<td style="width: 100px; border: 1px solid black">Izmene</td>
	        	</tr>
	    </table>
<?php

//============================izvlacimo porudzbine za ulogovanog partnera=========================================================
// za ukupna iznos po racunu ovo neradi dobro $iznos=0;
$iznos=0;
$resultporudzbine=mysql_query("SELECT IdProizvoda, IdPartnera, TrenutnaCena, PorucenaKolicina, BrojRacuna, DatumPorudzbine, DatumPlacanja, DeliveryTime, SredstvoPlacanja, NacinPlacanja, DatumIsporuke, Napomena, BrojPaketa, IdPorudzbine, Status FROM `porudzbine` WHERE IdPartnera='$rr0' AND Status='$rstatus' OR Status='$rstatus1'OR Status='$rstatus2' ",$db);
while ($myrow=mysql_fetch_row($resultporudzbine)) {
    		$rpordzbine0=$myrow[0];
	        $rpordzbine1=$myrow[1];
	        $rpordzbine2=$myrow[2];
	        $rpordzbine3=$myrow[3];
	        $rpordzbine4=$myrow[4];
	        $rpordzbine5=$myrow[5];
	        $rpordzbine6=$myrow[6];
	        $rpordzbine7=$myrow[7];
	        $rpordzbine8=$myrow[8];
	        $rpordzbine9=$myrow[9];
	        $rpordzbine10=$myrow[10];
	        $rpordzbine11=$myrow[11];
	        $rpordzbine12=$myrow[12];
	        $rpordzbine13=$myrow[13];
	        $rpordzbine14=$myrow[14];
	        
	         // echo $rpordzbine4 
	        ?> 
	         <!-- ovo je iz prve petlje <br>   -->
	        <?php;
	        // ne mogu se izvuci svi sve kupovine iz tabele isporuke jer tabela isporuke nije postojala kada su se kupovine obavljale i brojvi racuna kreirali
//======================================izvlacimo podatke o isporukama ulogovanog partnera=============================================
$resultisporuke=mysql_query("SELECT BrojRacuna, ImePrezime, Drzava, Mesto, Adresa, PostanskiBroj, ZipKod FROM `isporuke` WHERE BrojRacuna='$rpordzbine4'",$db);
while ($myrow=mysql_fetch_row($resultisporuke)) {
    		$risporuke0=$myrow[0];
	        $risporuke1=$myrow[1];
	        $risporuke2=$myrow[2];
	        $risporuke3=$myrow[3];
	        $risporuke4=$myrow[4];
	        $risporuke5=$myrow[5];
	        $risporuke6=$myrow[6];
//============================izvlacimo pdatke o kupljenim proizvodima za ulogovanog partnera===============================================

$resultproizvodi=mysql_query("SELECT Naziv FROM `proizvodi` WHERE IdProizvoda='$rpordzbine0'",$db);
while ($myrow=mysql_fetch_row($resultproizvodi)) {
    		$rproizvodi0=$myrow[0];
    		//tabela kupovine
    		// ispravi iznos
    		$iznos=$iznos+$rpordzbine2;
	        ?> 
	        <table id="prudzbine">
	        	<tr>
	        		<?php if ($istiracun==$rpordzbine4) { ?> <!-- ne ispisuj podatke ako se radi o istoj kupovini -->
	        			<!-- <td style="width: 250px; border: 1px solid white; text-align: center;">	<?php echo ""; ?>  </td> --> <?php
	        		}else { ?>
	        		<td style="width: 250px; border: 1px solid black">	<?php echo $rpordzbine4 ?>  </td>
	        		<td style="width: 100px; border: 1px solid black">	<?php echo $iznos ?>  </td>
	        		<td style="width: 100px; border: 1px solid black">	<?php echo $rpordzbine5 ?>  </td>
	        		<td style="width: 100px; border: 1px solid black">	<?php echo $rpordzbine10 ?>  </td>
	        		<td style="width: 150px; border: 1px solid black">	<?php echo $risporuke1 ?>  </td>
	        		<td style="width: 100px; border: 1px solid black">	<?php echo $risporuke2 ?>  </td>
	        		<td style="width: 100px; border: 1px solid black">	<?php echo $risporuke3 ?>  </td>
	        		<td style="width: 200px; border: 1px solid black">	<?php echo $risporuke4 ?>  </td>
	        		
	        		<?php 	
	        				$link="korisnickastranaizmene.php?brojracuna=".$rpordzbine4;
	        		?>
	        		
	        		<td style="width: 100px; border: 1px solid black">	<a href="<?php echo $link?>" name="izmeni">izmeni</a>  </td>
	        		<?php } ?>
	        		
	        	</tr>
	        		
	        </table>

	        <?php 
	        		$istiracun=$rpordzbine4; 
			}
		}
		// echo $brojac;
		$brojac++; 
	}
	$riznos=$iznos;
	echo $riznos;
?> <!-- <meta http-equiv="refresh" content="0; korisnickastranaadministrator.php?link5=".$rlink."> --> <?php //refres strane

// <script type="text/javascript">
//    parent.window.location.reload(true);
// </script>

	//kraj ako trazimo podatke o porudzbinama
}else { ?>  <!-- ako trazimo licne podatke -->
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
 		<?php }
 		// kraj ako je ulogovan
 	}else {
			 echo "Netacan username ili password" ?> <br><br> <?php; 
			 $rprolaz=0;
			 //header ("location:korisnickastrana.php");
	 	}
}
 
if ($rprolaz==0) { 
	// $izbor=1;
	login ($username, $password, $prolaz, $izbor);
	?>
	<!-- <form method="get" action="korisnickastranaadministrator.php">
	Unesi username: <input type="text" name="username"><br><br>
	Unesi password: <input type="password" name="password"><br><br>

	<input type="hidden" name="prolaz" value="1"  size="9">
	<input type="submit" name="login" value="login">
	</form> -->
<?php } ?>