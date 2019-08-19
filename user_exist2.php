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
        <li><a href="reg_client_form.php">Back </a></li>
      </ul>
    </div>
	<br>
	
	 <?php
	$_SESSION['serial'];
	$_SESSION['id'];
	?>
  <section id="maincontent">
  	<div id="container2">
  		<h4><a href="reg_client_form.php" style ="color:white ;padding: 0px 0px 0px 200px">Machine with the same serial number exist,please click to try again...!</a></h4>
   
	<marquee scrollamount="10"
 direction="left"
 behavior="scroll">


	 MSQ DIAGNOSTICS...
<img src="images/medical2.jpg" height = '200px'/>
</marquee>
  	</div>
  </section>  <footer id="footer">
  	<p>DEVELOPED BY LIONEL AND DESIGNED BY MSQ DIAGNOSTICS TEAM</p>
  </footer>
</body>
</html>