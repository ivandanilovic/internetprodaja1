<?php
include "OtvaranjeBaze.php";



$result=mysql_query("SELECT Naziv, Opis, Cena, Kolicina, AkcijskaCena, IstaknutiProizvodi, Kategorija FROM `proizvodi`",$db);

    while ($myrow=mysql_fetch_row($result)) {
	            $r0=$myrow[0];
	            $r1=$myrow[1];
	            $r2=$myrow[2];
	            $r3=$myrow[3];
	            $r4=$myrow[4];

?>	            
				<table>
					<tr>
						<td>NAZIV</td>
						<td>CENA</td>
						<td>KOLICINA</td>
						
					</tr>

					<?php while ( $r3>-1) {?>
						<tr>
						<td><?php echo "pera"; ?></td>
						</tr>
					<?php } ?>
					
				</table>	
			             <!-- echo $r0."  -  ".$r1."  - ".$r2. "  - ". $r3 ."  - ".   $r4."<br>"; -->

	<?php }; ?>
