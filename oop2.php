<?php     
class Myclass  
{  
 public $font_size ="18px";  
 public $font_color = "blue";  
 public $string_name = "primer";  
 public function customize_print()  
 {  
 echo "<p style=font-size:".$this->font_size.";color:".$this->font_color.";>".$this->string_name."</p>";  
 }  
}  
$f = new MyClass;  
echo $f->customize_print();  
?>  