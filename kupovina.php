<style>
	table, th, td {border: 1px solid black;}
</style>

<?php
include "OtvaranjeBaze.php";

$ristibrojracuna=$_GET["istibrojracuna"];
?> ovo je isti racun <?php echo $ristibrojracuna; ?> <br> <?php 

// vrednost flag-a sa sa stranice staviukorpu
$rflag1=$_GET["vrednostflaga"]; 
?> ovo je vrednost flaga <?php echo  $rflag1; ?> <br> <?php 

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
#pitamo se da li je kolicina veca od 0 (nem smisla ispisivati proizvode koji nisu na stanju)
    			if ($r3>0) {

    				#echo $r0."  -  ".$r2."   -  ".$r3."<br>";
    				# da li je broj kolona = 3
    				if ($kolonauredu==3) {

    				?>

    				<table style="width: 100%">
						<tr>
							<td style="width: 33.33%"> 
								<?php echo $rrr0; ?> <br><br><br>

						        <?php $slika ="image/".$rrr7."a.jpg";?>
						        <img src="<?php echo $slika; ?>" alt="" border="0" /><br><br><br>

						        <?php echo $rrr1; ?><br><br><br>

						        Cena : <?php echo $rrr2; ?><br><br>

						        <form method="get" action="korpazakupovinu.php">
						          	<input type="hidden" name="idpro" value="<?php  echo $rrr7; ?>" size="9">
						          	<input type="hidden" name="idpartnera" value="<?php  echo $ridpartnera; ?>" size="9">
						          	<input type="hidden" name="vrednostflaga" value="<?php  echo $rflag1; ?>" size="9">
						          	<input type="hidden" name="istibrojracuna" value="<?php  echo $ristibrojracuna; ?>" size="9">
									<input type="submit" name="kupi" value="Kupi">
								</form>
							</td>

							<td style="width: 33.33%"> 
								<?php echo $rr0; ?> <br><br><br>

						        <?php $slika ="image/".$rr7."a.jpg";?>
						        <img src="<?php echo $slika; ?>" alt="" border="0" /><br><br><br>

						        <?php echo $rr1; ?><br><br><br>

						        Cena : <?php echo $rr2; ?> <br><br>
						        
						        <form method="get" action="korpazakupovinu.php">
						        	<input type="hidden" name="idpro" value="<?php  echo $rr7; ?>" size="9">
						        	<input type="hidden" name="idpartnera" value="<?php  echo $ridpartnera; ?>" size="9">
						        	<input type="hidden" name="vrednostflaga" value="<?php  echo $rflag1; ?>" size="9">
						        	<input type="hidden" name="istibrojracuna" value="<?php  echo $ristibrojracuna; ?>" size="9">
									<input type="submit" name="kupi" value="Kupi">
								</form>
							</td>

							<td style="width: 33.33%"> 
								<?php echo $r0; ?> <br><br><br>

						        <?php $slika ="image/".$r7."a.jpg";?>
						        <img src="<?php echo $slika; ?>" alt="" border="0" /> <br><br><br>

						        <?php echo $r1; ?> <br><br><br>
						        					        
						        Cena : <?php echo $r2; ?> <br><br>
						        
						        <form method="get" action="korpazakupovinu.php">
						        	<input type="hidden" name="idpro" value="<?php  echo $r7; ?>" size="9">
						        	<input type="hidden" name="idpartnera" value="<?php  echo $ridpartnera; ?>" size="9">
						        	<input type="hidden" name="vrednostflaga" value="<?php  echo $rflag1; ?>" size="9">
						        	<input type="hidden" name="istibrojracuna" value="<?php  echo $ristibrojracuna; ?>" size="9">
									<input type="submit" name="kupi" value="Kupi">
								</form>
					        </td>

						</tr> <br><br>	
					</table>

    				<?php
    				$kolonauredu=1;
    				# ovde se zavrsava uslo if broj kolona u redu =3
    			    } else {

    			    	if ($kolonauredu==1) {

							$rr0=$r0;
					        $rr1=$r1;
					        $rr2=$r2;
					        $rr3=$r3;
					        $rr4=$r4;
					        $rr7=$r7;
					    }
					    if ($kolonauredu==2) {

							$rrr0=$r0;
					        $rrr1=$r1;
					        $rrr2=$r2;
					        $rrr3=$r3;
					        $rrr4=$r4;
					        $rrr7=$r7;
					    }
					        $kolonauredu=$kolonauredu+1;

    			     }
    			}
    }# ovde se zavrsava citanje iz tabele while petlja
?>
 					<?php if ($kolonauredu>1 and $kolonauredu<3) {?> <!-- prikazuj tabelu ako u poslednjem redu ima 1 ili 2 proizvoda -->

 						<table <?php if ($kolonauredu<3) { ?> style="width: 33.33%"<?php  }  ?> style="width: 66.66%" > <!-- ako u poslednjem redu ima 1 proizvod tabela je 33% ako ima dva 66% -->
							<tr>
							
							<!-- isps za prvu kolonu -->	
								<?php if ($kolonauredu>3) { ?> 
								 	<td style="width: 33.33%"> <?php 
										echo $r0; ?> <br><br><br>

								        <?php $slika ="image/".$r7."a.jpg";?>
								        <img src="<?php echo $slika; ?>" alt="" border="0" /> <br><br><br>

								        <?php echo $r1; ?><br><br><br>

								        Cena : <?php echo $r2; ?> <br><br>
								        
								        <!-- ovde se zavrsava ispis za prvu kolonu -->
								        <form method="get" action="korpazakupovinu.php">
								        	<input type="hidden" name="idpro" value="<?php  echo $r7; ?>" size="9">
								        	<input type="hidden" name="idpartnera" value="<?php  echo $ridpartnera; ?>" size="9">
								        	<input type="hidden" name="vrednostflaga" value="<?php  echo $rflag1; ?>" size="9">
								        	<input type="hidden" name="istibrojracuna" value="<?php  echo $ristibrojracuna; ?>" size="9">
											<input type="submit" name="kupi" value="Kupi">
										</form>
						        	</td> 
						        <?php  } ?>
							
						    <!-- isps za drugu kolonu -->    
								<?php if ($kolonauredu>2) { ?> 
									<td style="width: 33.33%"> <?php 
										echo $rrr0; ?> <br><br><br>

								        <?php $slika ="image/".$rrr7."a.jpg";?>
								        <img src="<?php echo $slika; ?>" alt="" border="0" /> <br><br><br>

								        <?php echo $rrr1; ?><br><br><br>
								        
								        Cena : <?php echo $rrr2; ?> <br><br>
								        
								        <!-- ovde se zavrsava ispis za drugu kolonu -->
								        <form method="get" action="korpazakupovinu.php">
								        	<input type="hidden" name="idpro" value="<?php  echo $rrr7; ?>" size="9">
								        	<input type="hidden" name="idpartnera" value="<?php  echo $ridpartnera; ?>" size="9">
								        	<input type="hidden" name="vrednostflaga" value="<?php  echo $rflag1; ?>" size="9">
								        	<input type="hidden" name="istibrojracuna" value="<?php  echo $ristibrojracuna; ?>" size="9">
											<input type="submit" name="kupi" value="Kupi">
										</form>
									</td>
						        <?php } ?>

						    <!-- isps za trecu kolonu -->    
								<?php if ($kolonauredu>1) { ?> 
									<td style="width: 33.33%"> <?php 
										echo $rr0; ?> <br><br><br>

								        <?php $slika ="image/".$rr7."a.jpg";?>
								        <img src="<?php echo $slika; ?>" alt="" border="0" /> <br><br><br>

								        <?php echo $rr1; ?> <br><br><br>

								        Cena : <?php echo $rr2; ?> <br><br>
								        
								        <!-- ovde se zavrsava ispis za trecu kolonu -->
								        <form method="get" action="korpazakupovinu.php">
								        	<input type="hidden" name="idpro" value="<?php  echo $rr7; ?>" size="9">
								        	<input type="hidden" name="idpartnera" value="<?php  echo $ridpartnera; ?>" size="9">
								        	<input type="hidden" name="vrednostflaga" value="<?php  echo $rflag1; ?>" size="9">
								        	<input type="hidden" name="istibrojracuna" value="<?php  echo $ristibrojracuna; ?>" size="9">
											<input type="submit" name="kupi" value="Kupi">
										</form>
									</td > 
						        <?php } ?>

							</tr> <br><br>
						</table>
					<?php }?>
