<?php
include 'connection.php';

session_start();



 
	$email=$_POST['email'];
 
	$password=$_POST['password'];

	$sql="SELECT role,firstname FROM engineer WHERE email='$email' AND password='$password'";

	$result = $conn->query($sql);

	$admin = "admin";
//	echo $email;
//	echo $password;

if ($result->num_rows > 0) {
    // output data of each row
	
      $row = $result->fetch_assoc();
		if($admin == $row["role"]){
		 
			$_SESSION["firstname"]=$row['firstname'];
				header("Location:main_menu_admin.php");
	
				}else{
					$_SESSION["firstname"]=$row['firstname'];
						header("Location:main_menu.php");
	}
	}					else{
		
						header("Location:indexerror.php");
		
		
	}

?>