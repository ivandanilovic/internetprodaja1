
<?php 
// $a=1;
// while ($a<101) {
	
// 	if ($a%3==0 & $a%5==0) {
// 		echo "DevOps"."<br>";	
// 	}elseif($a%3==0){
// 		echo "Dev"."<br>";
// 	}else{
// 		if ($a%5==0) {
// 			echo "Ops"."<br>";
// 		}else{
// 		echo $a."<br>";
// 		}
// 	}
// 	$a++;
// }
?>

<?php 
	
	// function factorial ($broj,$rezultat){
	// 	if($broj>0){
	// 		$rezultat=$rezultat*$broj;
	// 		$broj--;
	// 		factorial($broj,$rezultat);
	// 	}else{
	// 		echo $rezultat;
	// 	}
	// }

	// $rezultat=1;
	// factorial(5,$rezultat)

	// $rezultat=1;
	// function factorial ($broj){
	// 	if ($broj>0) {
	// 		$rezultat=$rezultat*$broj;
	// 		$broj--;
	// 		return $broj;
	// 	}else{
	// 		return $rezultat;
	// 	}
	// }

	// echo factorial(6);



 

 
// function factorial($broj){
 
//   if ($broj==0){
//     return 1;
//   }
//   $rezultat=($broj*factorial($broj-1));
//   return $rezultat;
// }
 
// echo factorial(5);
 



// $baz = array_merge_sorted($foo, $bar);
// echo $baz;

// function isPrime ($broj){
// 	if ($broj%2==0 || $broj%3==0 || $broj%5==0 || $broj%7==0) {
// 		echo "Composite";
// 	}else{
// 		echo "Prime";
// 	}
// }
// $a=1;
// while ($a<101) {
// 	echo $a. isPrime($a)."<br>";
// 	$a++;
// }


// $array1 = array("color" => "red", 2, 4);
// $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
// $result = array_merge($array1, $array2);
// print_r($result);










function array_merge_sorted( $foo, $bar)
{
	print_r($foo);
	echo "<br>";
	print_r($bar);
	echo "<br><br>";
    $baz = array_merge($foo, $bar);
    $baz = array_unique($baz);
    sort($baz);

    return $baz;
}
$foo = array(1, 2, 3, 5, 7);
$bar = array(1, 4, 6, 7, 8);
$baz = array_merge_sorted($foo, $bar);

print_r($baz);

// prints e.g. 'Current PHP version: 4.1.1'
echo 'Current PHP version: ' . phpversion();

// prints e.g. '2.0' or nothing if the extension isn't enabled
echo phpversion('tidy');
?>