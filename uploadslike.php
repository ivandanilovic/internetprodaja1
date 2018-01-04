<?

include "OtvaranjeBaze.php";

$korisnickoime=$_GET["UserName"];
$lozinka=$_GET["LogLozinka"];
$akcija=$_GET["akcija"];
$Meni=$_GET["Meni"];
$opis=$_GET["opis"];
$opisen=$_GET["opisen"];
$sifra=$_GET["sifra"];
$cenaDin=$_GET["cenaDin"];
$ArtiklNaziv=$_GET["ArtiklNaziv"];
$cenaEUR=$_GET["cenaEUR"];


#########################################################
$broj_polja = 30; // broj polja za upload fajlova
//$path = "galerija/g2data/albums/"; // path do direktorija gdje ce se uploadovati fajlovi (na pocetak i kraj staviti / )
$path = "galerija/"; // path do direktorija gdje ce se uploadovati fajlovi (na pocetak i kraj staviti / )


if ($upload) {
	$imaga=0;
    if (empty($_FILES["fajl_1"]['name'])) {
	   $imaga=1;
	};
$_FILES["fajl_1"]['name']=$korisnickoime."-".$_FILES["fajl_1"]['name'];
//$_FILES["fajl_1"]['name']=$_FILES["fajl_1"]['name'];
$imeSlike=$_FILES["fajl_1"]['name'];	
Echo "Preneli ste sliku :";
echo $_FILES["fajl_1"]['name'];
move_uploaded_file($_FILES["fajl_1"]['tmp_name'], $path . $_FILES["fajl_1"]['name']);
//echo "prolazi-";
//echo $path;
if ($imaga==1) {
}
else {
chmod($path . $_FILES["fajl_1"]['name'], 0644);
	if ($akcija==2) {
		$mDatum=getdate();
		$godina=$mDatum['year'];
		$mesec=$mDatum['mon'];
		$dan=$mDatum['mday'];
                 $Odda= date('Y-m-d',mktime (0,0,0,$mesec,$dan,$godina));
    // $result=mysql_query("INSERT prodavnica SET naziv='$imeSlike', sifra='$sifra', ArtiklNaziv='$ArtiklNaziv', cenaDIN='$cenaDin', cena='$cenaEUR', meni='$Meni', opis='$opis', opisen='$opisen', datum='$Odda' ",$db);
		};
};
};
#########################################################
			
?>
<form action="<? echo $PHP_SELF ?>" method="post" enctype="multipart/form-data" name="form">
      
  <table width="100%" border="0" cellspacing="3" cellpadding="0">
    <tr>
      <td width="82%">Sifra:
              <input type="text" name="sifra" size="15" tabindex="1">
            </td>
    </tr>
    <tr>
      <td width="82%">Naziv artikla:
              <input type="text" name="ArtiklNaziv" size="30" tabindex="1">
            </td>
    </tr>
    <tr>
      <td width="82%">Cena u dinarima
              <input type="text" name="cenaDin" size="15" tabindex="1">
            </td>
    </tr>
    <tr>
      <td width="82%">Cena u EUR:
              <input type="text" name="cenaEUR" size="15" tabindex="1">
            </td>
    </tr>
    
    <tr>
      <td width="82%">Unesite tekst na SRPSKOM koji se prikuzuje uz sliku:<br>

            <textarea rows="7" name="opis" cols="20"></textarea></td>
    </tr>
    <tr>
      <td width="82%">Unesite tekst na ENGLESKOM koji se prikuzuje uz sliku:<br>

            <textarea rows="7" name="opisen" cols="20"></textarea></td>
    </tr>
    <tr>
      <td width="82%">Izaberi meni u kom ce se prikazivati slika:
            <select size="1" name="Meni">
            <?
	$result1=mysql_query("SELECT id, naziv  FROM `meni` ORDER BY id DESC",$db);
    while ($myrow1=mysql_fetch_row($result1)) {
	            $er0=$myrow1[0];
	            $er1=$myrow1[1];
            ?>
            <option><? echo $er1; ?></option>
            <?
        };
            ?>
            </select></td>
    </tr>
    <tr>
      <td width="82%">Izaberite sliku:<input name="fajl_1" type="file" id="fajl"></td>
    </tr>
    <tr>
      <td colspan="2">
      <input type="hidden" name="UserName" value="<? echo $korisnickoime; ?>" style="font-family: AbsaraSansTF-Light; font-size: 8pt">
      <input type="hidden" name="LogLozinka" value=<? echo $lozinka; ?> size="4" style="font-family: AbsaraSansTF-Light; font-size: 8pt">
      <input type="hidden" name="akcija" value="2" size="4" style="font-family: AbsaraSansTF-Light; font-size: 8pt">
      <input name="upload" type="submit" id="upload" value="     OK     " style="font-size: 8pt; color: #000000"></td>
    </tr>
  </table>
	  
</form>
