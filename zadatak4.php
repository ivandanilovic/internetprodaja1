<?php
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

// 1. Kako koristim verziju PHP 4.0. i apach server umesto (array $foo, array $bar) koristio sam ( $foo, $bar) i umesto kockastih zagrada ($foo = [1, 2, 3, 5, 7];) koristio sam obicne zagrade $foo = array(1, 2, 3, 5, 7);

// 2. Ne vidim bolje nacin resavanja ovog zadatka od datog resenja, pisanje sopstvenih funkcija bi bilo sporije od gotovih funkcija u PHP-u.
?>