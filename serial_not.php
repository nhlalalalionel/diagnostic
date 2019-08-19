<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport1" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="css/screen.css"> 
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script> 
  
   <script src="js/jquery.js"></script> 
   <script src="js/jquery.validate.js"></script>   
  
  <script type="text/javascript" src="js/javascript.js"></script>
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
  	<h1>NO RECORD</h1>
	 <h4><a href="index.html" style="color:white;float:left">logout</a></h4>
  </header>
  
  <div id="navigation">
      <ul>
	    <li><a href="creat_ticket_form.php">Back </a></li>
        <li><a href="main_menu.php">Main Menu </a></li>
      </ul>
    </div>
	<br>
  <section id="maincontent">
  	<div id="container2">
  		<h4><a href="main_menu.php" style ="color:white">Serial number/ticket number not found on our database,click to return to main menu.</a></h4>

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