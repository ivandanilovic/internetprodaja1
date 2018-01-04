<? 

$EmailKome="pera@gmail.com";
$EmailSubjek="ovo je email primer";

mail("$EmailKome", "$EmailSubjekt", "
Postovani,
 
Prijavili ste se kao korisnik n
da bi vase CLANSTVO BILO AKTIVIRANO 
MORATE KLIKNUTI NA DONJI LINK

$vrednost
 
Link ce Vam se tada otvoriti u novom Internet Exploreru ili 
vec nekom drugom Browseru koji koristite.

Ukoliko ne uspete, morate OBELEZITI LINK I KOPIRATI GA
U SVOJ Browser. 
 
Vas webmaster ");


//skraceno - mora postojati mail server
mail($mEmailKome, $xSubjektEmail, $xTekstEmail, $headers);
?>