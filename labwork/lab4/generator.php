<?php

    $numParagraphs = $_POST['paragraphs'];
    $text = $_POST['text'];
    
    $textExplode = explode(' ', $text); //converts string to an arry
 
    shuffle($textExplode);
    
/*    foreach($textExplode as $key => $value) {
        echo "<p>$key Value: $value</p>";
    }
*/    
    

    //use the implode function to turn it back into a string
    $textImplode = implode(' ', $textExplode);
    
    for($i = 0; $i < $numParagraphs; $i++) {
    // output a paragraph
    echo "<p>$textImplode</p>";
    }

    
    /* $text = "Every day is taco ipsum tuesday. Tacos for breakfast, lunch and dinner. Shrimp tacos are tasty tacos! How bout a gosh darn quesadilla? 
    Um, Tabasco? No thanks, do you have any Cholula? 50 cent tacos! I’ll take 30. Ooh, with diced onions and a pinch of cilantro. I think I’ve overdosed on tacos. 
    CARNE ASADA!! Give me tacos, or give me death. Add in a few el Pastor with guac and diced onions. These tacos are lit 🔥. Say taco one more time. 
    Carne asada on corn tortillas."; */


?>