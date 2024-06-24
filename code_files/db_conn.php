<?php

$host = 'localhost:3307';
$user = 'root';
$password = '';
$database = 'test';

// Attempt to connect to MySQL
$conn = mysqli_connect($host, $user, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// If you reach this point, the connection was successful
//echo "Connected successfully to database!";
