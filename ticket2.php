<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport1" content="width=device-width,initial-scale=1">
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
  	<h1>TICKET UPDATE</h1>
	 <h4><a href="index.html" style="color:white;float:left">logout</a></h4>
  </header>
  
  <div id="navigation">
      <ul>
        <li><a href="main_menu.php">Main Menu</a></li>
      </ul>
    </div>
	<br>
  <section id="maincontent1">
  	<div id="container2">
  		
<?php


include'connection.php';
//
if(isset($_POST['updates'])){
	
$updates = $_POST['updates'];
$status = $_POST['status'];
$name=$_SESSION['firstname'];
$ticket=$_SESSION['ticket'];

// Create connection
  $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
 
// Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

   $date = date('Y-m-d H:i:s');
   
   
   
  $sql="SELECT * FROM tickets WHERE ticket='$ticket'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  $id =$row['id'];
  $client_id=$row['client_id'];
  


 $sql = "INSERT INTO updates(ticket,id,client_id,updates,engineer,date)
 VALUES ('$ticket','$id','$client_id','$updates','$name','$date')";
 
 if ($conn->query($sql) === TRUE) {		 
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



if($status=='yes'){
	
$sql2="UPDATE tickets SET status='close' WHERE ticket='$ticket'";


	$sql3="SELECT client_id FROM tickets WHERE ticket ='$ticket'";
	$result3=$conn->query($sql3);
	$row3 = $result3->fetch_assoc();
    $id=$row3['client_id'];
	  
	$sql4="SELECT email FROM client WHERE id ='$id'";
    $result4=$conn->query($sql4);
	$row4 = $result4->fetch_assoc();
    $email=$row4['email'];
	
	require 'PHPMailerAutoload.php';
    $mail = new PHPMailer;
  
 
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'nlhomu@gmail.com';                 // SMTP usernamecxs
$mail->Password = '201003388';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;       

$mail->setFrom('nlhomu@gmail.com');   
$mail->addAddress($email);       // Add a recipient
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

$mail->Subject ='MSQ Diagnostics Closing Ticket notification';
$mail->Body    = 'Good day Client,<br><br>We would like to inform you that your ticket number :  '.$ticket.' has been closed succesfully. Please log another call should you experience any problem.<br><br> Thanks you.<br>MSQ Diagnostics Team';
$mail->AltBody = '';
  
  
  if(!$mail->send()) {
   echo 'Message could not be sent.';
    echo $email;
    echo 'Mailer Error: ' . $mail->ErrorInfo;
   } 
 
 if ($conn->query($sql2) === TRUE) {
} else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}
	
}else{
	
	header("Location:update_complete.php");	
}

 $sql3 = "INSERT INTO spare(closing_date,ticket)
 VALUES ('$date','$ticket')";
 
 if ($conn->query($sql3) === TRUE) {

} else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}

 

}
?> 

<h4 style ="color:white ;text-align:center">You successfully closed this ticket and email has been send to client.</h4>
<h4 style ="color:white ;text-align:center">How many spare part did you used?</h4>
<div id="container">
  		<div id="formpane1">
  			<div id="signinbox">
  		    <form action="#" id="signinform"method="post">
			<label for="password">SELECT SPARE USED </label>
            <select type="text" name="spare" id="address" class="txtfield" tabindex="2" autocomplete="off"> 
		    <option value="spare" ></option>
			  <option>0</option>
              <option>1</option>
			  <option>2</option>
              <option>3</option>
			  <option>4</option>
              <option>5</option>
            </select>
            <input type="submit" name="loginbtn" id="submitlogin" value="SUBMIT" class="btn" tabindex="3">
  			</form>
  			</div>
  		</div>
		</div>
		
	<?php

	
  if(isset($_POST["spare"]))
 {
	$spare=$_POST['spare'];	
	
	
	if($_POST['spare']=='0'){
		
		header("Location:spare_part.php");
		
	} else if($_POST['spare']=='1'){
		?>
			<div id="formpanel">
  			<div id="signinbox">
			
  		    <form action="spare_part.php" id="signinform"method="post">
			
			<label for="username">Spare Name </label>
            <input type="text" name="spare1" id="name" class="txtfield" tabindex="4" autocomplete="off" required>
			
			<label for="username">Part Number</label>
            <input type="text" name="description1" id="contact" class="txtfield" tabindex="4" autocomplete="off" required>
			        
            <input type="submit" name="loginbtn" id="submitlogin" value="SUBMIT" class="btn" tabindex="3">
  			</form>
  			</div>
  		</div>
		
		
	<?php	
		
		
	
	}else if($_POST['spare']=='2'){
		
			?>
			<div id="formpanel">
  			<div id="signinbox">
			
  		    <form action="spare_part.php" id="signinform"method="post">
			
			<label for="username">Spare 1 Name </label>
            <input type="text" name="spare2" id="name" class="txtfield" tabindex="4" autocomplete="off" required>
			
			<label for="username">Part Number 1</label>
            <input type="text" name="description2" id="contact" class="txtfield" tabindex="4" autocomplete="off" required>
			        
			<label for="username">Spare Name 2</label>
            <input type="text" name="spare22" id="name" class="txtfield" tabindex="4" autocomplete="off" required>
			
			<label for="username">Part Number 2</label>
            <input type="text" name="description22" id="contact" class="txtfield" tabindex="4" autocomplete="off" required>		
			
            <input type="submit" name="loginbtn" id="submitlogin" value="SUBMIT" class="btn" tabindex="3">
  			</form>
  			</div>
  		</div>
		
		
	<?php	
		
		
	}else if($_POST['spare']=='3'){
		
			?>
			<div id="formpanel">
  			<div id="signinbox">
			
  		    <form action="spare_part.php" id="signinform"method="post">
			
			<label for="username">Spare Name 1 </label>
            <input type="text" name="spare3" id="name" class="txtfield" tabindex="4" autocomplete="off" required>
			
			<label for="username">Part Number 1</label>
            <input type="text" name="description3" id="contact" class="txtfield" tabindex="4" autocomplete="off" required>
			        
			<label for="username">Spare Name 2 </label>
            <input type="text" name="spare33" id="name" class="txtfield" tabindex="4" autocomplete="off" required>
			
			<label for="username">Part Number 2</label>
            <input type="text" name="description33" id="contact" class="txtfield" tabindex="4" autocomplete="off" required>

			<label for="username">Spare Name 3</label>
            <input type="text" name="spare333" id="name" class="txtfield" tabindex="4" autocomplete="off" required>
			
			<label for="username">Part Number 3</label>
            <input type="text" name="description333" id="contact" class="txtfield" tabindex="4" autocomplete="off" required>
			       
            <input type="submit" name="loginbtn" id="submitlogin" value="SUBMIT" class="btn" tabindex="3">
  			</form>
  			</div>
  		</div>
		
		
	<?php	
		
	}else if($_POST['spare']=='4'){
		
			?>
			<div id="formpanel">
  			<div id="signinbox">
			
  		    <form action="spare_part.php" id="signinform"method="post">
			
			<label for="username">Spare Name 1</label>
            <input type="text" name="spare4" id="name" class="txtfield" tabindex="4" autocomplete="off" required>
			
			<label for="username">Part Number 1</label>
            <input type="text" name="description4" id="contact" class="txtfield" tabindex="4" autocomplete="off" required>
			        
			<label for="username">Spare Name 2 </label>
            <input type="text" name="spare44" id="name" class="txtfield" tabindex="4" autocomplete="off" required>
			
			<label for="username">Part Number 2</label>
            <input type="text" name="description44" id="contact" class="txtfield" tabindex="4" autocomplete="off" required>

			<label for="username">Spare Name 3</label>
            <input type="text" name="spare444" id="name" class="txtfield" tabindex="4" autocomplete="off" required>
			
			<label for="username">Part Number 3</label>
            <input type="text" name="description444" id="contact" class="txtfield" tabindex="4" autocomplete="off" required>
			
			<label for="username">Spare Name 4</label>
            <input type="text" name="spare4444" id="name" class="txtfield" tabindex="4" autocomplete="off" required>
			
			<label for="username">Part Number 4</label>
            <input type="text" name="description4444" id="contact" class="txtfield" tabindex="4" autocomplete="off" required>
			       
            <input type="submit" name="loginbtn" id="submitlogin" value="SUBMIT" class="btn" tabindex="3">
  			</form>
  			</div>
  		</div>
		
		
	<?php	
			
	}else if($_POST['spare']=='5'){
		
			?>
			<div id="formpanel">
  			<div id="signinbox">
			
  		    <form action="spare_part.php" id="signinform"method="post">
			
			<label for="username">Spare Name 1 </label>
            <input type="text" name="spare5" id="name" class="txtfield" tabindex="4" autocomplete="off" required>
			
			<label for="username">Part Number 1</label>
            <input type="text" name="description5" id="contact" class="txtfield" tabindex="4" autocomplete="off" required>
			        
			<label for="username">Spare Name 2</label>
            <input type="text" name="spare55" id="name" class="txtfield" tabindex="4" autocomplete="off" required>
			
			<label for="username">Part Number 2</label>
            <input type="text" name="description55" id="contact" class="txtfield" tabindex="4" autocomplete="off" required>

			<label for="username">Spare Name 3</label>
            <input type="text" name="spare555" id="name" class="txtfield" tabindex="4" autocomplete="off" required>
			
			<label for="username">Part Number 3</label>
            <input type="text" name="description555" id="contact" class="txtfield" tabindex="4" autocomplete="off" required>
			
			<label for="username">Spare Name 4</label>
            <input type="text" name="spare5555" id="name" class="txtfield" tabindex="4" autocomplete="off" required>
			
			<label for="username">Part Number 4</label>
            <input type="text" name="description5555" id="contact" class="txtfield" tabindex="4" autocomplete="off" required>
			
			<label for="username">Spare Name 5 </label>
            <input type="text" name="spare55555" id="name" class="txtfield" tabindex="4" autocomplete="off" required>
			
			<label for="username">Part Number 5</label>
            <input type="text" name="description55555" id="contact" class="txtfield" tabindex="4" autocomplete="off" required>
			       
            <input type="submit" name="loginbtn" id="submitlogin" value="SUBMIT" class="btn" tabindex="3">
  			</form>
  			</div>
  		</div>	
	<?php	
		
		
	}else{	
	}
	
 }
?>	
  	</div>
  </section>  <footer id="footer">
  	<p>DEVELOPED BY LIONEL AND DESIGNED BY MSQ DIAGNOSTICS TEAM</p>
  </footer>
</body>
</html>