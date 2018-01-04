<?php
function factorial($broj){
 
  if ($broj==0){
    return 1;
  }
  $rezultat=($broj*factorial($broj-1));
  return $rezultat;
}
 
echo factorial(5);
?>