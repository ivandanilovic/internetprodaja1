<?php 

$mDatum=getdate();
$godina=$mDatum['year'];
$mesec=$mDatum['mon'];
$dan=$mDatum['mday'];

echo $mDatum ."<br>";
echo $godina ."<br>";
echo $mesec ."<br>";
echo $dan ."<br>";
$godinadani=$mDatum['yday'];
echo $godinadani."<br>";
                 


                 $SekOdda=mktime (0,0,0,$mesec,$dan,$godina)-86400;

                 echo $SekOdda."<br>";

				
                 $Odda= date('Y-m-d',$SekOdda);
                 echo $Odda."<br>";
                 
                 $Doda= date('Y-m-d',mktime (0,0,0,$mesec,$dan,$godina));
                 echo $Doda."<br>";
?>