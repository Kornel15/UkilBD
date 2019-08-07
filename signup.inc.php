<?php

if (isset($_POST['submit'])) {

	include_once "conn.php";

	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pass = mysqli_real_escape_string($conn, $_POST['pass']);

	//Error handlers
    //Check for empty fields
    if (empty($name) || empty($email) || empty($pass)) {
    	header("Location: ../registration.php?signup=empty");
    	exit();
    } else {
    	//Check if input characters are valid
    	if (!preg_match("/^[a-zA-Z]*$/", $name) {
    		header("Location: ../registration.php?signup=invalid");
    		exit();
    	} else {
    		//Check if email is valid
    		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    			header("Location: ../registration.php?signup=email");
    			exit();
    		}

    			if ($resultCheck > 0) {
    				header("Location: ../registration.php?signup=usertaken");
    				exit();
    			} else {
    				//Hashing the password
    				$hashedPwd = password_hash($pass, PASSWORD_DEFAULT);
    				//Insert the user into the database
    				$sql = "INSERT INTO signup (user_name, user_email, user_pass) VALUES ('$name', '$email', '$hashedPwd');";
    				mysqli_query($conn, $sql);
    				header("Location: ../registration.php?signup=success");
    			}
    		}

    }

} else {
	header("Location: ../registration.php");
	exit();
}
