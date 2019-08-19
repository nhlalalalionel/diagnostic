<?php

 if (!isset($_SERVER['HTTP_REFERER'])){
  header('Location: index.html');
  }
   
include 'connection.php';
session_start();

$serial = $_POST['serial'];
$_SESSION["serial"]=$serial;

$sql1 = "SELECT * FROM machine WHERE serial ='$serial'";
$result=$conn->query($sql1);

  if($result->num_rows>0){
	 header("Location:reallocation.php");  
  }else{
	 header("Location:no_record3.php");
   }

?>