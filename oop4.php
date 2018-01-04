<?php  
// Define a class  
 class MyClass  
 {  
	// Deklarisanje 3 privatne varijable  
	 private $font_size;  
	 private $font_color;  
	 private $string_value;  
	// Deklaracija konstruktorskog metoda koji preuzima 3 parametra  
	 function __construct($font_size,$font_color,$string_value)  
	 {  
		 $this->font_size = $font_size;  
		 $this->font_color = $font_color;  
		 $this->string_value = $string_value;  
	 }  
	// Deklaracija metoda koji stama prema zadatim vrednostima   
	 function customize_print()  
	 {  
	 	echo "<p style=font-size:".$this->font_size.";color:".$this->font_color.";>".$this->string_value."</p>";  
	 }
	 public function getFontSize()
	 {
	 	return font_size;
	 }
	 public function setFontSize($size)
	 {
	 	font_size = $size;
	 }
	 public function compareFontSize($other)
	 {
	 	return
	 		font_size // implicitno, podrazumijeva $this->font_size (može na ova načina)
	 		- $other->font_size; // eksplicitno, naglašeno $other->font_size
	 }   
 }  
// Kreiranje novog objekta koji ima 4 parametra  
 $f = new MyClass('20px','red','Objektno orjentisano programiranje');  
 $g = new MyClass('22px','red','Objektno orjentisano programiranje');  
// Poziv metoda za ispis stringa  
 echo $f->customize_print();
 // Ako jer font_size od g veći, povećati font_size f.
 if ($f->compareFontSize($g) < 0) {
 	$f->setFontSize($g->getFontSize());
}
