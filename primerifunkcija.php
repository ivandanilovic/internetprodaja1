<?php 
include "funkcije.php";
$rbroj=$_GET["broj"];
$rprocenat=$_GET["procenat"];
// $br1=1000;
// $br2=30;
// FKorisnikaUkupno();
// sabiranje($br1, $br2);
procenat($rbroj, $rprocenat)
?>

<form action="primerifunkcija.php">
	<input type="text" name="broj" placeholder="Unesi broj">
	<input type="text" name="procenat" placeholder="Unesi unesi procenat">

	<input type="submit" name="submit" value="Izracunaj">
</form>
<br><br><br>

<!-- druga funkcija -->

<?php
$rbroj1=$_GET["broj1"];
$rstepen=$_GET["stepen"];
$rez=1;
$br=1;
stepen1($rbroj1, $rstepen, $rez, $br)
?>

<form action="primerifunkcija.php">
	<input type="text" name="broj1" placeholder="Unesi broj">
	<input type="text" name="stepen" placeholder="Unesi stepen">

	<input type="submit" name="submit" value="Izracunaj">
</form>

<!-- treca funkcija -->

<?php
$rbroj2=$_GET["broj2"];
$rezultat=1;
faktorijel($rbroj2, $rezultat)
?>

<form action="primerifunkcija.php">
	<input type="text" name="broj2" placeholder="Unesi broj">

	<input type="submit" name="submit" value="Izracunaj">
</form>