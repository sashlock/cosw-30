<style>
    table, td, th {
        border: 1px solid black;
    }
</style>
<?php
    $mostPopulous = array("New York, New York"=>8622698, 
    "Los Angeles, California"=>3999759, "Chicago, Illinois"=>2716450,
    "Houston, Texas"=>2312717, "Phoenix, Arizona"=>1626078, 
    "Philadelphia, Pennsylvania"=>1580863, "San Antonio, Texas"=>1511946,
    "San Diego, California"=>1419516, "Dallas, Texas"=>1341075,
    "San Jose, California"=>1035317, "Austin, Texas"=>950715, 
    "Jacksonville, Florida"=>892062, "San Francisco"=>884363, 
    "Columbus"=>879170, "Fort Worth"=>874168);
    
    echo "<table><th>The 15 Most Populous Cities as of July 1, 2017</th>";
    
    ksort($mostPopulous, SORT_STRING);
    foreach($mostPopulous as $cityState => $population) {
    echo "<tr><td>" . $cityState . "</td>" . " <td>" . $population . "</td></tr>";
}

    echo "</table>";
    echo "<p></p><table><th>The 15 Most Populous Cities as of July 1, 2017</th>";
    
    arsort($mostPopulous, SORT_NUMERIC);   
    foreach($mostPopulous as $cityState => $population) {
    echo "<tr><td>" . $cityState . "</td>" . " <td>" . $population . "</td></tr>";
}
     echo "</table>";
    
    echo "<p>Click here for Activity 1: Favorite Quote: <a href='quote.html'></ br><button>Activity One</button></a></p>";
?>