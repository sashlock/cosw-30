<?php

 
 $value1 = $_POST['value1'];
 $value2 = $_POST['value2'];
 $operator = $_POST['value3'];
 
?>
 


<html>
 <head>
  <title>COSW30 - Homework 7</title>
   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

   <!-- jQuery library -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

   <!-- Popper JS -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

   <!-- Latest compiled JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
 </head>
 <body>
  <div>
   <h1>The Most <del>Powerful</del> Basic Input/Output Machine Ever Created</h1>
  </div>
  <div>
   <form action="functions.php" method="post">
    
    <div>
     <label for="input1">Number no. 1</label>
     <input type="number" name="value1" />
    </div>
   
    <div>
     <label for="input2">Number no. 2</label>
     <input type="number" name="value2" />
    </div>
    
    <div>
     <label for="input3">Operator</label>
     <select name="value3" id="operator">
      <option value="sum">Add (+)</option>
      <option value="difference">Subtract (-)</option>
      <option value="product">Multiply (*)</option>
      <option value="quotient">Divide (/)</option>
     </select>
    </div>
    
    <div>
     <label for="calculate">Calculate that #&*@, yo!</label>
     <input type="submit" value="calculate"/>
    </div>

   </form>
  </div>
  

<?php

if ($operator == "sum") {
        echo $value1 . " + " . $value2 . " = ";
        echo sum($value1 + $value2);
} elseif ($operator == "difference") {
        echo $value1 . " - " . $value2 . " = ";
        echo difference($value1 - $value2);
} elseif ($operator == "product") {
        echo $value1 . " x " . $value2 . " = ";
        echo product($value1 * $value2);
} elseif ($operator == "quotient") {
        echo $value1 . " / " . $value2 . " = ";
        echo quotient($value1 /= $value2);
} else {
    echo "";
}

 function sum($a, $b) {
 return ($a + $b);
 }
 function difference($a, $b) {
 return ($a - $b);
 }
 function product($a, $b) {
  return ($a*$b);
 }
 function quotient($a, $b) {
  return ($a/=$b);
 }

/*
function calculate($value1, $value2) { 
     if ($operator == "sum") {
        echo $value1 . " + " . $value2 . " = ";
        return ($value1 + $value2);
    } else if ($operator == "difference") {
        echo $value1 . " - " . $value2 . " = ";
        return ($value1 - $value2);
    } else if ($operator == "product") {
        echo $value1 . " x " . $value2 . " = ";
        return ($value1*$value2);
    } else if ($operator == "quotient") {
        echo $value1 . " / " . $value2 . " = ";
        return ($value1/$value2);
    } else {
    echo "please go back and select an operator";
    }}

    calculate();
*/

?>   
 </body>
</html>

