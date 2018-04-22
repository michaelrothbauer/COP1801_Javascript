<?php
$servername = "localhost";
$username = "root";
$password = "BEy4QyieUUj5";
$dbname = "photogdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
