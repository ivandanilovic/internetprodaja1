<?php
include "OtvaranjeBaze.php";

$rgodina2=$_GET["godina2"];
echo $rgodina2 ."<br>";

$rgodina3=$_GET["godina3"];
echo $rgodina3 ."<br>";

$rgodina5=$_GET["godina5"];
echo $rgodina5 ."<br>";

$god5= substr($rgodina5, 0,4);
echo $god ."<br>";

$mes5= substr($rgodina5, 5,2);
echo $mes ."<br>";

$dan5= substr($rgodina5, 8,2);
echo $dan ."<br>";



$rgodina6=$_GET["godina6"];
echo $rgodina6 ."<br>";

$god6= substr($rgodina6, 0,4);
echo $god ."<br>";

$mes6= substr($rgodina6, 5,2);
echo $mes ."<br>";

$dan6= substr($rgodina6, 8,2);
echo $dan ."<br>";


$rgodina7=$_GET["godina7"];
echo $rgodina5 ."<br>";

$god7= substr($rgodina7, 0,4);
echo $god ."<br>";

$mes7= substr($rgodina7, 5,2);
echo $mes ."<br>";

$dan7= substr($rgodina7, 8,2);
echo $dan ."<br>";




$god1= substr($rgodina3, 0,4);
echo $god ."<br>";

$mes1= substr($rgodina3, 5,2);
echo $mes ."<br>";

$dan1= substr($rgodina3, 8,2);
echo $dan ."<br>";

$x1=mktime (0,0,0,$mes1,$dan1,$god1);
echo $x1."----------------<br>";

$Doda1= date('Y-m-d',mktime (0,0,0,$mes1,$dan1,$god1));
                 echo $Doda1."<br>";



// 2017-02-26

$god= substr($rgodina2, 0,4);
echo $god ."<br>";

$mes= substr($rgodina2, 5,2);
echo $mes ."<br>";

$dan= substr($rgodina2, 8,2);
echo $dan ."<br>";

$x=mktime (0,0,0,$mes,$dan,$god);
echo $x."---------------x1-<br>";

$Doda= date('Y-m-d',mktime (0,0,0,$mes,$dan,$god));
                 echo $Doda."<br>";

$razlikadana=(($x1-$x)/86400)+1;
echo "Ovo je razlika dana".$razlikadana."<br>";

$rprolaz=htmlspecialchars($prolaz);
if ($rprolaz==1) {
	$resultdatum==mysql_query("INSERT datumi set datum='$rgodina2'",$db);
}


$rgodina1=htmlspecialchars($godina1);
echo $rgodina1 ."<br>";

if ($rgodina1 %4 ==0) {
	echo "Ovoj je prestupna godina"."<br>";
}else{
	echo "Ovo nije prestupna godina"."<br>";
}





?>
<form action="zadaci.php" method="get">
	Unesi godinu <input type="text" name="godina1">
	<input type="submit" name="potvrdi" value="submit">
</form>



<form action="zadaci.php" method="get">
	Datum od <input type="date" name="godina2">
	Datum do <input type="date" name="godina3">
	<input type="hidden" name="prolaz" value="1">
	<input type="submit" name="potvrdi" value="submit">
</form>


<?php 
//odredjuje broj dana u mesecu
$Doda2= date("t",mktime (0,0,0,$mes5,$dan5,$god5));
                 echo $Doda2."<br>";
//odredjuje koliko je preostalo dana do kraja meseca
$Doda3=$Doda2-$dan5;
                 echo $Doda3."<br>";

?>
<form action="zadaci.php" method="get">
	Datum od <input type="date" name="godina5">
	<input type="hidden" name="prolaz" value="1">
	<input type="submit" name="potvrdi" value="submit">
</form>

<?php 
$Doda6= mktime (0,0,0,$mes6,$dan6,$god6);
                 echo $Doda6."<br>";

$Doda7= mktime (0,0,0,$mes7,$dan7,$god7);
                 echo $Doda7."<br>";

$razlika1=(($Doda7-$Doda6)/86400)+1;
echo $razlika1."<br>";
$a=0;
$vrednost=100;
while ( $a<$razlika1) {
	$vrednost=$vrednost*1.05;
	$a++;
	echo $vrednost."<br>";
}
//zaokruzuje decimalu na dva broja
$nombre_format_francais = number_format($vrednost, 2, ',', ' ');
echo $nombre_format_francais;
?>

<form action="zadaci.php" method="get">
	Datum od <input type="date" name="godina6">
	Datum do <input type="date" name="godina7">
	<input type="hidden" name="prolaz" value="1">
	<input type="submit" name="potvrdi" value="submit">
</form>