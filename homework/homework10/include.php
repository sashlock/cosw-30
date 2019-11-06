<?php
    include 'database.php';

    /*$first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $retypepassword = $_POST['retypePassword'];
    */
    if (!empty($_POST['first_name'])) {
	$first_name = $_POST['first_name'];	
    } else {
        echo "<p class='text-danger'>Please enter a first name.</p>";
    } 
    
    if (!empty($_POST['last_name'])) {
	$last_name = $_POST['last_name'];	
    } else {
        echo "<p class='text-danger'>Please enter a last name.</p>";
    }
    
    if (!empty($_POST['email'])) {
	$email = $_POST['email'];	
    } else {
        echo "<p class='text-danger'>Please enter an email address.</p>";
    }
    
    if (!empty($_POST['password'])) {
	$password = $_POST['password'];	
    } else {
        echo "<p class='text-danger'>Please enter a password.</p>";
    }
    
    if (!empty($_POST['retypePassword'])) {
	$retypePassword = $_POST['retypePassword'];	
    } else {
        echo "<p class='text-danger'>Please retype your password.</p>";
    }
    
    if ($password == $retypePassword) {
	$validatePassword;	
    } else {
        echo "<p class='text-danger'>Passwords do not match.</p>";
    }
    
    
    // If everything is validated, INSERT new user into database
    if ($first_name && $last_name && $email && $validatePassword) {
    $sql = "INSERT INTO USER_ASHLOCK (first_name, last_name, email, password) 
    VALUES ('$first_name','$last_name','$email','$password')";
    mysqli_query($connection, $sql);
    } else {
        echo "<p class='text-danger'>Please fill out the form correctly.</p>";
    }
    header("Location: crud.php")
?>