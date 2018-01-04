<?php
function isPrime ($broj){
	if ($broj%2==0 || $broj%3==0 || $broj%5==0 || $broj%7==0) {
		echo "Composite";
	}else{
		echo "Prime";
	}
}
echo isPrime(73);
?>