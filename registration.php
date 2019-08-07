<?php
    require_once "conn.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sign-Up</title>
    <link rel="stylesheet" href="registration.css">

  </head>
  <body>


    <div class="Sign-UpBox">
			<img src="img/user.png" class="user">
			<h2>Sign-Up</h2>
			<form method="POST" action="insert.php">
        <p>Please fill in this form to create an account</p>
        <br>
        <label for="name"><b>User Name</b></label>
    <input type="text" placeholder="Enter User Name" name="name" required>

        <label for="email"><b>Email/Number</b></label>
    <input type="text" placeholder="Enter Email or Number" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>

				<input type="submit" name="" value="Submit">
				<a href="index.php">Back to home</a>
			</form>
		</div>
  </body>
</html>
