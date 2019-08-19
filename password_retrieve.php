<?php

session_start();
 if (!isset($_SERVER['HTTP_REFERER'])){
   header('Location: index.html');
   }
   
include 'connection.php';


    $email=$_POST['email'];

	$sql="SELECT firstname,password FROM engineer WHERE email='$email'";

	$result = $conn->query($sql);

if ($result->num_rows > 0){
	
  $row = $result->fetch_assoc();
  
    require 'PHPMailerAutoload.php';
    $mail = new PHPMailer;
  
 // $row=$row['email'];
 
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'nlhomu@gmail.com';                 // SMTP usernamecxs
$mail->Password = '201003388';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;       


$mail->setFrom('nlhomu@gmail.com');
$mail->addAddress($email);     // Add a recipient
              // Name is optional
$mail->addReplyTo($email);


//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->smtpConnect(
    array(
        "ssl" => array(
            "verify_peer" => false,
            "verify_peer_name" => false,
            "allow_self_signed" => true
        )
    )
);

$mail->Subject ='MSQ Diagnostics Password Retrieve';
$mail->Body    = 'Good day Colleague,<br><br> Your password is as follow  :  '.$row['password'].'.<br><br> Thank you<br>MSQ Diagnostics Team.';
$mail->AltBody = '';
  
  
  if(!$mail->send()) {
   echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
   } 
	
	
	


header("Location:password_success.php");

}else{
	
	header("Location:user_notexist.php");
	
}



?>