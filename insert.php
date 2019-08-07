<?php
    require_once "conn.php";

    $name= $_POST["name"];
    $email= $_POST["email"];
    $pass= $_POST["pass"];


    $sql = "INSERT INTO signup (name, email, pass)
VALUES ('$name', '$email','$pass')";
if (mysqli_query($conn, $sql)) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
 ?>
