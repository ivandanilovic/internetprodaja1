<!DOCTYPE html>
<html>
<body>

<p>Creating a JavaScript Object.</p>

<p id="demo"></p>

<script>
var person = {ImePrezime:"Pera", username:"pera", password:123, email:"pera@gmail.com"};

document.getElementById("demo").innerHTML = person.ImePrezime + " --- " + person.username + " -- "+ person.password +" -- "+ person.email ;
</script>

</body>
</html>

{
"employees":[
    {"firstName":"John", "lastName":"Doe"}, 
    {"firstName":"Anna", "lastName":"Smith"},
    {"firstName":"Peter", "lastName":"Jones"}
]
}