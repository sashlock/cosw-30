<?php
 function addtwo($a = 0, $b = 0)
 {
 return ($a + $b);
 }
 $value1 = $_POST['value1'];
 $value2 = $_POST['value2'];

 echo $value1 . " + " . $value2 . " = ";
 echo addtwo($value1+$value2);
 ?>

