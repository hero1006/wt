<?php
include 'connect.php';

$id = $_GET['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $gmail = $_POST['gmail'];
    $password = $_POST['password'];

    $sql = "UPDATE users SET name='$name', gmail='$gmail', password='$password' WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Fetch old data
$sql = "SELECT * FROM users WHERE id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<form method="POST">
    Name: <input type="text" name="name" value="<?= $row['name'] ?>"><br>
    Gmail: <input type="email" name="gmail" value="<?= $row['gmail'] ?>"><br>
    Password: <input type="password" name="password" value="<?= $row['password'] ?>"><br>
    <input type="submit" value="Update">
</form>
