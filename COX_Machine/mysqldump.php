<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cox_machine"; // Specify the existing database name

// Path to save the SQL dump file
$outputFile = 'db/user_data.sql'; // Specify the desired path and filename

// Construct the command to export the database
$command = "mysqldump --user={$username} --password={$password} --host={$servername} {$dbname} > {$outputFile}";

// Execute the command
exec($command, $output, $exitCode);

if ($exitCode === 0) {
    echo "Database export successful. SQL file saved to {$outputFile}";
} else {
    echo "Error exporting database: " . implode("\n", $output);
}
?>
