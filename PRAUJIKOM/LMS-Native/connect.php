<?php
$host_connect = "localhost"; // Database host
$database_connect = "manajemen_modul"; // Database name
$username_connect = "root"; // Database username
$password_connect = ""; // Database password

// Create connection
$connect = mysqli_connect($host_connect, $username_connect, $password_connect, $database_connect);

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
