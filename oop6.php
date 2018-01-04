<?php  
spl_autoload_register(function ($class)  
 {  
 include $class.'.php';  
// puna putanja klasa na primer gornji red bi ovako u nekom hipoteticnom slucaju glaio 
// include '../../php/classes-objects/resource/'.$class.'.php'; 
// posto smo u istom folderu onda ne navodimo putanju
 });  
$print1 = new class1('red','Objektno orjentisano programiranje');   
$print2 = new class2('20px','Objektno orjentisano programiranje');   
?>  