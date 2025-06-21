<?php
include 'connect.php';

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

echo "<table border='1'>
<tr><th>ID</th><th>Name</th><th>Gmail</th><th>Password</th><th>Actions</th></tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['gmail']}</td>
        <td>{$row['password']}</td>
        <td>
            <a href='update.php?id={$row['id']}'>Edit</a> |
            <a href='delete.php?id={$row['id']}'>Delete</a>
        </td>
    </tr>";
}
echo "</table>";
?>
