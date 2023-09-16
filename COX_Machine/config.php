<?php
// Database configuration settings
$servername = "localhost";
$username = "root"; // MySQL username (in this case, "root")
$password = ""; // MySQL password (empty for no password)
$dbname = "cox_machine"; // MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Database connection successful!";
}
?>
 