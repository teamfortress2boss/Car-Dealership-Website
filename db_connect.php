<?php
// Database configuration
$servername = 'localhost';
$username = 'root';
$password = 'Begonethot1';
$database = 'car_dealership';

// Create connection
$connection = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$connection) {
    die('Connection failed: ' . mysqli_connect_error());
}
?>
