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
  	<h1>CREATE TICKET</h1>
	 <h4><a href="index.html" style="color:white;float:left">logout</a></h4>
  </header>
  
  <div id="navigation">
      <ul>
        <li><a href="main_menu.php">Main menu</a></li>
      </ul>
    </div>
	<br>
  <section id="maincontent">
  	<div id="container">
  		<?php


include'connection.php';

$reporter = $_POST['reporter'];
$problem = $_POST['problem'];
$serial= $_SESSION["serial"];

// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
 
// Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
   $frstName=$_SESSION["firstname"];
   $id=$_SESSION["id"];
   
   
   
   $sql1 = "SELECT * FROM engineer WHERE firstname ='$frstName'";
   $result=$conn->query($sql1);
   
   $row = $result->fetch_assoc();
   $id2=$row['id'];
   
   $status='pending';
   $date = date('Y-m-d');
   $opening_date = date('Y-m-d H:i:s');

 $sql = "INSERT INTO tickets(id,client_id,serial, reporter,problem,dates,opening_date,status)
 VALUES ('$id2','$id','$serial','$reporter','$problem','$date','$opening_date','$status')";
 

 
 if ($conn->query($sql) === TRUE) {
	 
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


 $sql2="SELECT * FROM client WHERE id='$id'";
 $result=$conn->query($sql2);
 $row = $result->fetch_assoc();

 $email=$row['email'];


 $sql3="SELECT ticket FROM tickets WHERE id='$id2' ORDER BY ticket DESC LIMIT 1";
 $result3=$conn->query($sql3);
 $row3 = $result3->fetch_assoc();
 
 $ticket=$row3['ticket'];

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
$mail->addAddress('nlhomu@gmail.com');     
$mail->addAddress($email);     // Add a recipient
              // Name is optional
$mail->addReplyTo('nlhomu@gmail.com');


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

$mail->Subject ='MSQ Diagnostics Ticket System';
$mail->Body    = 'Good day Client ,<br> <br>Thank you for contacting MSQ Diagnostics regarding your problem with the machine, a ticket has been created and an engineer has been assigned to your ticket. Your ticket number is : '.$ticket.', please use your ticket number as reference for this ticket.<br><br> Thank you.<br> MSQ Diagnostics Team';
$mail->AltBody = '';
  
  
  if(!$mail->send()) {
   echo 'Message could not be sent, please check your internet connection.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
   } else{
 
$conn->close();

?> 

<h4 style ="color:white">You successfully created a new ticket and email has been send to client.</h4>
<?php
}
?>
  </div>
  </section>  <footer id="footer">
  	<p>DEVELOPED BY LIONEL AND DESIGNED BY MSQ DIAGNOSTICS TEAM</p>
  </footer>
</body>
</html>