<?php
$host = "localhost"; // If using XAMPP or local server
$username = "root";  // Default username for XAMPP
$password = "";      // Default password for XAMPP (leave empty)
$database = "travel_db"; // Name of your database

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully"; // Uncomment this to test the connection
?>