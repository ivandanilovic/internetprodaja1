
<!DOCTYPE html>
<HTML>
<HEAD>
<SCRIPT type="text/javascript">
function unetiBrojeve(){
var m, n, rezultat;
m = document.getElementById('username').value;
n = document.getElementById('password').value;
rezultat = (m)+(n);
// document.getElementById("rezultat").innerHTML = 'Logovanje: ' + rezultat;
}
</SCRIPT>
</HEAD>
<BODY>
<p>Unesite username i password: </b> </p>
<form method="get" action="korisnickastranaadministrator.php">
Unesi username: <input type="text" name="username"><br><br>
Unesi password: <input type="password" name="password"><br><br>
<p id="rezultat"> Logovanje</p>
<input type='submit' onclick=' unetiBrojeve()' value='Login'/>
</form>
</BODY>
</HTML>



