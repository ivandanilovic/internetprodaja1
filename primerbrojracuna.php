<?php
$mDatum=getdate();
$godina=$mDatum['year'];
$mesec=$mDatum['mon'];
$dan=$mDatum['mday'];
                 $Odda= date('Y-m-d',mktime (0,0,0,$mesec,$dan,$godina));

    $mDatum=getdate();
	$godina=$mDatum['year'];
	$mesec=$mDatum['mon'];
	$dan=$mDatum['mday'];
	$sat=$mDatum['hours'];
	$minut=$mDatum['minutes'];
	$sekund=$mDatum['seconds'];
	$usekundama=($sat*3600) + ($minut*60) + $sekund;
    $ukukonbr=29000;
    srand ((double) microtime() * 1234567);
	$kontbroj1 = rand(1,$ukukonbr);
    $ukukonbr=29000;
    srand ((double) microtime() * 1234567);
	$kontbroj2 = rand(1,$ukukonbr);
	$kontrbroj=$usekundama . '-' . $kontbroj1 . '-' . $kontbroj2 . '-' . $dan . $mesec . '-' . $godina;
	echo $kontrbroj
?>