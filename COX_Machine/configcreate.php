<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cox_machine"; // Specify the existing database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL statement to create the 'user_data' table if it doesn't exist
$sql_create = "
CREATE TABLE IF NOT EXISTS user_data (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone_number VARCHAR(20) NOT NULL,
)";

if ($conn->query($sql_create) === TRUE) {
    echo "Table 'user_data' created or already exists.";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close connection
$conn->close();
?>
