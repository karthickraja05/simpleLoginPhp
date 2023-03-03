<?php 

$mysqli = new mysqli("localhost","root","user@123","app");

// Check connection
if ($mysqli -> connect_errno) {
      echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
      exit();
}


?>
