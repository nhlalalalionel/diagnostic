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
   <h4 style="color:white;float:left"> <?php echo "Welcome  : "  .$_SESSION['firstname']?> </h4><br>
  	<h1>UPDATE INFORMATION</h1>
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
	 
	 $change=$_POST['model'];
	 $id =$_SESSION['id'];
	 
	 if($_POST['role']=='name'){
		 
		$sql ="UPDATE client SET name='$change' WHERE id= '$id'";
	
	   if($conn->query($sql)===TRUE){
	
	   }else{
		echo "Error updating the record ".$conn->error;
	   }

	 }else if($_POST['role']=='contact_person'){
		 
		 $sql ="UPDATE client SET contact='$change' WHERE id= '$id'";
		 if($conn->query($sql)===TRUE){
		
	   }else{
		echo "Error updating the record ".$conn->error;
	   }
		 
		
	 }else if($_POST['role']=='email'){
		
	    $sql ="UPDATE client SET email='$change' WHERE id= '$id'";
		 if($conn->query($sql)===TRUE){
		
	   }else{
		echo "Error updating the record ".$conn->error;
	   }
		
		
	 }else if($_POST['role']=='phone'){
		 
		 $sql ="UPDATE client SET phone='$change' WHERE id= '$id'";
		 if($conn->query($sql)===TRUE){
		
	   }else{
		echo "Error updating the record ".$conn->error;
	   }
		 
	 }else{
		 
		 header("Location:update_notsuccess2.php");
	 }
	 
	 ?>

<h4><a href="main_menu.php" style ="color:white">You succesfully updated client information, please click here to return to main menu</a></h4>	 
	 
  	</div>
  </section>  <footer id="footer">
  	<p>DEVELOPED BY LIONEL AND DESIGNED BY MSQ DIAGNOSTICS TEAM</p>
  </footer>
</body>
</html>