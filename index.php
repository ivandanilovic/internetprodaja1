
<!--<a href="unoskursnalista.html">unus kursne liste</a><br>
<a href="unoscet.html">unus cet</a><br>
<a href="unosnacinplacanja.html">unus nacin placanja</a><br>
<a href="unospartneri.html">unospartneri</a><br>
<a href="unnosporudzbine.html">unos porudzbine</a><br>
<a href="unosproizvodi.html">unos proizvodi</a><br>
<a href="unossredstvoplacanja.html">unos sredstvo placanja</a><br>
<a href="unoskursnalistaOdg.php">test</a><br> <br> <br> 



<a href="ispispartnera.php">ispis partnera</a><br>
<a href="maskaispisapartnera.html">maska ispis partnera</a> //-->
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
	<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
    $scope.showMe = false;
    $scope.myFunc = function() {
        $scope.showMe = !$scope.showMe;
    }
    
});
</script>
<!-- ne rade funkcije u isto vreme moze da radi ili prva ili druga -->
<script>
var app1 = angular.module('myApp1', []);
app1.controller('myCtrl1', function($scope) {
    $scope.showMe1 = false;
    $scope.myFunc1 = function() {
        $scope.showMe1 = !$scope.showMe1;
    }
});
</script>
</head>

<body>

<div ng-app="myApp" ng-controller="myCtrl">

<button ng-click="myFunc()">Klikni</button>

	<div ng-show="showMe">
    <h1>Linkovi</h1>
 
    <div><a href="ispispartnera.php">ispis partnera</a><br></div>
	<div><a href="maskaispisapartnera.html">maska ispis partnera</a><br></div>
	<div><a href="maskaispisproizvoda.php">ispis proizvoda</a><br></div>
	<div><a href="lagerlista.php">lagerlista</a><br></div>
	<div><a href="kupovina.php">kupovina</a><br></div>
	<div><a href="korisnickastrana.php">korisnicka strana</a><br></div>
	<div><a href="korisnickastranaadministrator.php">korisnicka strana administrator</a><br></div>
	<div><a href="prepisporudzbina.php">prepisporudzbina</a><br></div>
	<div><a href="cet.php">cet</a><br></div>
	<div><a href="primerifunkcija.php">primer funkcije</a><br></div>
	<div><a href="primeridatum.php">primer datum</a><br></div>
	<div><a href="zadaci.php">zadaci</a><br></div>
	<div><a href="testiranje.php">testiranje</a><br></div>
	<div><a href="czsok.html">czsok</a><br></div>
	<!-- <a href="korisnickastranaizmene.php">korisnicka strana</a><br>
	<!-- prosledjujem prolaz 0 na stranicu korisnickastrana.php -->
	<!-- <a href="korisnickastrana.php?prolaz=0">korisnicka strana</a><br> --> 
	</div>
</div>

<div ng-app="myApp1" ng-controller="myCtrl1">
<button ng-click="myFunc1()">Klikni</button>
	<div ng-show="showMe1">
    <h1>Linkovi</h1>
<!-- <table style="width: 100%">
	<tr>
		<td><a href="unoskursnalista.html">unus kursne liste</a></td>
		<td><a href="unoskursnalista.html">ispis kursne liste</a></td>
		<td><a href="unoskursnalista.html">izmena kursne liste</a></td>
		<td><a href="unoskursnalista.html">brisanje kursne liste</a></td>
	</tr>
	<tr>
		<td><a href="unoscet.html">unus cet</a></td>
		<td><a href="unoscet.html">ispis cet</a></td>
		<td><a href="unoscet.html">izmena cet</a></td>
		<td><a href="unoscet.html">brisanje cet</a></td>
	</tr>
	<tr>
		<td><a href="unosnacinplacanja.html">unus nacin placanja</a></td>
		<td><a href="unosnacinplacanja.html">ispis nacin placanja</a></td>
		<td><a href="unosnacinplacanja.html">izmena nacin placanja</a></td>
		<td><a href="unosnacinplacanja.html">brisanje nacin placanja</a></td>
	</tr>
	<tr>
		<td><a href="unospartneri.html">unos partneri</a></td>
		<td><a href="ispispartnera.php">ispis partnera</a></td>
		<td><a href="unospartneri.html">izmena partneri</a></td>
		<td><a href="unospartneri.html">brisanje partneri</a></td>
	</tr>
	<tr>
		<td><a href="unnosporudzbine.html">unos porudzbine</a></td>
		<td><a href="unnosporudzbine.html">ispis porudzbine</a></td>
		<td><a href="unnosporudzbine.html">izmena porudzbine</a></td>
		<td><a href="unnosporudzbine.html">brisanje porudzbine</a></td>
	</tr>
	
	<tr>
		<td><a href="unosproizvodi.html">unos proizvodi</a></td>
		<td><a href="ispisproizvodasvi.php">ispis proizvodi</a></td>
		<td><a href="unosproizvodi.html">izmena proizvodi</a></td>
		<td><a href="unosproizvodi.html">brisanje proizvodi</a></td>
	</tr>
	
	<tr>
		<td><a href="unossredstvoplacanja.html">unos sredstvo placanja</a></td>
		<td><a href="unossredstvoplacanja.html">ispis sredstvo placanja</a></td>
		<td><a href="unossredstvoplacanja.html">izmena sredstvo placanja</a></td>
		<td><a href="unossredstvoplacanja.html">brisanje sredstvo placanja</a></td>
	</tr>
</table> -->
	<div><a href="ispispartnera.php">ispis partnera</a><br></div>
	<div><a href="maskaispisapartnera.html">maska ispis partnera</a><br></div>
	<div><a href="maskaispisproizvoda.php">ispis proizvoda</a><br></div>

</div>
</div>




<p>Otvori meni za linkove</p>




<br><br><br>



</body>
</html>