<?php
// Database credentials
$hostname = "your_hostname";
$username = "your_username";
$password = "your_password";
$database = "your_database";

// Establish a connection to the MySQL database
$connection = new mysqli($hostname, $username, $password, $database);

// Check the connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>
