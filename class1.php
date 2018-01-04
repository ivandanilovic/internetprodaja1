<?php  
//Definisanje klase
class class1  
 {  
// Deklarisanje 2 privatne promenljive
 private $font_color;  
 private $string_value;  
// Deklarisanje konstruktora za prihvatanje 2 parametra 
 function __construct($font_color,$string_value)  
 {  
 $this->font_color = $font_color;  
 $this->string_value = $string_value;  
 $this->customize_print1();  
 }  
// Deklarisanje metoda za customize print   
 function customize_print1()  
 {  
 echo "<p style=color:".$this->font_color.";>".$this->string_value."</p>";  
 }   
 }  
?>  