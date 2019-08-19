<?php
session_start();
 if (!isset($_SERVER['HTTP_REFERER'])){
   header('Location: index.html');
   }
include 'connection.php';


$File_Name=$_FILES["myFile"]["name"] ;
$File_type=$_FILES["myFile"]["type"] ;
$File_size=$_FILES["myFile"]["size"];
$_FILES["myFile"]["tmp_name"] ;
$error= $_FILES["myFile"]["error"];

$date = date('Y-m-d H:i:s');


if (!empty($_POST['description'])) {
       $description=$_POST['description'];
        }

$user=$_SESSION['firstname'];
$ticket=$_SESSION['ticket'];

define("UPLOAD_DIR", "C:\\xampp\htdocs\diagnostics\upload\ ");

if (!empty($_FILES["myFile"])) {
    $myFile = $_FILES["myFile"];

    if ($myFile["error"] !== UPLOAD_ERR_OK) {
        echo "<p>An error occurred.</p>";
		
		switch ($error) {
        case UPLOAD_ERR_OK:
            $response = 'There is no error, the file uploaded with success.';
            break;
        case UPLOAD_ERR_INI_SIZE:
            $response = 'The uploaded file exceeds the upload_max_filesize directive in php.ini.';
            break;
        case UPLOAD_ERR_FORM_SIZE:
            $response = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.';
            break;
        case UPLOAD_ERR_PARTIAL:
            $response = 'The uploaded file was only partially uploaded.';
            break;
        case UPLOAD_ERR_NO_FILE:
            $response = 'No file was uploaded.';
            break;
        case UPLOAD_ERR_NO_TMP_DIR:
            $response = 'Missing a temporary folder. Introduced in PHP 4.3.10 and PHP 5.0.3.';
            break;
        case UPLOAD_ERR_CANT_WRITE:
            $response = 'Failed to write file to disk. Introduced in PHP 5.1.0.';
            break;
        case UPLOAD_ERR_EXTENSION:
            $response = 'File upload stopped by extension. Introduced in PHP 5.2.0.';
            break;
        default:
            $response = 'Unknown upload error';
            break;
    }
 
    echo $response;
}	     
    }

    // ensure a safe filename
    $name = preg_replace("/[^A-Z0-9._-]/i", " ", $myFile["name"]);
	
		

    
    // don't overwrite an existing file
    $i = 0;
    $parts = pathinfo($name);
    while (file_exists(UPLOAD_DIR . $name)) {
		
		header("Location:upload_error.php");
       // $i++;
      //  $name = $parts["filename"] . " " . $i . "." . $parts["extension"];
	
    }
	$name = $myFile["name"];
	
	$sql = "INSERT INTO upload(uploader,date,filename,description,ticket)
    VALUES ('$user','$date','$File_Name', '$description','$ticket')";
		
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	exit();
}

$x='yes';

   $sql ="UPDATE tickets SET job_card='$x' WHERE ticket= '$ticket'";
   
		 if($conn->query($sql)===TRUE){
		
	   }else{
		echo "Error updating the record ".$conn->error;
	   }
		
    // preserve file from temporary directory
    $success = move_uploaded_file($myFile["tmp_name"],
        UPLOAD_DIR . $name);
		
    if (!$success) { 
        echo "<p>Unable to save file.</p>";
        exit;
    }
	else{
		
		header("Location:upload_success.php");
	
    // set proper permissions on the new file
    chmod(UPLOAD_DIR . $name, 0644);
}

?>