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
  	<h1>MACHINE REGISTRATION</h1>
	 <h4><a href="index.html" style="color:white;float:left">logout</a></h4>
  </header>
  
  <div id="navigation">
      <ul>
        <li><a href="main_menu.php">Back </a></li>
      </ul>
    </div>
	<br>
  <section id="maincontent">
  	<div id="container2">
    <?php
	include'connection.php';
	
	$serial=$_SESSION['serial'];
	$id=$_SESSION['id'];
	
	$sql ="UPDATE machine SET id='$id' WHERE serial= '$serial'";
	 if($conn->query($sql)===TRUE){
	
	   }else{
		echo "Error updating the record ".$conn->error;
	   }
	?>
	
	<h4 style ="color:blue">Your changes has been sucessfully updated <a href="main_menu.php" style ="color:white">click here</a> to return to main menu</h4><br> 
  	</div>
  </section>  <footer id="footer">
  	<p>DEVELOPED BY LIONEL AND DESIGNED BY MSQ DIAGNOSTICS TEAM</p>
  </footer>
</body>
</html>