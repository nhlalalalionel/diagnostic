<?php
session_start();
include 'connection.php';

 $user=$_SESSION['firstname'];
 $ticket= $_GET['ticket']; 
 $name= $_GET['myfile'];



 $path = $_SERVER['DOCUMENT_ROOT']."/diagnostics/upload/$name"; 
 $path2 = $_SERVER['DOCUMENT_ROOT']."/diagnostics/bin/$name"; 

   
			$sql = "DELETE FROM upload WHERE ticket='$ticket'";
	
			if ($conn->query($sql) ===TRUE) {  // Checking if delete is sucessfull on the database
			echo "Record deleted successfully"; // Display sucessfull message if file is deleted from the database
			
			} else {
			die("Error deleting record: " . $conn->error);
              	// Display error message if file is not deleted from the database
			}
			
			$x=NULL;
			
			$sql2 ="UPDATE tickets SET job_card='$x' WHERE ticket= '$ticket'";
			
	    	 if($conn->query($sql2)===TRUE){
		        echo "Record deleted successfully"; // Display sucessfull message if file is deleted from the database
	         }else{
	        	echo "Error updating the record ".$conn->error;
	         }
			
			 
if(rename ("$path", "$path2")){   //move file to bin folder on the server

	header("Location:deletesuccess.php"); // if file move successfuly
}else{
	
	header("Location:delete_error.php");  // If errors occurs during moving file
}	


$conn->close(); // close connection
?>