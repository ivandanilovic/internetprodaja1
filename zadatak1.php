<?php 
$a=1;
while ($a<101) {
	
	if ($a%3==0 & $a%5==0) {
		echo "DevOps"."<br>";	
	}elseif($a%3==0){
		echo "Dev"."<br>";
	}else{
		if ($a%5==0) {
			echo "Ops"."<br>";
		}else{
		echo $a."<br>";
		}
	}
	$a++;
}
?>