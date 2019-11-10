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
    $rpw = "";
    $match = "";
    $create = "";
    $mail = "";
    $pw = "";
    $first = "";
    $last = "";
    
    // added mysqli_real_escape_string in an effort to help prevent SQL injection
    
    
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['first_name'])) {
	$first_name = mysqli_real_escape_string($connection, $_POST['first_name']);	
    } else {
        $first = "<p class='text-danger'>Please enter a first name.</p>";
    } 
    
    if (!empty($_POST['last_name'])) {
	$last_name = mysqli_real_escape_string($connection, $_POST['last_name']);	
    } else {
        $last = "<p class='text-danger'>Please enter a last name.</p>";
    }
    
    if (!empty($_POST['email']) && filter_var(($_POST['email']), FILTER_VALIDATE_EMAIL)) {
	$email = mysqli_real_escape_string($connection, $_POST['email']);	
    } else {
        $mail = "<p class='text-danger'>Please enter an email address.</p>";
    }
    
    if (!empty($_POST['password'])) {
	$password = mysqli_real_escape_string($connection, $_POST['password']);	
    } else {
        $pw = "<p class='text-danger'>Please enter a password.</p>";
    }
    
    if (!empty($_POST['retypePassword'])) {
	$retypePassword = mysqli_real_escape_string($connection, $_POST['retypePassword']);
    } else {
        $rpw = "<p class='text-danger'>Please retype your password.</p>";
    }
    
    if ($password == $retypePassword) {
	$validatePassword = mysqli_real_escape_string($connection, $password);	
    } else {
        $match = "<p class='text-danger'>Passwords do not match.</p>";
    }
    
    
    // If everything is validated, INSERT new user into database
    if ($first_name && $last_name && $email && $validatePassword) {
    $sql = "INSERT INTO USER_ASHLOCK (first_name, last_name, email, password) 
    VALUES ('$first_name','$last_name','$email','$validatePassword')";
    mysqli_query($connection, $sql);
    $create = "<p class='text-success'>New user created.</p>";
    } else {
        //$error = "<p class='text-danger'>Please fill out the form correctly.</p>";
    }
    }
?>

<?php

include('header.php');
?>
<body>
    <h1 class="text-center borders">The Argyle Club</h1>
    <div class="container">
    
    <div class="row text-center">

    <div class="col-lg-4 col-md-12 text-center borders">
        
    <h2>Registration</h2>
    <form action="crud.php" method="POST">
        <label for="first_name"><b>First Name: </b></label>
        <input type="text" id="first_name" name="first_name" value="<?php echo $first_name ?>"><br>
        <?php echo($first) ?>

        <label for="last_name"><b>Last Name: </b></label>
        <input type="text" id="last_name" name="last_name" value="<?php echo $last_name ?>"><br>
        <?php echo($last) ?>
        
        <label for="email"><b>Email: </b></label>
        <input type="email" id="email" name="email" value="<?php echo $email ?>"><br>
        <?php echo($mail) ?>

        <label for="password"><b>Password: </b></label>
        <input type="password" id="password" name="password" value="<?php echo $password ?>"><br>
        <?php echo($pw) ?>
        
    <!--Add a second password input so the user has to retype their password -->
        
        <label for="retypepassword"><b>Retype Password: </b></label>
        <input type="password" id="retypepassword" name="retypePassword" value="<?php echo $retypePassword ?>"><br>
        <?php echo($rpw) ?>
        <?php echo($match) ?>
        <?php echo($create) ?>
        
        <button type="submit" name="submit">Register</button>
    </form>
    <br>
    <img src="https://i.imgur.com/ZyQe3lZ.jpg width="200px" class="rounded img-fluid" alt="image of pomeranian in argyle socks">
    </div>

    <div class="text-center col-lg-7 col-md-12 borders table-responsive">
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
    
    <table class="table table-bordered table-sm">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Edit</th>
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
                <td><a href="update.php?id='.$row['user_id'].'">Edit</a></td>
            </tr>';
            }
            ?>
        </tbody>
    </table>
    </div>

    </div>

    </div>
    
<?php
include('footer.php');
?>
</body>
</html>

