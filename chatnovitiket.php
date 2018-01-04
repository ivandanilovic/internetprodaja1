<?
include "OtvaranjeBaze.php";
include "funkcije.php";

$rnovitiket=$_GET["novitiket"];
$rid=$_GET["id"]($id);
$rprolazporuka=$_GET["prolazporuka"];
$rporuku=$_GET["poruku"];
$rnaslovtiketaprolaz=$_GET["naslovtiketaprolaz"];
$rnaslovtiketa=$_GET["naslovtiketa"];

$link1="chat.php?id=".$rid;
?>
<a href="<?php echo $link1?>"> Pcetna chat</a> <br><br> <?
// -------------------------------------------vreme---------------------------------------------------
$izbor="upis";
$mDatum=getdate();
$vreme=trenutnovreme($mDatum, $izbor);
//--------------------------------------------------------------------------------------------------

//upisujemo u bazu poruku, vreme...
if ($rprolazporuka==1) {
	$result=mysql_query("INSERT cet set Poruka='$rporuku', Status='1', OdKoga='$rid', Kome='3', Datum='$vreme', Tiket='$rnovitiket', NaslovTiketa='$rnaslovtiketa' ",$db);
}
//izvlacimo iz baze naslov tiketa
$resultcet=mysql_query("SELECT NaslovTiketa FROM `cet` WHERE Tiket='$rnovitiket' ",$db);
while ($myrow=mysql_fetch_row($resultcet)) {
    		$rcet0=$myrow[0];
    }
if($rnaslovtiketaprolaz==1){?>
	<form method="get" action="chatnovitiket.php">
		Unesi naslov tiketa <br><textarea name="naslovtiketa"></textarea><br><br>	
		Unesi poruku <br><textarea name="poruku"></textarea><br><br>
		<input type="hidden" name="id" value="<?  echo $rid; ?>">
		<input type="hidden" name="novitiket" value="<?  echo $rnovitiket; ?>">
		<input type="hidden" name="prolazporuka" value="1">
		<input type="hidden" name="naslovtiketaprolaz" value="0">
		<input type="submit" name="submit" value="Posalji">
	</form>
<?}else{?>
	<form method="get" action="chatnovitiket.php">
		Unesi poruku <br><textarea name="poruku"></textarea><br><br>
		<input type="hidden" name="naslovtiketa" value="<?  echo $rnaslovtiketa; ?>">
		<input type="hidden" name="id" value="<?  echo $rid; ?>">
		<input type="hidden" name="novitiket" value="<?  echo $rnovitiket; ?>">
		<input type="hidden" name="prolazporuka" value="1">
		<input type="submit" name="submit" value="Posalji">
	</form>
<?}?>


<table style="border: 2px solid black;">						
	<tr>
	    <td style="width: 600px; border: 1px solid black"><?echo $rcet0."<br><br>"?></td>
	</tr>
</table>

<?
ispisporuka($rtiket, $rid, $rnovitiket, $rprolaz1);
?>
