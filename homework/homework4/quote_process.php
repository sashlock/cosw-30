<style>
    @import url('https://fonts.googleapis.com/css?family=Raleway|Turret+Road&display=swap');
    
    li, p {
        list-style: none;
        padding: .25em;
        font-family: 'Raleway', sans-serif;
    }
    h1 {
        font-family: 'Turret Road', cursive;
    }
</style>

<?php
    $quote = $_POST['quote'];
    
    $textExplode = explode(' ', $quote); //converts string to an arry
    $textImplode = implode("<li></li>", $textExplode); //array into string
    
    
    if(str_word_count($quote) < 5) {
        echo "<p>Please go back and enter at least five words.</p>";
        echo "<p>Click here to try again: <a href='quote.html'></ br><button>back to the form!</button></a></p>";
    } 
    
    else {
    echo "<h1>This is your quote as a list:</h1>";
    
    $textLength = count($textExplode);
    
    for($i = 0; $i < $textLength; $i++) {
        echo "<li>",$textExplode[$i],"</li>";
    }
    echo "Total words: ",$textLength;
    
    echo "<h1>This is your quote in ascending order:</h1>";
    sort($textExplode);
    $textLength = count($textExplode);
    for($i = 0; $i < $textLength; $i++) {

        echo "<li>",$textExplode[$i],"</li>";
    }

    echo "<h1>This is your quote in descending order:</h1>";
    rsort($textExplode);
    $textLength = count($textExplode);
    for($i = 0; $i < $textLength; $i++) {

        echo "<li>",$textExplode[$i],"</li>";
    } 
    
    array_push($textExplode,"neko","inu","kitsune");
    echo "<h1>This is your quote with three new words added at the end:</h1>";
    $textLength = count($textExplode);
    for($i = 0; $i < $textLength; $i++) {

        echo "<li>",$textExplode[$i],"</li>";
    }
    echo "Total words: ",$textLength;

    
    $textShort = array_slice($textExplode,3);
    echo "<h1>This is your quote with the first three words removed:</h1>";
    $shortLength = count($textShort);
    for($i = 0; $i < $shortLength; $i++) {

        echo "<li>",$textShort[$i],"</li>";
    }
    echo "Total words: ",$shortLength;
    
    
    echo "<p>Click here to try a new quote: <a href='quote.html'></ br><button>back to the form!</button></a></p>";
    
    }
    
    
    
    /*echo "Total words: ", count("<li></li>", $textExplode);
    
    
    echo "<h1>Here is a list from your original quote:</h1>
    <ul> $textImplode </ul>";
    echo "Total words: ", count("<li></li>", $textExplode);
    */
?>