<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="css/screen.css"> 
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script> 
  
   <script src="js/jquery.js"></script> 
   <script src="js/jquery.validate.js"></script>   
  
  <script type="text/javascript" src="js/javascript.js"></script>
  <meta http-equiv="refresh" content="900;url=index.html" />
  <title>MSQ DIAGNOSTICS</title>
  <?php
  session_start();
  if (!isset($_SERVER['HTTP_REFERER'])){
   header('Location: index.html');
   }
  ?>
</head>
<body>
  <header id="header">
   <h4 style="color:white;float:left"> <?php echo "Welcome  : "  .$_SESSION['firstname']?> </h4>
  	<h1>ENGINEER REGISTRATION</h1>
	 <h4><a href="index.html" style="color:white;float:left">logout</a></h4>
  </header>
  
  <div id="navigation">
      <ul>
        <li><a href="main_menu.php">Main Menu</a></li>
        <li><a href="main_menu_admin.php">Main Menu Admin </a></li>
      </ul>
    </div>
	<br>
  <section id="maincontent">
  	<div id="container2">
  		<?php


include'connection.php';

$name = $_POST['name'];
$surname = $_POST['surname'];
$tel= $_POST['tel'];
$email = $_POST['email'];
$password1 = $_POST['password1'];
$role = $_POST['role'];


// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
 
// Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


 $sql1 = "SELECT * FROM engineer WHERE email ='$email'|| firstname='$name'";
 

$result=$conn->query($sql1);
if($result->num_rows>0){
	
	header("Location:user_exist3.php");
}else{

 $sql = "INSERT INTO engineer(firstname, lastname,phone, email,password, role)
 VALUES ('$name', '$surname','$tel','$email','$password1','$role')";
 
 if ($conn->query($sql) === TRUE) {
	 
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

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


$mail->setFrom('nhlalala@akaciamedical.co.za');
$mail->addAddress($email);     // Add a recipient
              // Name is optional
$mail->addReplyTo('nhlalala@akaciamedical.co.za');


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

$mail->Subject ='MSQ Diagnostics New user';
$mail->Body    = 'Good day Colleague,<br><br> We would like to inform you that a profile has been created for you on MSQ diagnostics portal.Please see your credentials below. <br> Email : '.$email.' <br>Password :  '.$password1.'<br> Link : http://10.0.0.253/diagnostics/index.html <br><br>Thank you.<br>MSQ Diagnostics Team.';
$mail->AltBody = '';
  
  
  if(!$mail->send()) {
   echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
   } 
	

$conn->close();
}
?> 

<h4 style ="color:red ;text-align:center">You successfully register new user, see below the information..</h4>
<div style="overflow-x:auto;">
 <table width="100%" border="1">
    <tr>
    <td><h3>Firstname</h3></td>
    <td><h3>Secondname</h3></td>
	<td><h3>Phone</h3></td>
    <td><h3>Email Address</h3></td>
	<td><h3>Password</h3></td>
    </tr>
	
	<tr>
        <td><?php echo $name ?></td>
        <td><?php echo $surname?></td>
		<td><?php echo $tel?></td>
        <td><?php echo $email ?></td>
		<td><?php echo $password1?></td> 
    </tr>

 </table>
 </div>	
		
  	</div>
  </section>  <footer id="footer">
  	<p>DEVELOPED BY LIONEL AND DESIGNED BY MSQ DIAGNOSTICS TEAM</p>
  </footer>
</body>
</html>