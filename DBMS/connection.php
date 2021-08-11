<?php
$conn = mysqli_connect("localhost", "root", "", "crud");
  
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " 
        . $conn->connect_error);
}
?>