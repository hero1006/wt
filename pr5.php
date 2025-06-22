<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$database   = "me"; 

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connection successful!!<br>";
}

// Create the student table with correct column names
$sql = "
CREATE TABLE IF NOT EXISTS me (
    college_id INT AUTO_INCREMENT PRIMARY KEY,
    college_name VARCHAR(50) NOT NULL,
    intake INT NOT NULL,
    branch VARCHAR(30) NOT NULL
)";
$result1 = mysqli_query($conn, $sql);

if ($result1) {
    echo "Table created successfully<br>";
} else {
    echo "Table not created: " . mysqli_error($conn) . "<br>";
}

// Insert data (do NOT include college_id, let it auto-increment)
$sql = "INSERT INTO me (college_name, intake, branch)
        VALUES ('SVKM IOT', 69, 'IT')";

if (mysqli_query($conn, $sql)) {
    echo "Data inserted successfully.<br>";
} else {
    echo "Error inserting data: " . mysqli_error($conn) . "<br>";
}

// Fetch and display data
$sql = "SELECT * FROM me";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<h2>College Records</h2>";
    echo "<table border='1' cellpadding='10'>
            <tr>
                <th>College ID</th>
                <th>College Name</th>
                <th>Intake</th>
                <th>Branch</th>
            </tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>" . $row["college_id"] . "</td>
                <td>" . $row["college_name"] . "</td>
                <td>" . $row["intake"] . "</td>
                <td>" . $row["branch"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No records found.";
}
?>
