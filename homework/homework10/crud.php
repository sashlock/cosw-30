<?php
// Add the database connection
include('database.php');


/*
*   CHECK IF THE FORM HAS BEEN SUBMITTED AND INSERT
*   NEW USER INTO THE DATABASE
*/
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $retypepassword = $_POST['retypePassword'];
    
    $insert_query = "INSERT INTO USER_ASHLOCK (first_name, last_name, email, password) 
    VALUES ('$first_name', '$last_name', '$email', '$password');";
    //$result = mysql_query($connection, $insert_query);
    
        // Validating inputs:
        if (!empty($_REQUEST['first_name'])) {
        $first_name = $_REQUEST['first_name'];
        } else {
        $first_name = NULL;
        echo '<p class="text-danger">You forgot to
         enter your first name!</p>';
        }
        
        if (!empty($_REQUEST['last_name'])) {
        $last_name = $_REQUEST['last_name'];
        } else {
        $last_name = NULL;
        echo '<p class="text-danger">You forgot to
         enter your last name!</p>';
        }
        
        if (!empty($_REQUEST['email'])) {
        $email = $_REQUEST['email'];
        } else {
        $email = NULL;
        echo '<p class="text-danger">You forgot to
         enter your email!</p>';
        }
        
        if (!empty($_REQUEST['password'])) {
        $password = $_REQUEST['password'];
        } else {
        $password = NULL;
        echo '<p class="text-danger">You forgot to
         enter a password!</p>';
        }

        if (($_REQUEST['password']) != ($_REQUEST['retypePassword'])) {
        echo '<p class="text-danger">Your passwords do not match!</p>';
        }
        
        /*$first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $retypepassword = $_POST['retypePassword'];*/


}


//  QUERY THE DATABASE AND STORE ALL USERS INTO A VARIABLE




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
</head>
<body>
    <div>
        <div class="text-center">
    
    <h1>Create a New User</h1>
    <form action="crud.php" method="POST">
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name"><br>

        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name"><br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email"><br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password"><br>
        
        <label for="retypepassword">Re-type Password</label>
        <input type="password" id="retypepassword" name="retypePassword"><br>

        <!--Add a second password input so the user has to retype their password -->

        <button type="submit" name="submit">Register</button>
    </form>
    </div>
    <div class="text-center">
    <h2>Output a List of Users</h2>
<?php

    // Create your query
$query = "SELECT * FROM USER_ASHLOCK";
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

    echo 'error entering new user';
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
    </div>
</body>
</html>


