<?php
include 'connect.php';

$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id=$id";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully.";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
<a href="read.php">Back to list</a>
