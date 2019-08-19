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
  	<h1>SPARE PART</h1>
	 <h4><a href="index.html" style="color:white;float:left">logout</a></h4>
  </header>
  
  <div id="navigation">
      <ul>
        <li><a href="main_menu.php">Main Menu </a></li>
      </ul>
    </div>
	<br>
  <section id="maincontent">
  	<div id="container2">
  	<?php
	
	include'connection.php';
	if(isset($_POST['spare1'])&&($_POST['description1']) ){
	
	$spare1=$_POST['spare1'];
	$description1=$_POST['description1'];
	$date = date('Y-m-d H:i:s');
	$ticket=$_SESSION['ticket'];
	
	
//	$sql = "INSERT INTO spare(closing_date,ticket,spare1,description1,number,spare2,description2,spare3,description3,spare4,description4,spare5,description5)
 // VALUES ('$date','$ticket','$spare1','$description1','1','0','0','0','0','0','0','0','0')";
	
	$sql="UPDATE spare SET spare1='$spare1', description1='$description1', number='1', spare2= '0', description2= '0', spare3 ='0', description3='0', spare4='0', description4='0', spare5='0',description5='0'  WHERE ticket='$ticket'";
 
   if ($conn->query($sql) === TRUE) {
	 ?>
	 <h4 style ="color:white ;text-align:center">You successfully updated and closed this ticket</h4>
	 <?php
	
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
	
	}else if(isset($_POST['spare2'])&&($_POST['description2'])&&($_POST['spare22'])&&($_POST['description22'])){
	
	$spare2=$_POST['spare2'];
	$description2=$_POST['description2'];
	$spare22=$_POST['spare22'];
	$description22=$_POST['description22'];
	$date = date('Y-m-d H:i:s');
	$ticket=$_SESSION['ticket'];
	
	
	//$sql = "INSERT INTO spare(spare1,description1,number,spare2,description2,spare3,description3,spare4,description4,spare5,description5)
    //VALUES ('$date','$ticket','$spare2','$description2','2','$spare22','$description22','0','0','0','0','0','0')";
	
	$sql="UPDATE spare SET spare1='$spare2',description1='$description2', number='2', spare2= '$spare22', description2= '$description22', spare3 ='0', description3='0', spare4='0', description4='0', spare5='0',description5='0'  WHERE ticket='$ticket'";
 
   if ($conn->query($sql) === TRUE) {
	 ?>
	 <h4 style ="color:white ;text-align:center">You successfully updated and closed this ticket</h4>
	 <?php
	
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
	
		
	}else if(isset($_POST['spare3'])&&($_POST['description3'])&&($_POST['spare33'])&&($_POST['description33'])){
	
	$spare3=$_POST['spare3'];
	$description3=$_POST['description3'];
	$spare33=$_POST['spare33'];
	$description33=$_POST['description33'];
	$spare333=$_POST['spare333'];
	$description333=$_POST['description333'];
	$date = date('Y-m-d H:i:s');
	$ticket=$_SESSION['ticket'];
	
	
	//$sql = "INSERT INTO spare(closing_date,ticket,spare1,description1,number,spare2,description2,spare3,description3,spare4,description4,spare5,description5)
   // VALUES ('$date','$ticket','$spare3','$description3','3','$spare33','$description33','$spare333','$description333','0','0','0','0')";
   $sql="UPDATE spare SET spare1='$spare3', description1='$description3', number='3', spare2= '$spare33', description2= '$description33', spare3 ='$spare333', description3='$description333', spare4='0', description4='0', spare5='0',description5='0'  WHERE ticket='$ticket'";
   
 
   if ($conn->query($sql) === TRUE) {
	   ?>
	 <h4 style ="color:white ;text-align:center">You successfully updated and closed this ticket</h4>
	 <?php
	 
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
	
		
	}else if(isset($_POST['spare4'])&&($_POST['description4'])&&($_POST['spare44'])&&($_POST['description44'])){
	
	$spare4=$_POST['spare4'];
	$description4=$_POST['description4'];
	$spare44=$_POST['spare44'];
	$description44=$_POST['description44'];
	$spare444=$_POST['spare444'];
	$description444=$_POST['description444'];
	$spare4444=$_POST['spare4444'];
	$description4444=$_POST['description4444'];
	$date = date('Y-m-d H:i:s');
	$ticket=$_SESSION['ticket'];
	
	
	//$sql = "INSERT INTO spare(closing_date,ticket,spare1,description1,number,spare2,description2,spare3,description3,spare4,description4,spare5,description5)
    //VALUES ('$date','$ticket','$spare4','$description4','4','$spare44','$description44','$spare444','$description444','$spare4444','$description4444','0','0')";
	
	 $sql="UPDATE spare SET spare1='$spare4', description1='$description4', number='4', spare2= '$spare44', description2= '$description44', spare3 ='$spare444', description3='$description444', spare4='$spare4444', description4='$description4444', spare5='0',description5='0'  WHERE ticket='$ticket'";
 
   if ($conn->query($sql) === TRUE) {
	 ?>
	 <h4 style ="color:white ;text-align:center">You successfully updated and closed this ticket</h4>
	 <?php
	 
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
	
		
	}else if(isset($_POST['spare5'])&&($_POST['description5'])&&($_POST['spare55'])&&($_POST['description55'])){
	
	$spare5=$_POST['spare5'];
	$description5=$_POST['description5'];
	$spare55=$_POST['spare55'];
	$description55=$_POST['description55'];
	$spare555=$_POST['spare555'];
	$description555=$_POST['description555'];
	$spare5555=$_POST['spare5555'];
	$description5555=$_POST['description5555'];
	$spare55555=$_POST['spare55555'];
	$description55555=$_POST['description55555'];
	$date = date('Y-m-d H:i:s');
	$ticket=$_SESSION['ticket'];
	
	
	//$sql = "INSERT INTO spare(closing_date,ticket,spare1,description1,number,spare2,description2,spare3,description3,spare4,description4,spare5,description5)
    //VALUES ('$date','$ticket','$spare5','$description5','5','$spare55','$description55','$spare555','$description555','$spare5555','$description5555','$spare55555','$description55555')";
     $sql="UPDATE spare SET spare1='$spare5', description1='$description5', number='5', spare2= '$spare55', description2= '$description55', spare3 ='$spare555', description3='$description555', spare4='$spare5555', description4='$description5555', spare5='$spare55555',description5='$description55555'  WHERE ticket='$ticket'";
 
   if ($conn->query($sql) === TRUE) {
	   ?>
	 <h4 style ="color:white ;text-align:center">You successfully updated and closed this ticket</h4>
	 <?php
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
		
	}else{	
		
	}
	
	?>
	
  	</div>
  </section>  <footer id="footer">
  	<p>DEVELOPED BY LIONEL AND DESIGNED BY MSQ DIAGNOSTICS TEAM</p>
  </footer>
</body>
</html>