<?php
// Database connection parameters
$host = 'sql205.infinityfree.com'; // database host
$username = 'if0_37552383'; // database username
$password = 'vUu78vWg4hmH'; // database password (empty for XAMPP by default)
$database = 'if0_37552383_sneakerhub'; // database name

// Create a connection
$con = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Optional: Set character set to UTF-8
mysqli_set_charset($con, 'utf8');

// You can now use $con to perform database operations