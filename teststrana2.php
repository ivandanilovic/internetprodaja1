<?php 
include "OtvaranjeBaze.php";

$rusername=htmlspecialchars($username);
?> ovo je username <?php echo $rusername ?> <br> <?php;

$rpassword=htmlspecialchars($password);
?> ovo je password <?php echo $rpassword; ?> <br> <?php 

$result=mysql_query("SELECT IdPartnera, Username, Password FROM `partneri`",$db);
$nasaokorisnika=0;
   
    while ($myrow=mysql_fetch_row($result)) {
    		$r0=$myrow[0];
    		$r1=$myrow[1];
    		$r2=$myrow[2];
    		if ($rusername==$r1) {
    			if ($rpassword==$r2) {
    				    				echo "pozdrav 1" ?> <br> <?php ;
    				$prolaz=1;
    			}
    		}
    		
	    }
	    if ($prolaz!=1) {
	    	echo "netacan username ili password";
	    }
	    if ($prolaz==1){
	    	
	    	header("Location: http://www.google.com/"); 
	    }
?>								
<iframe name="I1" src="kupovina.php" width="937" height="435">
Your browser does not support inline frames or is currently configured not to display inline frames.
</iframe>

				<form method="get" action="teststrana2.php" >
					Unesi username: <input type="text" name="username"><br><br>
					Unesi password: <input type="password" name="password"><br><br>
					<input type="submit" name="submit">
				</form>