<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $gmail = $_POST['gmail'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (name, gmail, password) VALUES ('$name', '$gmail', '$password')";
    if (mysqli_query($conn, $sql)) {
        echo "Record created successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<form method="POST">
    Name: <input type="text" name="name"><br>
    Gmail: <input type="email" name="gmail"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" value="Create">
</form>
