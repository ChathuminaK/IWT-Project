<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'online_apartment_sales_system';

// Create a database connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>