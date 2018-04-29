<?php
echo "Hello world!";
//Create Connection
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
//check connection
if($conn){
  echo "Connected Successfully";
} else {
  die("Connection failed: " . mysqli_connect_error());
}
?>
