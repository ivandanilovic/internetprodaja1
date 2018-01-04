<?php

include "OtvaranjeBaze.php";


$rNaziv=$_GET["naziv"];

$rOpis=$_GET["opis"];

$rCena=$_GET["cena"];

$rKolicina=$_GET["kolicina"];

$rAkcijskaCena=$_GET["akcijskaCena"];

$rIstaknutiProizvodi=$_GET["IstaknutProizvod"];

$rKategorija=$_GET["Kategorija"];



echo $rNaziv."<br>";

echo $rOpis."<br>";

echo $rCena."<br>";

echo $rKolicina."<br>";

echo $rAkcijskaCena."<br>";

echo $rIstaknutiProizvodi."<br>";

echo $rKategorija."<br>";




$result=mysql_query("insert proizvodi set Naziv='$rNaziv', Opis='$rOpis', Cena='$rCena', Kolicina='$rKolicina', AkcijskaCena='$rAkcijskaCena', IstaknutiProizvodi='$rIstaknutiProizvodi', Kategorija='$rKategorija'",$db);

?>