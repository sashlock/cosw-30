<?php

// Add the database connection
include('database.php');



    /*$first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $retypepassword = $_POST['retypePassword'];
    */
    $first_name = "";
    $last_name = "";    
    $password = "";
    $email = "";
    $password = "";
    $retypePassword = "";
    
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['first_name'])) {
	$first_name = $_POST['first_name'];	
    } else {
        $first = "<p class='text-danger'>Please enter a first name.</p>";
    } 
    
    if (!empty($_POST['last_name'])) {
	$last_name = $_POST['last_name'];	
    } else {
        $last = "<p class='text-danger'>Please enter a last name.</p>";
    }
    
    if (!empty($_POST['email'])) {
	$email = $_POST['email'];	
    } else {
        $mail = "<p class='text-danger'>Please enter an email address.</p>";
    }
    
    if (!empty($_POST['password'])) {
	$password = $_POST['password'];	
    } else {
        $pw = "<p class='text-danger'>Please enter a password.</p>";
    }
    
    if (!empty($_POST['retypePassword'])) {
	$retypePassword = $_POST['retypePassword'];	
    } else {
        $rpw = "<p class='text-danger'>Please retype your password.</p>";
    }
    
    if ($password == $retypePassword) {
	$validatePassword = $password;	
    } else {
        $match = "<p class='text-danger'>Passwords do not match.</p>";
    }
    
    
    // If everything is validated, INSERT new user into database
    if ($first_name && $last_name && $email && $validatePassword) {
    $sql = "INSERT INTO USER_ASHLOCK (first_name, last_name, email, password) 
    VALUES ('$first_name','$last_name','$email','$password')";
    mysqli_query($connection, $sql);
    $create = "<p class='text-success'>New user created.</p>";
    } else {
        //$error = "<p class='text-danger'>Please fill out the form correctly.</p>";
    }
    }
?>

<!doctype html>
<html>
<head>
    <title>My First CRUD</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
  <style>
    body {
        background-color: #fba90a;
        background-image: url("https://www.transparenttextures.com/patterns/argyle.png");
        margin-top: 1em;
        margin-bottom: 1em;
    }
    h1,h2 {
        color: #1430B8;
    }
    .borders {
        border: 5px solid #183BF0;
        border-radius: 5px;
        background-color: #F7EBD4;
        padding: 1em;
    }
    
      
  </style>
</head>
<body>

    <div class="row text-center">
    <div class="col-md-1"></div>
    <div class="col-md-4 text-center borders">
        
    <h1>Registration</h1>
    <form action="crud.php" method="POST">
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name"><br>
        <?php echo($first) ?>

        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name"><br>
        <?php echo($last) ?>
        
        <label for="email">Email</label>
        <input type="email" id="email" name="email"><br>
        <?php echo($mail) ?>

        <label for="password">Password</label>
        <input type="password" id="password" name="password"><br>
        <?php echo($pw) ?>
        
    <!--Add a second password input so the user has to retype their password -->
        
        <label for="retypepassword">Re-type Password</label>
        <input type="password" id="retypepassword" name="retypePassword"><br>
        <?php echo($rpw) ?>
        <?php echo($match) ?>
        <?php echo($create) ?>
        
        <button type="submit" name="submit">Register</button>
    </form>
    </div>
    <div class="col-md-1"></div>
    <div class="text-center col-md-5 borders">
    <h2>All Registered Users</h2>
<?php


    // Create your query
$query = "SELECT * FROM USER_ASHLOCK;";
// Run your query
$result = mysqli_query($connection, $query);
// Check if the database returned anything
if($result) {
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
        // Output the results
        //echo 'New user added to the database.';
        //print_r($rows);
} else {
    // Output an text-danger

}

?>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach ($rows as $row) {
            echo'<tr>
                <td>'.$row['first_name'].'</td>
                <td>'.$row['last_name'].'</td>
                <td>'.$row['email'].'</td>
                <td>'.$row['password'].'</td>
            </tr>';
            }
            ?>
        </tbody>
    </table>
    </div>
    <div class="col-md-1"></div>
    </div>

</body>
</html>

