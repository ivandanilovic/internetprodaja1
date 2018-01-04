
<?php
include "OtvaranjeBaze.php";

$ridpro=$_GET["idpro"];
$ristibrojracuna=$_GET["istibrojracuna"];
?>ovo je isti br racuna <?php echo $ristibrojracuna ?> <br> <?php

/* vrednost flag-a sa sa stranice staviukorpu.php -> kupovina.php*/

$rflag1=$_GET["vrednostflaga"];
?>ovo je vrednost flaga <?php echo $rflag1; ?> <br> <?php

// kada je partener ulogovan na stranici kupovinapartnera.php ili kupovniabezregistacije.php prenosi se idpartnera

$ridpartnera=$_GET["idpartnera"];
?> ovo je idpartnera <?php echo $ridpartnera; ?> <br> <?php 

$kolonauredu=1;
$result=mysql_query("SELECT Naziv, Opis, Cena, Kolicina, AkcijskaCena, IstaknutiProizvodi, Kategorija, IdProizvoda FROM `proizvodi`",$db);

    while ($myrow=mysql_fetch_row($result)) {
    		$r0=$myrow[0];
	        $r1=$myrow[1];
	        $r2=$myrow[2];
	        $r3=$myrow[3];
	        $r4=$myrow[4];
	        $r7=$myrow[7];
	        if ($ridpro==$r7) {
?>
<table>
	<tr>
								<td style="width: 33.33%"> 
							        
							        
							        <?php $slika ="image/".$r7.".jpg";?>
							        <img src="<?php echo $slika; ?>" alt="" border="0" /><br><br><br>

							        

							        
								</td>

								<td style="width: 33.33%"> 
									<?php echo $r0; ?> <br><br><br>

							        <?php echo $r1; ?><br><br><br>
							        
							        Cena : <?php echo $r2; ?><br><br><br>

							         <form method="get" action="staviukorpu.php">

							        	kolicina:<input type="text" name="kolicina" value="1" size="3"> <br> <!-- polje za upis koliko proizvoda zelimo da narucimo -->

							        	Trenutno na stanju: <?php echo $r3; ?> <br><br>

										<input type="hidden" name="idpro" value="<?php  echo $r7; ?>" size="9">
										<input type="hidden" name="idpartnera" value="<?php  echo $ridpartnera; ?>" size="9">
										<input type="hidden" name="istibrojracuna" value="<?php  echo $ristibrojracuna; ?>" size="9">
										<input type="hidden" name="vrednostflaga" value="<?php  echo $rflag1; ?>" size="9">
							       
										<input type="submit" name="kupi" value="stavi u korpu">
									</form>
								</td>
	</tr>
	
</table>
<?php  


}
}
?>