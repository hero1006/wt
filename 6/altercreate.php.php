<?php
include 'connect.php';
if ($_SERVER["REQUEST_METHOD"]=="POST")
{
    
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';


    $sql="INSERT INTO users (name,email,password) VALUES('$name','$email','$password')";

    if (mysqli_query($conn,$sql)){
        echo"record created successfully";
    }
    else{
        echo"Error:".mysqli_error($conn);
    }
    
}
?>
<form method="POST">
Name:<input type="text"name="Name"><br>
Email:<input type="email"name="Email"><br>
Password:<input type="password"name="password"><br>
<input type ="submit" value="Create">
</form