<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "codingproject";

// SQL query to fetch data from the database
$sql = "SELECT * FROM users WHERE username = ?";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo "Username: " . htmlspecialchars($row['username']) . "<br>";
    // Add more fields as needed
}
?>
