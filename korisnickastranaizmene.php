<?php
include "OtvaranjeBaze.php";

$rbrojracuna=$_GET["brojracuna"];

$rproizvodi0=$_GET["nazivproizvoda"];
$rpordzbine2=$_GET["trenutnacena"];
$rpordzbine3=$_GET["kolicina"];
$rpordzbine5=$_GET["datumporudzbine"];
$rpordzbine10=$_GET["datumisporuke"];
$risporuke1=$_GET["nazivpartnera"];
$risporuke2=$_GET["drzava"];
$risporuke3=$_GET["mesto"];
$risporuke4=$_GET["adresa"];
$risporuke5=$_GET["postanskibroj"];
$rpordzbine12=$_GET["brojzapracenjeposilke"];
$rpordzbine14=$_GET["statusisporuke"];
$rprioritetpartnera=$_GET["prioritetpartnera"];

$rsacuvaj=$_GET["sacuvaj"];



echo "Izmene po racunu    -   ".$rbrojracuna."<br><br>";

if ($rsacuvaj==1) {
	$resultupdate1==mysql_query("UPDATE porudzbine set PorucenaKolicina='$rpordzbine3' WHERE IdPorudzbine='$idporudzbine' ",$db); 

	$resultupdate1istibrracuna==mysql_query("UPDATE porudzbine set DatumIsporuke='$rpordzbine10', BrojPaketa='$rpordzbine12', Status='$rpordzbine14' WHERE BrojRacuna='$rbrojracuna' ",$db);

	$resultupdate2==mysql_query("UPDATE isporuke set ImePrezime='$risporuke1', Drzava='$risporuke2', Adresa='$risporuke4' WHERE BrojRacuna='$rbrojracuna' ",$db); 
	
	echo "uspesano ste izvrsili izmenu podataka <br><br>";

	// ovde stavi redirekciju na izmene
}
?>
<table style="border: 2px solid black;">						
	<tr>
	    <td style="width: 100px; border: 1px solid black">Naziv proizvoda</td>
	    <td style="width: 100px; border: 1px solid black">Cena</td>
	    <td style="width: 50px; border: 1px solid black">Kol.</td>
	    <td style="width: 100px; border: 1px solid black">Datum porudzbine</td>
	    <td style="width: 740px; border: 1px solid black">Podaci o isporuci</td>
	    <td style="width: 70px; border: 1px solid black">Broj za pracenje posiljke</td>
	    <td style="width: 50px; border: 1px solid black">Stanje isporuke</td>
	    <td style="width: 50px; border: 1px solid black">Sacuvaj</td>
	</tr>
</table>



<?php
$resultporudzbine=mysql_query("SELECT IdProizvoda, IdPartnera, TrenutnaCena, PorucenaKolicina, BrojRacuna, DatumPorudzbine, DatumPlacanja, DeliveryTime, SredstvoPlacanja, NacinPlacanja, DatumIsporuke, Napomena, BrojPaketa, IdPorudzbine, Status FROM `porudzbine` WHERE BrojRacuna='$rbrojracuna'",$db);
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

	        ?>
	        <form method="get" action="korisnickastranaizmene.php">
		        <table style="border: 2px solid white;">						
					<tr>
				        <td style="width: 100px; border: 1px solid black"> <?php echo $rproizvodi0 ?> </td>
					    <td style="width: 100px; border: 1px solid black"> <?php echo $rpordzbine2 ?> </td>
					    <td style="width: 50px; border: 1px solid black"> <input type="text" name="kolicina" size="2" value="<?php echo $rpordzbine3 ?>"> </td>
					    <td style="width: 100px; border: 1px solid black"> <input type="text" name="datumporudzbine" size="9" value="<?php echo $rpordzbine5 ?>">  </td>
					    
					    <td style="width: 100px; border: 1px solid black"> <input type="date" name="datumisporuke" size="3" value="<?php echo $rpordzbine10 ?>"> </td>
					    <td style="width: 100px; border: 1px solid black"> <input type="text" name="nazivpartnera" size="10" value="<?php echo $risporuke1 ?>"> </td>
					    <td style="width: 100px; border: 1px solid black"> <input type="text" name="drzava" size="10" value="<?php echo $risporuke2 ?>">	</td>
					    <td style="width: 100px; border: 1px solid black"> <input type="text" name="mesto" size="10" value="<?php echo $risporuke3 ?>"> </td>
					    <td style="width: 200px; border: 1px solid black"> <input type="text" name="adresa" size="23" value="<?php echo $risporuke4 ?>">	 </td>
					    <td style="width: 50px; border: 1px solid black"> <input type="text" name="postanskibroj" size="3" value="<?php echo $risporuke5 ?>">	 </td>

					    <!-- samo administrator moze da unosi i menja broj posilje, kupci mogu samo da vide ovo polje ne da i menjaju -->
					    <?php 
					    if ($rprioritetpartnera==1) { ?>
					    	<td style="width: 70px; border: 1px solid black"> <input type="text" name="brojzapracenjeposilke" size="5" value="<?php echo $rpordzbine12 ?>">   </td>
					    <?php }else{ ?>
					    	<td style="width: 70px; border: 1px solid black"> <?php echo $rpordzbine12 ?>   </td>
					    <?php } ?>

					    <td style="width: 50px; border: 1px solid black"> <input type="text" name="statusisporuke" size="3" value="<?php echo $rpordzbine14 ?>">  </td>
					    <td style="width: 50px; border: 1px solid black"> <input type="submit" name="izmeni" value="Sacuvaj">  </td>
					    <input type="hidden" name="idporudzbine" value="<?php echo $rpordzbine13 ?>" >
					    <input type="hidden" name="tenutnacena" value="<?php echo $rpordzbine2 ?>" >
						<input type="hidden" name="brojracuna" value="<?php echo $rbrojracuna ?>" >
						<input type="hidden" name="sacuvaj" value="1" >
				    </tr>
			    </table>
				    
					
			</form>		

		    <?php
		}
	}
} 
if ($rpordzbine14==1) {
	$tekst="Poruci";
	$tekst1="vasa porudbina je kreirana klikom na poruci izvrsicete porudbinu";
}
if ($rpordzbine14==4) {
	$tekst="Potvrdi prijem";
	$tekst1="vasa porudbina je poslata klikom na potvrdi prijem potvrdjujete prijem posiljke";
}
echo $tekst1."<br><br>";
if ($rpordzbine14==2 || $rpordzbine14==3) {
	$tekst="Ceka se verifikacija porudzbine od strane administratora";
	echo $tekst;
}else{
?>
<form method="get" action="korisnickastranaizmene.php">
	<input type="hidden" name="podaci" value="<?  echo $podaci; ?>">
	<input type="hidden" name="prolaz" value="1"  size="9">
	<input type="hidden" name="username" value="<?  echo $username; ?>" size="9">
	<input type="hidden" name="password" value="<?  echo $password; ?>" size="9">
	<input type="submit" name="licnipodaci" value= " <?php echo $tekst ?> " style="width: 150px; height: 40px">
</form>
<?php } ?>			
			