<?php 

$servername = "localhost";
$username = "urbanliv_faizan";
$password = "jugglerbhai1990";
$dbname = "urbanliv_gofresh";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>
