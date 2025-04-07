<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "sherlocked";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database );

// Check connection
if (mysqli_connect_errno()) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();
 
?>