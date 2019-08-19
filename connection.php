<?php
//session_start();

  if (!isset($_SERVER['HTTP_REFERER'])){
   header('Location: index.html');
   }
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname ="diagnostic";

//$user = $_SESSION['firstname'];

// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
 
// Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


?>