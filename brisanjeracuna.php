<?
include "OtvaranjeBaze.php";
$rusername=$_GET["username"];
?> ovo je username <?php echo $rusername ?> <br> <?php;
$rpassword=$_GET["password"];
?> ovo je password <?php echo $rpassword ?> <br> <?php;
$rprolaz=$_GET["prolaz"];
?> ovo je prolaz <?php echo $rprolaz ?> <br> <?php;
$rpodaci=$_GET["podaci"];
?> ovo je podaci <?php echo $rpodaci ?> <br><br><br> <?php;

$rstatus=$_GET["rstatus"];
$rstatus1=$_GET["rstatus1"];
$rstatus2=$_GET["rstatus2"];
$rstatus4=$_GET["rstatus4"];
$rstatus5=$_GET["rstatus5"];

$ridporudzbine=$_GET["idpro"]($idporudzbine);
$resultupdate==mysql_query("UPDATE porudzbineukupno set Status='0' WHERE IdProdzbine='$ridporudzbine' ",$db); 

$link5="korisnickastranaadministrator.php?username=".$rusername."&password=".$rpassword."&podaci=".$rpodaci."&flag=".$flag."&prolaz=".$prolaz."&id=".$r0."&prioritetpartnera=".$rr13."&idporudzbine=".$rpordzbineukupno0;
?>
<a href="<?php echo $link5 ?>" name="nazad">Nazad</a>