<?php

define ("HOST","localhost");

# za localhot podesavanje
define ("USER","root");
define ("PASSWORD","");
define ("DATABASE","internetprodaja");



$db=mysql_connect(HOST, USER, PASSWORD);
mysql_select_db(DATABASE, $db);


$result=mysql_query("SELECT Naziv, Opis, Cena, Kolicina, AkcijskaCena, IstaknutiProizvodi, Kategorija, IdProizvoda FROM `proizvodi`",$db);

    while ($myrow=mysql_fetch_row($result)) {
    		$r0=$myrow[0];
	        $r1=$myrow[1];
	        $r2=$myrow[2];
	        $r3=$myrow[3];
	        $r4=$myrow[4];
	        $r7=$myrow[7];

	        echo $r0."<br>";
	    }

?>