<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$database   = "wt"; // Make sure this exists

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connection successful!!<br>";
}
?>
