<?php  
// Define a class  
 class taster 
 {  
// Deklarisanje 3 privatne varijable  
 private $tip;  
 private $name;  
 private $value;  
 private $style;  
// Deklaracija konstruktorskog metoda koji preuzima 3 parametra  
 function __construct($type1,$name1,$value1,$style1)  
 {  
 $this->tip = $type1;  
 $this->name = $name1;  
 $this->value = $value1;  
 $this->style = $style1; 
 }  
// Deklaracija metoda koji stama prema zadatim vrednostima   
 function customize_print()  
 {  
 //echo "<p style=font-size:".$this->font_size.";color:".$this->font_color.";>".$this->string_value."</p>";  
 echo "<input type=".$this->tip." name=".$this->name." value=".$this->value." style=".$this->style.">";
 }   
 }  
// Kreiranje novog objekta koji ima 4 parametra  
 //$f = new MyClass('submit','submit','Otvori novi tiket','color: red');  
// Poziv metoda za ispis stringa  
 //echo $f->customize_print();  
 ?>  