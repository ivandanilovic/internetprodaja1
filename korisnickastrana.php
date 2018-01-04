<style>
	th {border: 1px solid black;}
	
	/*table#prudzbine th, td {
    border: 1px solid black;
}*/
</style>

<?php
include "OtvaranjeBaze.php";
include "funkcije.php";
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
//======================================uradi update kad smo kliknuli na scuvaj izmene podataka o partneru==============================
if ($rizmenipodatkepkupca==1) {
	$resultupdatekupci==mysql_query("UPDATE partneri set ImePrezime='$rimeprezime', Username='$rusername', Password='$rpassword',EmailPartnera='$remail', Drzava='$rdrzava', Mesto='$rmesto', Adresa='$radresa', PostanskiBroj='$rpostanskibroj', ZipKod='$rzipkod', TelefonMob='$rmobilnitelefon' WHERE IdPartnera='$ridpartnera' ",$db);
}
//=======================================================update kraj====================================================================
if ($rprolaz==1) { // ako smo uneli username i password prolaz je 1
//====================================proveravamo username i password=================================================================
$resultpartneri=mysql_query("SELECT IdPartnera, ImePrezime, EmailPartnera, Username, Password, Drzava, Mesto, Adresa, PostanskiBroj, ZipKod, TelefonMob, PIB, MB FROM `partneri`",$db);
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
			</td>
			<td>
			    <?php
				$podaci=2;
				tasterfizickapravna($podaci, $prolaz, $username, $password);
			    ?>
			</td>
		</table>
 
		
 		<?php 


 		// =================================================================
if ($rpodaci==2) { ?> <!-- ako trazimo podatke o porudzbinama -->
	
		<table style="border: 2px solid black;">						
				<tr>
	        		<td style="width: 250px; border: 1px solid black">Broj racuna</td>
	        		<td style="width: 100px; border: 1px solid black">Naziv proizvoda</td>
	        		<td style="width: 50px; border: 1px solid black">Kol.</td>
	        		<td style="width: 100px; border: 1px solid black">Datum porudzbine</td>
	        		<td style="width: 670px; border: 1px solid black">Podaci o isporuci</td>
	        		<td style="width: 110px; border: 1px solid black">Broj za pracenje posiljke</td>
	        		<td style="width: 100px; border: 1px solid black">Stanje isporuke</td>
	        	</tr>
	    </table>
<?php
//============================izvlacimo porudzbine za ulogovanog partnera=========================================================
$resultporudzbine=mysql_query("SELECT IdProizvoda, IdPartnera, TrenutnaCena, PorucenaKolicina, BrojRacuna, DatumPorudzbine, DatumPlacanja, DeliveryTime, SredstvoPlacanja, NacinPlacanja, DatumIsporuke, Napomena, BrojPaketa, Status FROM `porudzbine` WHERE IdPartnera='$rr0'",$db);
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
	        ?> 
	        <table id="prudzbine">
	        	<tr>
	        		<?php if ($istiracun==$rpordzbine4) { ?> <!-- ne ispisuj racuna ako se radi o istoj kupovini -->
	        			<td style="width: 250px; border: 1px solid black; text-align: center;">	<?php echo "-||-"; ?>  </td> <?php
	        		}else { ?>
	        			<td style="width: 250px; border: 1px solid black">	<?php echo $rpordzbine4 ?>  </td>
	        		<?php } ?>
	        		<td style="width: 100px; border: 1px solid black">	<?php echo $rproizvodi0 ?>  </td>
	        		<td style="width: 50px; border: 1px solid black">	<?php echo $rpordzbine3 ?>  </td>
	        		<td style="width: 100px; border: 1px solid black">	<?php echo $rpordzbine5 ?>  </td>
	        		<td style="width: 100px; border: 1px solid black">	<?php echo $rpordzbine10 ?>  </td>
	        		<?php if ($istiracun==$rpordzbine4) { ?> <!-- ne ispisuj adresu ako se radi o istoj kupovini -->
	        		<td style="width: 150px; border: 1px solid black">	<?php echo "-||-" ?>  </td>
	        		<td style="width: 100px; border: 1px solid black">	<?php echo "-||-" ?>  </td>
	        		<td style="width: 100px; border: 1px solid black">	<?php echo "-||-" ?>  </td>
	        		<td style="width: 200px; border: 1px solid black">	<?php echo "-||-" ?>  </td> <?php
	        		}else { ?>
	        		<td style="width: 150px; border: 1px solid black">	<?php echo $risporuke1 ?>  </td>
	        		<td style="width: 100px; border: 1px solid black">	<?php echo $risporuke2 ?>  </td>
	        		<td style="width: 100px; border: 1px solid black">	<?php echo $risporuke3 ?>  </td>
	        		<td style="width: 200px; border: 1px solid black">	<?php echo $risporuke4 ?>  </td>
	        		<?php } ?>
	        		
	        		<td style="width: 110px; border: 1px solid black">	<?php echo $rpordzbine12 ?>  </td>
	        		<td style="width: 100px; border: 1px solid black">	<?php echo $rpordzbine13 ?>  </td>
	        	</tr>
	        </table>

	        <?php 
	        		$istiracun=$rpordzbine4; 
			}
		}
	}
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
 		
 		<form action="korisnickastrana.php">
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
	login ($username, $password, $prolaz, $izbor);
	?>
	<!-- <form method="get" action="korisnickastrana.php">
	Unesi username: <input type="text" name="username"><br><br>
	Unesi password: <input type="password" name="password"><br><br>

	<input type="hidden" name="prolaz" value="1"  size="9">
	<input type="submit" name="login" value="login">
	</form> -->
<?php } ?>