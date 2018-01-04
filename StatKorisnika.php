<?php

function procenat($iznos, $procenat) {
	// Ukupan broj poseta strani
	// echo $iznos ."<br>"; 
	// echo $procenat ."<br>";
	$rezultat=($procenat/100)*$iznos;
	echo $procenat ?> % od broja <?php echo $iznos ?> = <?php echo $rezultat."<br><br>";
}

// function stepenovanje1($rezultat, $iznos) {
// 	$rezultat=$rezultat*$iznos;	
// 	echo "usao u funkciju stepenovanje1";
// 	}

// function stepenovanje($iznos, $stepen) {
    
// 	$riznos=$iznos;
// 	$rezultat=1;
// 	$brojac=1;
// 	while ( $brojac<=$stepen) {
// 		stepenovanje1($rezultat, $iznos)
// 		// $rezultat=$rezultat*$iznos;
// 		$brojac++;
// 	}
// 	echo $riznos ?> na <?php echo $stepen ?> stepen = <?php echo $rezultat."<br><br>";
// }

function sabiranje($broj1, $broj2) {
	// Ukupan broj poseta strani
	echo $broj1 ."<br>"; 
	echo $broj2 ."<br>";
	$promenljiva3=$broj1+$broj2;
	echo $promenljiva3 ."<br>";
}


function FKorisnikaUkupno() {
	// Ukupno korisnika
include "OtvaranjeBaze.php";
$ukbrkor=0;
$result=mysql_query("SELECT Username FROM `partneri` ",$db);

    while ($myrow=mysql_fetch_row($result)) {
	     $ukbrkor=$ukbrkor+1;
	     $r0=$myrow[0];
	     echo $r0 ."<br>".$primavrednost;
          };
      
	echo $ukbrkor ."<br>";
}
function FPosetaStrana($webstrana) {
	// Ukupan broj poseta strani
}
//
// --------------------------------------------------------------------
//

function FPrijavljenoTrenutno() {
	// Ukupno korisnika
include "OtvaranjeBaze.php";
$ukbrkor=0;
$result=mysql_query("SELECT username FROM `prijavaodjava` WHERE (vrsta='Prijava') order by username ",$db);

    while ($myrow=mysql_fetch_row($result)) {
	     $ukbrkor=$ukbrkor+1;
          };
	echo $ukbrkor;
}

//
// --------------------------------------------------------------------
//
function FKorisnikRB() {
	// Redni broj prijave korisnika
include "OtvaranjeBaze.php";
$rbprij=0;
$result=mysql_query("SELECT username FROM `korisnik` ",$db);

    while ($myrow=mysql_fetch_row($result)) {
	     $rbprij=$rbprij+1;
          };
    $rbprij=$rbprij+1123;      
	echo $rbprij;
	
}

//----------------------------------------------------------------

function FNovihKorisnika() {
	// Novih korisnika u zadnja 24 sata

include "OtvaranjeBaze.php";

$mDatum=getdate();
$godina=$mDatum['year'];
$mesec=$mDatum['mon'];
$dan=$mDatum['mday'];
                 $SekOdda=mktime (0,0,0,$mesec,$dan,$godina)-86400;
                 $Odda= date('Y-m-d',$SekOdda);
                 $Doda= date('Y-m-d',mktime (0,0,0,$mesec,$dan,$godina));
$novikor=0;
$result=mysql_query("SELECT username, datumucl FROM `korisnik`",$db);

    while ($myrow=mysql_fetch_row($result)) {
	    if ($Odda<$myrow[1]) {
	             $novikor=$novikor+1;
              };
          };
	echo $novikor;
	
	
	
}
//----------------------------------------------------------------

function FIspisNovihKorisnika() {
	// Novih korisnika u zadnja 24 sata

include "OtvaranjeBaze.php";

$mDatum=getdate();
$godina=$mDatum['year'];
$mesec=$mDatum['mon'];
$dan=$mDatum['mday'];
                 $SekOdda=mktime (0,0,0,$mesec,$dan,$godina)-86400;
                 $Odda= date('Y-m-d',$SekOdda);
                 $Doda= date('Y-m-d',mktime (0,0,0,$mesec,$dan,$godina));
$novikor=0;
$result=mysql_query("SELECT username, datumucl, IME, telefon, adresa, mesto, email, web, PASSWORD, sponzor, aktivan FROM `korisnik`",$db);

    while ($myrow=mysql_fetch_row($result)) {
	    if ($Odda<$myrow[1]) {
	             $novikor=$novikor+1;
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
?>
<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1">
  <tr>
    <td width="10%"><font size="1">&nbsp;<? echo $r0; ?></font></td>
    <td width="10%"><font size="1">&nbsp;<? echo $r1; ?></font></td>
    <td width="10%"><font size="1">&nbsp;<? echo $r2; ?><font></td>
    <td width="10%"><font size="1">&nbsp;<? echo $r3; ?></font></td>
    <td width="5%"><font size="1">&nbsp;<? echo $r4; ?></font></td>
    <td width="5%"><font size="1">&nbsp;<? echo $r5; ?></font></td>
    <td width="10%"><font size="1">&nbsp;<? echo $r6; ?><font></td>
    <td width="10%"><font size="1">&nbsp;<? echo $r7; ?><font></td>
    <td width="10%"><font size="1">&nbsp;<? echo $r8; ?><font></td>
    <td width="10%"><font size="1">&nbsp;<? echo $r9; ?><font></td>
    <td width="10%"><font size="1">&nbsp;<? echo $r10; ?><font></td>
    
  </tr>
</table>

<?
              };
          };
//	echo $novikor;
	
	
	
}


//-------------------------------------------------------------------


function FTrenutnoPrZona() {
	// Trenutno prijavljenih u Zoni
// $db = mysql_close($db);


$ZonaPrij=0;

	echo $ZonaPrij;
	
}

//-------------------------------------------------------------------

function FTrenutnoPrSMIN($webstrana) {
	// Trenutno prijavljenih na SMIN-u
}

//-------------------------------------------------------------------
function FBrPoseta($brbrojaca) {
	// Brojac poseta
include "OtvaranjeBaze.php";
$rbrojac=0;
$result=mysql_query("SELECT username, Broj, Pocetak FROM `brojaci` ",$db);

    while ($myrow=mysql_fetch_row($result)) {
	    if ($myrow[1]==$brbrojaca) {
	            $rbrojac=$myrow[2];
              };
          };
          
$mDatum=getdate();
$godina=$mDatum['year'];
$mesec=$mDatum['mon'];
$dan=$mDatum['mday'];
$sat=$mDatum['hours'];
$minut=$mDatum['minutes'];
$sekund=$mDatum['seconds'];

$Doda= date('Y-m-d H:i:s',mktime ($sat,$minut,$sekund,$mesec,$dan,$godina));
          
$result=mysql_query("insert brojacanalitika set BrojBrojaca='$brbrojaca', Vreme='$Doda' ",$db);

$result=mysql_query("SELECT BrojBrojaca, Vreme FROM `brojacanalitika` ",$db);

    while ($myrow=mysql_fetch_row($result)) {
	    if ($myrow[0]==$brbrojaca) {
	            $rbrojac=$rbrojac+1;
              };
          };
          
echo $rbrojac;
	
}
//-------------------------------------------------------------------
function FDatumUcl() {
	// Setovanje pocetnotnog datuma uclanjenja 
include "OtvaranjeBaze.php";

$mDatum=getdate();
$godina=$mDatum['year'];
$mesec=$mDatum['mon'];
$dan=$mDatum['mday'];
                 $SekOdda=mktime (0,0,0,$mesec,$dan,$godina)-172800;
                 $Odda= date('Y-m-d',$SekOdda);
                 $Doda= date('Y-m-d',mktime (0,0,0,$mesec,$dan,$godina));


	$result=mysql_query("UPDATE korisnik set DATUMUCL='$Odda' ",$db);

}
//-------------------------------------------------------------------

//-------------------------------------------------------------------

//-------------------------------------------------------------------

//-------------------------------------------------------------------

//-------------------------------------------------------------------
//-------------------------------------------------------------------
//-------------------------------------------------------------------

function FPrijavaKorisnika($rusername) {
	// Prijava korisnika 
include "OtvaranjeBaze.php";

$mDatum=getdate();
$godina=$mDatum['year'];
$mesec=$mDatum['mon'];
$dan=$mDatum['mday'];
$sat=$mDatum['hours'];
$minut=$mDatum['minutes'];
$sekund=$mDatum['seconds'];
$Prijava="Prijava";
$usekundama=($sat*3600) + ($minut*60) + $sekund;

$Doda= date('Y-m-d H:i:s',mktime ($sat,$minut,$sekund,$mesec,$dan,$godina));

$result=mysql_query("insert prijavaodjava set username='$rusername', DatumOD='$Doda',vrsta='$Prijava', SekundiOD='$usekundama' ",$db);


}
//-------------------------------------------------------------------

function FOdjavaKorisnika($rusername) {
	// Odjava korisnika 
include "OtvaranjeBaze.php";

$mDatum=getdate();
$godina=$mDatum['year'];
$mesec=$mDatum['mon'];
$dan=$mDatum['mday'];
$sat=$mDatum['hours'];
$minut=$mDatum['minutes'];
$sekund=$mDatum['seconds'];
$Prijava="Odjava";
$usekundama=($sat*3600) + ($minut*60) + $sekund;

$Doda= date('Y-m-d H:i:s',mktime ($sat,$minut,$sekund,$mesec,$dan,$godina));

        $razl=mysql_query("select SekundiOD from prijavaodjava where (username='$rusername') and (vrsta='Prijava')",$db);
        while ($myrow=mysql_fetch_row($razl)) {
	       if ($usekundama > $myrow[0] ) {
	           $ostalo=$usekundama - $myrow[0];
               } else {
	                $ostalo=($usekundama + 86400) - $myrow[0];
                   };

	        
            $result1=mysql_query("UPDATE prijavaodjava SET DatumDO='$Doda', SekundiDO='$usekundama', Razlika='$ostalo' WHERE (username='$rusername') and (vrsta='Prijava')",$db);
            $result=mysql_query("UPDATE prijavaodjava SET vrsta='$Prijava' WHERE (username='$rusername') and (vrsta='Prijava')",$db);
        };



// $result=mysql_query("insert PrijavaOdjava set UserName='$rusername', DatumDO='$Doda',Vrsta='$Prijava', SekundiOD='$usekundama' ",$db);


}
//-------------------------------------------------------------------

//-------------------------------------------------------------------


//-------------------------------------------------------------------


function FTrenutnoPrijavljeniClanovi($rusername) {
	// Ispis trenutno prijavljenih clanova korisnikovih grupa 
include "OtvaranjeBaze.php";
?>
<center>
<font size="1" color="#000080">Clanovi Vasih grupa koji su online:<br></font>
<select size='3' name='mKorisnik' tabindex='10' style="color: #000000; font-family: Arial; font-size: 8pt">
				<?
				$imaga=0;
				// 

				include "OtvaranjeBaze.php"; 
	
    $result1=mysql_query("SELECT NazivGrupe, Osnivac FROM `grupe` WHERE (Osnivac='$rusername')",$db);
    while ($myrow1=mysql_fetch_row($result1)) {
	$rNazivGrupe=$myrow1[0];

	   $result2=mysql_query("SELECT ClanGrupe FROM `grupaclanovi` WHERE (NazivGrupe='$rNazivGrupe') order by ClanGrupe ",$db);
       while ($myrow2=mysql_fetch_row($result2)) {
	   $rClanGrupe=$myrow2[0];

	           	$result=mysql_query("SELECT username FROM `prijavaodjava` WHERE (username='$rClanGrupe') and (vrsta='Prijava') order by username ",$db);

			    while ($myrow=mysql_fetch_row($result)) {
				    $musername=$myrow[0];
				    if ($rusername<>$musername) {
			          echo " <option value=$myrow[0]>$rNazivGrupe - $myrow[0]</option>";
		              $imaga=1;
			        };
			          };
	   };
    };
				?>  
<?if ($imaga==0) {
	echo " <option value='Nema prijavljenih'>Nema prijavljenih - ";
	echo $rusername;
//	echo $rNazivGrupe;
//	echo $rClanGrupe;
	echo "</option>";
}; 

?>				            
</center>
</select>

<?
}
//-------------------------------------------------------------------

function FSpisakClanovi($rusername, $red) {
	// Ispis trenutno prijavljenih clanova korisnikovih grupa 
include "OtvaranjeBaze.php";
?>
<center>
<font size="1" color="#000080"></font>
<select size="3" name='mKorisnik' tabindex='10' style="color: #000000; font-family: Arial; font-size: 8pt">
				<?
				// 

				include "OtvaranjeBaze.php"; 
	
    $result1=mysql_query("SELECT NazivGrupe, ClanGrupe FROM `grupaclanovi` WHERE (ClanGrupe='$rusername') order by ClanGrupe ",$db);
    while ($myrow1=mysql_fetch_row($result1)) {
	$rNazivGrupe=$myrow1[0];

	   $result2=mysql_query("SELECT ClanGrupe FROM `grupaclanovi` WHERE (NazivGrupe='$rNazivGrupe') order by ClanGrupe ",$db);
       while ($myrow2=mysql_fetch_row($result2)) {
	   $rClanGrupe=$myrow2[0];

	           	$result=mysql_query("SELECT username FROM `prijavaodjava` WHERE (username='$rClanGrupe') and (vrsta='Prijava') order by username ",$db);

			    while ($myrow=mysql_fetch_row($result)) {
				    if ($rusername<>$rClanGrupe) {
			          echo " <option value=$myrow[0]>$rNazivGrupe - $myrow2[0]</option>";
		            };
			          };
	   };
    };
				?>  
</select>				            
</center>
<?
}
//-------------------------------------------------------------------

function FSlanjePorukaClanovima($rusername) {
	// Slanje poruka clanovima grupa
include "OtvaranjeBaze.php";
?>
        <form method="POST" action="SentMessUserAnswer.php" >
        <table border="0" width="100%" cellpadding="2" bgcolor="#ffffff" valign="top" style="font-family: Arial; color: #F00000; font-size: 10pt">
        <tr valign="top">
		<td width="50%" align="center" valign="top">
		<font size="1" color="#000080">Salje:</font>
        </td>
		<td width="50%" align="center" valign="top">
		<font size="1" color="#000080">Prima:</font>
        </td>
        </tr>        
        <tr valign="top">
		<td width="50%" align="center" valign="top">
        <input type="text" name="mUserName" size="15" value=<?echo $rusername?> style="color: #000000; font-family: Arial; font-size: 8pt">
        </td>
        <td width="50%" align="center" valign="top">
<?
// izbor kome se salje
?>        
<center>
<font size="1" color="#000080"></font>
<select size='<? echo $red?>' name='mKorisnik' tabindex='10'style="color: #000000; font-family: Arial; font-size: 8pt">
				<?
				// 

				include "OtvaranjeBaze.php"; 
	
    $result1=mysql_query("SELECT NazivGrupe, ClanGrupe FROM `grupaclanovi` WHERE (Osnivac='$rusername') order by Osnivac ",$db);
    while ($myrow1=mysql_fetch_row($result1)) {
		$rNazivGrupe=$myrow1[0];
		$rClanGrupe=$myrow1[1];
		echo " <option value=$myrow1[1]>$rNazivGrupe - $rClanGrupe</option>";
	};
				?>  
</select>				            
</center>
<?
// kraj izbora kome se salje
?>        

        </td>
        </tr>
        </table>
          <textarea rows="3" name="Poruka" cols="35" tabindex="1"></textarea></p>
          <p><input type="submit" value="Posalji" name="B1" tabindex="2" style="color: #000000; font-family: Arial; font-size: 8pt">
          <input type="reset" value="Ponisti" name="B2" tabindex="3" style="color: #000000; font-family: Arial; font-size: 8pt"></p>
        </form>

<?
}
//-------------------------------------------------------------------

function FNovihPoruka($rusername) {
	// Pregled internet strana svih korisnika
include "OtvaranjeBaze.php";
$ima=0;    

?>
        <select size='1' name='mPoruka' tabindex='10' style="color: #000000; font-family: Arial; font-size: 8pt">
				<?
				// 

				$result=mysql_query("SELECT salje, prima, vreme, id FROM `grupachat` WHERE (Procitana='0') order by salje ",$db);

			    while ($myrow=mysql_fetch_row($result)) {
				    if ($rusername==$myrow[1]) {
					    $vrednost=$myrow[3] . '-' . $myrow[0];
			          echo " <option value=$vrednost>$vrednost</option>";
			          $ima=1;
		            }  
			    };
   if ($ima==0) {
	echo " <option value='No new messages'>Nema novih poruka</option>";
   };           
				?>
        
	   </select>              
       <input type="submit" value="Procitaj" name="B1" tabindex="3" style="color: #000000; font-family: Arial; font-size: 8pt">
<?
}
//-------------------------------------------------------------------

function FUkupnoUplaceno() {
	// Ukupno korisnika
include "OtvaranjeBaze.php";
$ukuplaceno=0;
$result=mysql_query("SELECT iznos FROM `uplate` WHERE (SifraSvrhe='80001') ",$db);

    while ($myrow=mysql_fetch_row($result)) {
	     $ukuplaceno=$ukuplaceno+$myrow[0];
          };
	echo $ukuplaceno;
}



function FRacunKorisnika($Kusername) {
	// Ukupno korisnika
include "OtvaranjeBaze.php";
$SumaUplata=0;
$SumaPotroseno=0;
$SumaUplataUSD=0;
$SumaPotrosenoUSD=0;

$result=mysql_query("SELECT r_crc, e_md5, UserName, Iznos, Potroseno, Valuta  FROM `uplate` where (UserName='$Kusername') order by UserName",$db);
	    while ($myrow=mysql_fetch_row($result)) {
			$mr_crc=$myrow[0];
			$me_md5=$myrow[1];
			$mUserNamer=$myrow[2];
			$mIznos=$myrow[3];
			$mPotroseno=$myrow[4];
			$mValuta=$myrow[5];
			if ($mValuta=="USD") {
			   $SumaUplataUSD=$SumaUplataUSD + $mIznos;
			   $SumaPotrosenoUSD=$SumaPotrosenoUSD + $mPotroseno;
		    };
			if ($mValuta=="DIN") {
			   $SumaUplata=$SumaUplata + $mIznos;
			   $SumaPotroseno=$SumaPotroseno + $mPotroseno;
		    };
		};
		$OstaloUSD=$SumaUplataUSD-$SumaPotrosenoUSD;
		$Ostalo=$SumaUplata-$SumaPotroseno;
			    ?>
      Trenutno stanje vaseg <br> dinarskog racuna:
      <br>Uplaceno:
	  <? echo $SumaUplata; ?> Dinara
      <br>Potroseno:
	  <? echo $SumaPotroseno; ?> Dinara
      <br>---------------------
      <br>Preostalo:
	  <? echo $Ostalo; ?> Dinara
	<br><br>
      Trenutno stanje vaseg <br> $USD racuna:
      <br>Uplaceno:
	  <? echo $SumaUplataUSD; ?> $USD
      <br>Potroseno:
	  <? echo $SumaPotrosenoUSD; ?> $USD
      <br>---------------------
      <br>Preostalo:
	  <? echo $OstaloUSD; ?> $USD
<br>
<form method="post" action="KorisnickeUplate.php" target="_blank">
  <input type=hidden name="mKorisnik" value=<? echo $Kusername;  ?>>
  <input type="submit" value="Detaljni Izvod" name="B1" style="font-family: Verdana; color: #FF0000; font-size: 7pt; font-weight: normal"></p>
</form>

<?			    
};

function FPrenosSaRacuna($Kusername, $wSifra) {
	// Ukupno korisnika
include "OtvaranjeBaze.php";
?>


      <br>
      <br>Na Vasem Racunu 
      <br>
<?
$SumaUplata=0;
$SumaPotroseno=0;
$SumaUplataUSD=0;
$SumaPotrosenoUSD=0;

$result=mysql_query("SELECT r_crc, e_md5, UserName, Iznos, Potroseno, Valuta  FROM `uplate` where (UserName='$Kusername') order by UserName",$db);
	    while ($myrow=mysql_fetch_row($result)) {
			$mUserNamer=$myrow[2];
			$mIznos=$myrow[3];
			$mPotroseno=$myrow[4];
			$mValuta=$myrow[5];
			if ($mValuta=="USD") {
			   $SumaUplataUSD=$SumaUplataUSD + $mIznos;
			   $SumaPotrosenoUSD=$SumaPotrosenoUSD + $mPotroseno;
		    };
			if ($mValuta=="DIN") {
			   $SumaUplata=$SumaUplata + $mIznos;
			   $SumaPotroseno=$SumaPotroseno + $mPotroseno;
		    };
		};
		$OstaloUSD=$SumaUplataUSD-$SumaPotrosenoUSD;
		$Ostalo=$SumaUplata-$SumaPotroseno;

$rezultat=mysql_query("SELECT Sifra, CenaDIN, Naziv, Izbor  FROM `uplatesvrha` where (Sifra='$wSifra') order by Sifra",$db);
	    while ($myrow=mysql_fetch_row($rezultat)) {
		    $sifrausluge=$myrow[0];
		    $cenausluge=$myrow[1];
		    $nazivusluge=$myrow[2];
			$rId=$myrow[3];
	    };
	    if ($Ostalo>=$cenausluge) {
?>
           <b>IMATE DOVOLJNO SREDSTAVA</b>
      <br>
      <br>Kliknite na donji taster da bi ste uplatili sredstva sa Vaseg Racuna
      <br>za uslugu: <b><? echo $sifrausluge; ?> - <? echo $nazivusluge; ?> </b> 
      po ceni od <b><? echo $cenausluge; ?></b> dinara.
      <br>
<form method="post" action="UplataSaRacuna.php" >
<input type="hidden" name="UserName" size="20" value=<? echo $Kusername; ?> style="font-family: Verdana; font-size: 8pt; color: #000080">
<input type="hidden" name="Svrha" size="20" value=<? echo $sifrausluge; ?> style="font-family: Verdana; font-size: 8pt; color: #000080">
<input type="hidden" name="cena" size="20" value=<? echo $cenausluge; ?> style="font-family: Verdana; font-size: 8pt; color: #000080">

<input type="submit" value="= Uplati =" name="B1" tabindex="16" style="font-family: Verdana; color: #FF0000">
</form>
           
<?
		} else {
//			ECHO $Ostalo;
//			ECHO "<===>";
//			ECHO $cenausluge;
?>       
           <b>NEMATE DOVOLJNO SREDSTAVA</b>
      <br>
            <a href=
    <?
$rezultat=mysql_query("SELECT Sifra, CenaDIN, Naziv, Izbor  FROM `uplatesvrha` where (Sifra='$wSifra') order by Sifra",$db);
	    while ($myrow=mysql_fetch_row($rezultat)) {
		    $sifrausluge=$myrow[0];
		    $cenausluge=$myrow[1];
		    $nazivusluge=$myrow[2];
			$rId=$myrow[3];
	    };
 //   $rId=30;
    $adresa="NewPayment.php" . "?rUserName=" . $Kusername ."&rId=" . $rId;
    echo $adresa;
    ?>         target="_blank">
			<font face="Verdana" size="1" color="#000080">
			<img border="0" src="Slike/SMSPlatite.jpg" ><br>
			Uplatite SMS-om na svoj RACUN</font>
			</a>  

<br>
<?
	    };
?>
      <br>

<?   
};
function banneri($rvrsta) {
include "OtvaranjeBaze.php";

$result=mysql_query("SELECT vrsta, ukupno, NalogId, id FROM `marketing` where (Vrsta='$rvrsta') order by vrsta, ukupno ",$db);
	$rrNal=0;
	$ruku=0;
    $nedalje=0;
    while ($myrow=mysql_fetch_row($result)) {
	    if ($nedalje==0) {
	        $rrNal=$myrow[2];
	        $ruku=$myrow[1];
	        $rid=$myrow[3];
			$nedalje=1;
		};
	};
	$ruku=$ruku+1;
    $result=mysql_query("UPDATE marketing set ukupno='$ruku' WHERE (Id=$rid)",$db);
	echo $rrNal;
};
function Iz1uDA($uzmi) {

	    if ($uzmi==0) {
	        $Ispis="Ne";
		} else {
	        $Ispis="Da";
			};
	echo $Ispis;
};
function IzCenovnikaDIN($uzmi) {
include "OtvaranjeBaze.php";
$result=mysql_query("SELECT sifra, CenaDIN FROM `uplatesvrha` where (sifra='$uzmi')",$db);
    while ($myrow=mysql_fetch_row($result)) {
	  $Ispis=$myrow[1];  
};
	echo number_format($Ispis, 2, '.', '');
};
function IzCenovnikaUSD($uzmi) {
include "OtvaranjeBaze.php";
$result=mysql_query("SELECT sifra, Cena FROM `uplatesvrha` where (sifra='$uzmi')",$db);
    while ($myrow=mysql_fetch_row($result)) {
	  $Ispis=$myrow[1];  
};
	echo number_format($Ispis, 2, '.', '');
};

function FSveUplateDetalji() {
	// Ukupno korisnika
include "OtvaranjeBaze.php";
$ukuplaceno=0;
$result=mysql_query("SELECT UserName, SifraSvrhe, Svrha, Potroseno, Iznos, Datum FROM `uplate` order by UserName, SifraSvrhe asc ",$db);
	     ?>
<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse; font-family: Verdana; font-size: 8pt; color: #000080" bordercolor="#111111" width="100%" id="AutoNumber1" bordercolorlight="#008000" bordercolordark="#008000">
  <tr>
    <td width="10%"  align="center" style="font-family: Verdana; color: #008000; font-size: 8pt; font-weight: bold" bgcolor="#FFFFFF">
    User Name
    </td>
    <td width="10%"  align="center" style="font-family: Verdana; color: #008000; font-size: 8pt; font-weight: bold" bgcolor="#FFFFFF">
    Sifra Svrhe
    </td>
    <td width="50%"  align="center" style="font-family: Verdana; color: #008000; font-size: 8pt; font-weight: bold" bgcolor="#FFFFFF">
    Svrha
    </td>
    <td width="10%"  align="center" style="font-family: Verdana; color: #008000; font-size: 8pt; font-weight: bold" bgcolor="#FFFFFF">
    Potroseno
    </td>
    <td width="10%"  align="center" style="font-family: Verdana; color: #008000; font-size: 8pt; font-weight: bold" bgcolor="#FFFFFF">
    Uplaceno
    </td>
    <td width="10%"  align="center" style="font-family: Verdana; color: #008000; font-size: 8pt; font-weight: bold" bgcolor="#FFFFFF">
    Datum
    </td>
  </tr>
</table>
	     <?
	$prvi=1;
	$rPotroseno=0;
	$rUplaceno=0;
    while ($myrow=mysql_fetch_row($result)) {
	     $ukuplaceno=$ukuplaceno+$myrow[4];
	     $r0=$myrow[0];
	     $r1=$myrow[1];
	     $r2=$myrow[2];
	     $r3=$myrow[3];
	     $r4=$myrow[4];
	     $r5=$myrow[5];
	     
		 
	     if ($prvi==1) {
			$prvi=0;
		    $rezuser=$r0; 
	     };
	     if ($prvi==0) {
		 if ($rezuser<>$r0) { 
			    
	     ?>
<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse; font-family: Verdana; font-size: 8pt; color: #000080" bordercolor="#111111" width="100%" id="AutoNumber1" bordercolorlight="#008000" bordercolordark="#008000">
  <tr>
    <td width="10%" bgcolor="#008000"  align="center" style="font-family: Verdana; color: #FFFFFF; font-size: 8pt; font-weight: bold">
    UserName
    </td>
    <td width="10%" bgcolor="#008000"  align="center" style="font-family: Verdana; color: #FFFFFF; font-size: 8pt; font-weight: bold">
    <? //echo $r1; 
    ?>
    </td>
    <td width="50%" bgcolor="#008000"  align="center" style="font-family: Verdana; color: #FFFFFF; font-size: 8pt; font-weight: bold">
    <? //echo $r2; 
    ?>
    </td>
    <td width="10%" bgcolor="#008000"  align="center" style="font-family: Verdana; color: #FFFFFF; font-size: 8pt; font-weight: bold">
    Potroseno
    </td>
    <td width="10%" bgcolor="#008000"  align="center" style="font-family: Verdana; color: #FFFFFF; font-size: 8pt; font-weight: bold">
	Uplaceno
    </td>
    <td width="10%" bgcolor="#008000"  align="center" style="font-family: Verdana; color: #FFFFFF; font-size: 8pt; font-weight: bold">
    Preostalo
    </td>
  </tr>
</table>
<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse; font-family: Verdana; font-size: 8pt; color: #000080" bordercolor="#111111" width="100%" id="AutoNumber1" bordercolorlight="#008000" bordercolordark="#008000">
  <tr>
    <td width="10%" bgcolor="#008000"  align="center" style="font-family: Verdana; color: #FFFFFF; font-size: 8pt; font-weight: bold">
    <? echo $rezuser; ?>
    </td>
    <td width="10%" bgcolor="#008000"  align="center" style="font-family: Verdana; color: #FFFFFF; font-size: 8pt; font-weight: bold">
    <? //echo $r1; 
    ?>
    </td>
    <td width="50%" bgcolor="#008000"  align="center" style="font-family: Verdana; color: #FFFFFF; font-size: 8pt; font-weight: bold">
    <? //echo $r2; 
    ?>
    </td>
    <td width="10%" bgcolor="#008000"  align="center" style="font-family: Verdana; color: #FFFFFF; font-size: 8pt; font-weight: bold">
    <? echo $rPotroseno; 
    ?>
    </td>
    <td width="10%" bgcolor="#008000"  align="center" style="font-family: Verdana; color: #FFFFFF; font-size: 8pt; font-weight: bold">
    <? echo $rUplaceno; 
    ?>
    </td>
    <td width="10%" bgcolor="#008000"  align="center" style="font-family: Verdana; color: #FFFFFF; font-size: 8pt; font-weight: bold">
    <? echo $rUplaceno - $rPotroseno; 
    ?>
    </td>
  </tr>
</table>

	     <?
	     		    $rezuser=$r0; 
					$rPotroseno=0;
					$rUplaceno=0;

     };
	     };
	     ?>
<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse; font-family: Verdana; font-size: 8pt; color: #000080" bordercolor="#111111" width="100%" id="AutoNumber1" bordercolorlight="#008000" bordercolordark="#008000">
  <tr>
    <td width="10%"  align="center" style="font-family: Verdana; color: #008000; font-size: 8pt; font-weight: bold" bgcolor="#FFFFFF">
    <? echo $r0; ?>
    </td>
    <td width="10%"  align="center" style="font-family: Verdana; color: #008000; font-size: 8pt; font-weight: bold" bgcolor="#FFFFFF">
    <? echo $r1; ?>
    </td>
    <td width="50%"  align="center" style="font-family: Verdana; color: #008000; font-size: 8pt; font-weight: bold" bgcolor="#FFFFFF">
    <? echo $r2; ?>
    </td>
    <td width="10%"  align="center" style="font-family: Verdana; color: #008000; font-size: 8pt; font-weight: bold" bgcolor="#FFFFFF">
    <? echo $r3; ?>
    </td>
    <td width="10%"  align="center" style="font-family: Verdana; color: #008000; font-size: 8pt; font-weight: bold" bgcolor="#FFFFFF">
    <? echo $r4; ?>
    </td>
    <td width="10%"  align="center" style="font-family: Verdana; color: #008000; font-size: 8pt; font-weight: bold" bgcolor="#FFFFFF">
    <? echo $r5; ?>
    </td>
  </tr>
</table>
	     <?
		 $rPotroseno=$rPotroseno+$r3;
		 $rUplaceno=$rUplaceno+$r4;
		 
	     $r0=$rr0;
	     $r1=$rr1;
	     $r2=$rr2;
	     $r3=$rr3;
	     $r4=$rr4;
	     $r5=$rr5;
          };
	// echo $ukuplaceno;
};



function FKorisnickeRacun($rKorisnik) {
	// Ukupno korisnika
include "OtvaranjeBaze.php";
$ukuplaceno=0;
$result=mysql_query("SELECT UserName, SifraSvrhe, Svrha, Potroseno, Iznos, Datum FROM `uplate` WHERE (UserName='$rKorisnik') order by UserName, SifraSvrhe asc ",$db);
	     ?>
<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse; font-family: Verdana; font-size: 8pt; color: #000080" bordercolor="#111111" width="100%" id="AutoNumber1" bordercolorlight="#008000" bordercolordark="#008000">
  <tr>
    <td width="10%"  align="center" style="font-family: Verdana; color: #008000; font-size: 8pt; font-weight: bold" bgcolor="#FFFFFF">
    User Name
    </td>
    <td width="10%"  align="center" style="font-family: Verdana; color: #008000; font-size: 8pt; font-weight: bold" bgcolor="#FFFFFF">
    Sifra Svrhe
    </td>
    <td width="50%"  align="center" style="font-family: Verdana; color: #008000; font-size: 8pt; font-weight: bold" bgcolor="#FFFFFF">
    Svrha
    </td>
    <td width="10%"  align="center" style="font-family: Verdana; color: #008000; font-size: 8pt; font-weight: bold" bgcolor="#FFFFFF">
    Potroseno
    </td>
    <td width="10%"  align="center" style="font-family: Verdana; color: #008000; font-size: 8pt; font-weight: bold" bgcolor="#FFFFFF">
    Uplaceno
    </td>
    <td width="10%"  align="center" style="font-family: Verdana; color: #008000; font-size: 8pt; font-weight: bold" bgcolor="#FFFFFF">
    Datum
    </td>
  </tr>
</table>
	     <?
	$prvi=1;
	$rPotroseno=0;
	$rUplaceno=0;
    while ($myrow=mysql_fetch_row($result)) {
	     $ukuplaceno=$ukuplaceno+$myrow[4];
	     $r0=$myrow[0];
	     $r1=$myrow[1];
	     $r2=$myrow[2];
	     $r3=$myrow[3];
	     $r4=$myrow[4];
	     $r5=$myrow[5];
	     
		 
	     if ($prvi==1) {
			$prvi=0;
		    $rezuser=$r0; 
	     };
	     if ($prvi==0) {
		 if ($rezuser<>$r0) { 
			    
	     ?>
<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse; font-family: Verdana; font-size: 8pt; color: #000080" bordercolor="#111111" width="100%" id="AutoNumber1" bordercolorlight="#008000" bordercolordark="#008000">
  <tr>
    <td width="10%" bgcolor="#008000"  align="center" style="font-family: Verdana; color: #FFFFFF; font-size: 8pt; font-weight: bold">
    UserName
    </td>
    <td width="10%" bgcolor="#008000"  align="center" style="font-family: Verdana; color: #FFFFFF; font-size: 8pt; font-weight: bold">
    <? //echo $r1; 
    ?>
    </td>
    <td width="50%" bgcolor="#008000"  align="center" style="font-family: Verdana; color: #FFFFFF; font-size: 8pt; font-weight: bold">
    <? //echo $r2; 
    ?>
    </td>
    <td width="10%" bgcolor="#008000"  align="center" style="font-family: Verdana; color: #FFFFFF; font-size: 8pt; font-weight: bold">
    Potroseno
    </td>
    <td width="10%" bgcolor="#008000"  align="center" style="font-family: Verdana; color: #FFFFFF; font-size: 8pt; font-weight: bold">
	Uplaceno
    </td>
    <td width="10%" bgcolor="#008000"  align="center" style="font-family: Verdana; color: #FFFFFF; font-size: 8pt; font-weight: bold">
    Preostalo
    </td>
  </tr>
</table>

	     <?
	     		    $rezuser=$r0; 
					$rPotroseno=0;
					$rUplaceno=0;

     };
	     };
	     ?>
<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse; font-family: Verdana; font-size: 8pt; color: #000080" bordercolor="#111111" width="100%" id="AutoNumber1" bordercolorlight="#008000" bordercolordark="#008000">
  <tr>
    <td width="10%"  align="center" style="font-family: Verdana; color: #008000; font-size: 8pt; font-weight: bold" bgcolor="#FFFFFF">
    <? echo $r0; ?>
    </td>
    <td width="10%"  align="center" style="font-family: Verdana; color: #008000; font-size: 8pt; font-weight: bold" bgcolor="#FFFFFF">
    <? echo $r1; ?>
    </td>
    <td width="50%"  align="center" style="font-family: Verdana; color: #008000; font-size: 8pt; font-weight: bold" bgcolor="#FFFFFF">
    <? echo $r2; ?>
    </td>
    <td width="10%"  align="center" style="font-family: Verdana; color: #008000; font-size: 8pt; font-weight: bold" bgcolor="#FFFFFF">
    <? echo $r3; ?>
    </td>
    <td width="10%"  align="center" style="font-family: Verdana; color: #008000; font-size: 8pt; font-weight: bold" bgcolor="#FFFFFF">
    <? echo $r4; ?>
    </td>
    <td width="10%"  align="center" style="font-family: Verdana; color: #008000; font-size: 8pt; font-weight: bold" bgcolor="#FFFFFF">
    <? echo $r5; ?>
    </td>
  </tr>
</table>
	     <?
		 $rPotroseno=$rPotroseno+$r3;
		 $rUplaceno=$rUplaceno+$r4;
		 
	     $r0=$rr0;
	     $r1=$rr1;
	     $r2=$rr2;
	     $r3=$rr3;
	     $r4=$rr4;
	     $r5=$rr5;
          };
	// echo $ukuplaceno;
?>

<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse; font-family: Verdana; font-size: 8pt; color: #000080" bordercolor="#111111" width="100%" id="AutoNumber1" bordercolorlight="#008000" bordercolordark="#008000">
  <tr>
    <td width="10%" bgcolor="#008000"  align="center" style="font-family: Verdana; color: #FFFFFF; font-size: 8pt; font-weight: bold">
    <? echo $rezuser; ?>
    </td>
    <td width="10%" bgcolor="#008000"  align="center" style="font-family: Verdana; color: #FFFFFF; font-size: 8pt; font-weight: bold">
	Ukupno
    </td>
    <td width="50%" bgcolor="#008000"  align="center" style="font-family: Verdana; color: #FFFFFF; font-size: 8pt; font-weight: bold">
    <? //echo $r2; 
    ?>
    </td>
    <td width="10%" bgcolor="#008000"  align="center" style="font-family: Verdana; color: #FFFFFF; font-size: 8pt; font-weight: bold">
    <? echo $rPotroseno; 
    ?>
    </td>
    <td width="10%" bgcolor="#008000"  align="center" style="font-family: Verdana; color: #FFFFFF; font-size: 8pt; font-weight: bold">
    <? echo $rUplaceno; 
    ?>
    </td>
    <td width="10%" bgcolor="#008000"  align="center" style="font-family: Verdana; color: #FFFFFF; font-size: 8pt; font-weight: bold">
    <? echo $rUplaceno - $rPotroseno; 
    ?>
    </td>
  </tr>
</table>
	
<?
};

function FSveUplateDanas() {
	// Ukupno korisnika
include "OtvaranjeBaze.php";

		$mDatum=getdate();
$godina=$mDatum['year'];
$mesec=$mDatum['mon'];
$dan=$mDatum['mday'];
                 $Odda= date('d-m-Y',mktime (0,0,0,$mesec,$dan,$godina));
                 $rDatum= date('Y-m-d',mktime (0,0,0,$mesec,$dan,$godina));
$ukuplaceno=0;
$result=mysql_query("SELECT UserName, SifraSvrhe, Svrha, Potroseno, Iznos, Datum FROM `uplate` ",$db);
	     ?>
	     <?
	$prvi=1;
	$rPotroseno=0;
	$rUplaceno=0;
    while ($myrow=mysql_fetch_row($result)) {
	     // $ukuplaceno=$ukuplaceno+$myrow[4];
	     $r0=$myrow[0];
	     $r1=$myrow[1];
	     $r2=$myrow[2];
	     $r3=$myrow[3];
	     $r4=$myrow[4];
	     $r5=$myrow[5];
	     
		 
		 if (substr($r5,0,10)==substr($rDatum,0,10)) {
		    $rPotroseno=$rPotroseno+$r3;
		    $rUplaceno=$rUplaceno+$r4;
	 	 };
		 
          };
	 echo "Danas je: ";
	 echo $Odda;
	 echo "<br>";
	 echo "<br>";
	 echo "Danas Uplaceno: ";
	 echo number_format($rUplaceno, 2, '.', '');
	 echo " Din";
};

function FSveUplateDanasWap() {
	// Ukupno korisnika
include "OtvaranjeBaze.php";

		$mDatum=getdate();
$godina=$mDatum['year'];
$mesec=$mDatum['mon'];
$dan=$mDatum['mday'];
                 $Odda= date('d-m-Y',mktime (0,0,0,$mesec,$dan,$godina));
                 $rDatum= date('Y-m-d',mktime (0,0,0,$mesec,$dan,$godina));
$ukuplaceno=0;
$result=mysql_query("SELECT UserName, SifraSvrhe, Svrha, Potroseno, Iznos, Datum FROM `uplate` ",$db);
	     ?>
	     <?
	$prvi=1;
	$rPotroseno=0;
	$rUplaceno=0;
    while ($myrow=mysql_fetch_row($result)) {
	     // $ukuplaceno=$ukuplaceno+$myrow[4];
	     $r0=$myrow[0];
	     $r1=$myrow[1];
	     $r2=$myrow[2];
	     $r3=$myrow[3];
	     $r4=$myrow[4];
	     $r5=$myrow[5];
	     
		 
		 if (substr($r5,0,10)==substr($rDatum,0,10)) {
		    $rPotroseno=$rPotroseno+$r3;
		    $rUplaceno=$rUplaceno+$r4;
	 	 };
		 
          };
	 echo "Danas Uplaceno: ";
	 echo number_format($rUplaceno, 2, '.', '');
	 echo " Din";
};
function FSveUplateJuceWap() {
	// Ukupno korisnika
include "OtvaranjeBaze.php";

		$mDatum=getdate();
$godina=$mDatum['year'];
$mesec=$mDatum['mon'];
$dan=$mDatum['mday']-1;
                 $Odda= date('d-m-Y',mktime (0,0,0,$mesec,$dan,$godina));
                 $rDatum= date('Y-m-d',mktime (0,0,0,$mesec,$dan,$godina));
$ukuplaceno=0;
$result=mysql_query("SELECT UserName, SifraSvrhe, Svrha, Potroseno, Iznos, Datum FROM `uplate` ",$db);
	     ?>
	     <?
	$prvi=1;
	$rPotroseno=0;
	$rUplaceno=0;
    while ($myrow=mysql_fetch_row($result)) {
	     // $ukuplaceno=$ukuplaceno+$myrow[4];
	     $r0=$myrow[0];
	     $r1=$myrow[1];
	     $r2=$myrow[2];
	     $r3=$myrow[3];
	     $r4=$myrow[4];
	     $r5=$myrow[5];
	     
		 
		 if (substr($r5,0,10)==substr($rDatum,0,10)) {
		    $rPotroseno=$rPotroseno+$r3;
		    $rUplaceno=$rUplaceno+$r4;
	 	 };
		 
          };
     echo "<br>";     
	 echo "Juce Uplaceno: ";
	 echo number_format($rUplaceno, 2, '.', '');
	 echo " Din";
};

function FSveUplateKorDanas() {
	// Ukupno korisnika
include "OtvaranjeBaze.php";

		$mDatum=getdate();
$godina=$mDatum['year'];
$mesec=$mDatum['mon'];
$dan=$mDatum['mday'];
                 $Odda= date('d-m-Y',mktime (0,0,0,$mesec,$dan,$godina));
                 $rDatum= date('Y-m-d',mktime (0,0,0,$mesec,$dan,$godina));
$ukuplaceno=0;
$result=mysql_query("SELECT UserName, SifraSvrhe, Svrha, Potroseno, Iznos, Datum FROM `uplate` ",$db);
	     ?>
	     <?
	$prvi=1;
	$rPotroseno=0;
	$rUplaceno=0;
    while ($myrow=mysql_fetch_row($result)) {
	     // $ukuplaceno=$ukuplaceno+$myrow[4];
	     $r0=$myrow[0];
	     $r1=$myrow[1];
	     $r2=$myrow[2];
	     $r3=$myrow[3];
	     $r4=$myrow[4];
	     $r5=$myrow[5];
	     
		 
		 if (substr($r5,0,10)==substr($rDatum,0,10)) {
		    $rPotroseno=$rPotroseno+$r3;
		    $rUplaceno=$rUplaceno+$r4;
?>
<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse; font-family: Verdana; font-size: 8pt; color: #000080" bordercolor="#111111" width="100%" id="AutoNumber1" bordercolorlight="#008000" bordercolordark="#008000">
  <tr>
    <td width="10%"  align="center" style="font-family: Verdana; color: #008000; font-size: 8pt; font-weight: bold" bgcolor="#FFFFFF">
    <? echo $r0; ?>
    </td>
    <td width="10%"  align="center" style="font-family: Verdana; color: #008000; font-size: 8pt; font-weight: bold" bgcolor="#FFFFFF">
    <? echo $r1; ?>
    </td>
    <td width="50%"  align="center" style="font-family: Verdana; color: #008000; font-size: 8pt; font-weight: bold" bgcolor="#FFFFFF">
    <? echo $r2; ?>
    </td>
    <td width="10%"  align="center" style="font-family: Verdana; color: #008000; font-size: 8pt; font-weight: bold" bgcolor="#FFFFFF">
    <? echo $r3; ?>
    </td>
    <td width="10%"  align="center" style="font-family: Verdana; color: #008000; font-size: 8pt; font-weight: bold" bgcolor="#FFFFFF">
    <? echo $r4; ?>
    </td>
    <td width="10%"  align="center" style="font-family: Verdana; color: #008000; font-size: 8pt; font-weight: bold" bgcolor="#FFFFFF">
    <? echo $r5; ?>
    </td>
  </tr>
</table>

<?		    
	 	 };
		 
          };
	 echo "Danas je: ";
	 echo $Odda;
	 echo "<br>";
	 echo "<br>";
	 echo "Danas Uplaceno: ";
	 echo number_format($rUplaceno, 2, '.', '');
	 echo " Din";
};
function FIspissta($kdat,$kpos) {
	// Ukupno korisnika
include "OtvaranjeBaze.php";
?>

<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; font-family: Arial; font-size: 8pt; color: #000080" bordercolor="#111111" width="100%" id="AutoNumber1">
  <tr>
    <td width="20%">&nbsp;
    <? 
    echo $kdat;
    ?> 
    </td>
    <td width="5%">&nbsp;
    =>
    </td>
    <td width="10%" align="left">
    <? 
    echo $kpos;
    ?> 
    </td>
    <td width="5%">&nbsp;
    </td>
    <td width="10%">&nbsp;
    </td>
    <td width="10%">&nbsp;
    </td>
    <td width="10%">&nbsp;
    </td>
    <td width="10%">&nbsp;
    </td>
    <td width="10%">&nbsp;
    </td>
    <td width="10%">&nbsp;
    </td>
  </tr>
</table>

<?
}
function FSveUplateJuce() {
	// Ukupno korisnika
include "OtvaranjeBaze.php";

		$mDatum=getdate();
$godina=$mDatum['year'];
$mesec=$mDatum['mon'];
$dan=$mDatum['mday']-1;
                 $Odda= date('d-m-Y',mktime (0,0,0,$mesec,$dan,$godina));
                 $rDatum= date('Y-m-d',mktime (0,0,0,$mesec,$dan,$godina));
$ukuplaceno=0;
$result=mysql_query("SELECT UserName, SifraSvrhe, Svrha, Potroseno, Iznos, Datum FROM `uplate`",$db);
	     ?>
	     <?
	$prvi=1;
	$rPotroseno=0;
	$rUplaceno=0;
    while ($myrow=mysql_fetch_row($result)) {
	     // $ukuplaceno=$ukuplaceno+$myrow[4];
	     
	     $r0=$myrow[0];
	     $r1=$myrow[1];
	     $r2=$myrow[2];
	     $r3=$myrow[3];
	     $r4=$myrow[4];
	     $r5=$myrow[5];
	     
		 if (substr($r5,0,10)==substr($rDatum,0,10)) {
		    $rPotroseno=$rPotroseno+$r3;
		    $rUplaceno=$rUplaceno+$r4;
	 	 };
          };
//	 echo "<br>";
//	 echo "Juce je: ";
//	 echo substr($rDatum,0,10);
	 echo "<br>";
	 echo "Juce Uplaceno: ";
	 echo number_format($rUplaceno, 2, '.', '');
	 echo " Din";
}


?>


