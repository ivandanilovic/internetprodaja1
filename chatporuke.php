<?
include "OtvaranjeBaze.php";
include "funkcije.php";

$rprolaz1=$_GET["prolaz1"];
$rtiket=$_GET["tiket"];
$rid=$_GET["id"];
$rprolazporuka=$_GET["prolazporuka"];
$rporuku=$_GET["poruku"];
$rzavrsitiket=$_GET["zavrsitiket"];

$link1="chat.php?id=".$rid;
?>
<a href="<?php echo $link1?>"> Pcetna chat</a> <br><br> <?
// -------------------------------------------vreme---------------------------------------------------
$izbor="upis";
$mDatum=getdate();
$vreme=trenutnovreme($mDatum, $izbor);
//--------------------------------------------------------------------------------------------------
?>

<form method="get" action="chatporuke.php">
	Unesi poruku <textarea name="poruku"></textarea><br><br>
	<input type="hidden" name="id" value="<?  echo $rid; ?>">
	<input type="hidden" name="tiket" value="<?  echo $rtiket; ?>">
	<input type="hidden" name="prolazporuka" value="1">
	<input type="hidden" name="novitiket" value="0">
	<input type="submit" name="submit" value="Posalji">
</form>
<!-- prover da li treba prolaz1 za if uslov u funkciji -->
<form method="get" action="chat.php">
	<input type="hidden" name="id" value="<?  echo $rid; ?>">
	<input type="hidden" name="tiket" value="<?  echo $rtiket; ?>">
	<input type="hidden" name="zavrsitiket" value="1">
	<input type="submit" name="submit" value="Zavrsi tiket">
</form>

<?
//izvlacimo naslov tiketa
$resultcet=mysql_query("SELECT NaslovTiketa FROM `cet` WHERE Tiket='$rtiket' ",$db);
while ($myrow=mysql_fetch_row($resultcet)) {
    		$rcet0=$myrow[0];
    }

?>
<table style="border: 2px solid black;">						
	<tr>
	    <td style="width: 600px; border: 1px solid black"><?echo $rcet0."<br><br>"?></td>
	</tr>
</table>

<?
// upisujemo poruku, vreme ....
if ($rprolazporuka==1) {
	$result=mysql_query("INSERT cet set Poruka='$rporuku', Status='1', OdKoga='$rid', Kome='3', Datum='$vreme', Tiket='$rtiket', NaslovTiketa='$rcet0' ",$db);
}

ispisporuka($rtiket, $rid, $rnovitiket, $rprolaz1);
?>
