<style type="text/css">
    .error {
            font-weight: bold;
            color: #ff0000;
            font-family: 'Oswald', sans-serif;
            }
</style>


<?php

// Create a shorthand for the form data:
// Validate the first_name:
if (!empty($_REQUEST['first_name'])) {
$first_name = $_REQUEST['first_name'];
} else {
$first_name = NULL;
echo '<p class="error">You forgot to
 enter your first name!</p>';
}

if (!empty($_REQUEST['last_name'])) {
$last_name = $_REQUEST['last_name'];
} else {
$last_name = NULL;
echo '<p class="error">You forgot to
 enter your last name!</p>';
}

if (!empty($_REQUEST['email'])) {
$email = $_REQUEST['email'];
} else {
$email = NULL;
echo '<p class="error">You forgot to
 enter your email!</p>';
}

$gender = $_REQUEST['gender'];
$age = $_REQUEST['age'];
$interests = $_REQUEST['interests'];
$contribution = $_REQUEST['contribution'];
$subscribe = $_REQUEST['subscribe'];
$comments = $_REQUEST['comments'];




// If all required fields are filled out then print:
if ($first_name && $last_name && $email) {
    echo "<p>Thank you for filling out our contact form, $first_name. The information we recieved is:</p>";
    echo "<p> First Name: $first_name </p>";
    echo "<p> Last Name: $last_name </p>";
    echo "<p> Email Address: $email</p>";
    echo "<p> Gender: $gender </p>";
    echo "<p> Age: $age </p>";
    
// Interests Array Output

    if(empty($interests))
	    {
	    echo("You didn't select any interests.");
	  } else
	  {
	    $N = count($interests);
	    echo("You selected $N interests: ");
	    for($i=0; $i < $N; $i++)

	    {
	      echo($interests[$i] . " ");
	    }
	  }
// Contribution Amount	  
    echo "<p> Contribution Amount:$$contribution </p>";
    
// Email Subscribe
    if(empty($subscribe))
	  {
	    echo("You did not subscribe to our mailing-list. You made Godzilla sad. :'(");
	  }
	  else
	  { echo "You subscribed to the mailing list. You made Godzilla happy!";
	  }

    echo "<p> Comments: $comments</p>";
    }   else { // Missing form value.
        echo '<p class="error">A required field is empty. Please go <a href="contact.html">back</a> and fill out the form again.</p>';
    }
?>