<?php  
//Definisanje klase

class class2  
 {  
// Deklarisanje 2 privatne promenljive
 private $font_size;  
 private $string_value;  
// Deklarisanje konstruktora za prihvatanje 2 parametra 
 function __construct($font_size,$string_value)  
 {  
 $this->font_size = $font_size;  
 $this->string_value = $string_value;  
 $this->customize_print2();  
 }  
// Deklarisanje metoda za customize print   
 function customize_print2()  
 {  
 echo "<p style=font-size:".$this->font_size.";>".$this->string_value."</p>";  
 }  
 }  
?>