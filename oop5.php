<?php  
// Deklaracija klase
class Myclass  
 {  

// Deklarisanje privatne varijabli

 private $font_size;  
 private $font_color;  
 private $string_value;  

// Deklaracija konstruktor metoda za prihvatanje 3 parametra u metodi customize_print() 
 function __construct($font_size,$font_color,$string_value)  
 {  
 $this->font_size = $font_size;  
 $this->font_color = $font_color;  
 $this->string_value = $string_value;  
 $this->customize_print();  
 }  
 
// Deklaracija metoda za customize print 
 function customize_print()  
 {  
 echo "<p style=font-size:".$this->font_size.";color:".$this->font_color.";>".$this->string_value."</p>";  
 }  
 }  
// Kreiranje prvog objekta   
 $a = new MyClass('30px','red','Objektno orjentisano programiranje');  
// Kreiranje drugog objekta
 $b = new MyClass('25px','blue','bjektno orjentisano programiranje');  
// Kreiranje treceg objekta  
 $c = new MyClass('20px','green','bjektno orjentisano programiranje');  
// Kreiranje cetvrtog objekta
 $d = new MyClass('15px','black','Objektno orjentisano programiranje');  
 ?> 