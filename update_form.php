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
  $_SESSION['ticket']=$_GET['ticket'];
  if (!isset($_SERVER['HTTP_REFERER'])){
   header('Location: index.html');
  
   }
  ?>
</head>
<body>
  <header id="header">
   <h4 style="color:white;float:left"> <?php echo "Welcome  : "  .$_SESSION['firstname']?> </h4>
  	<h1>UPDATE TICKET</h1>
	 <h4><a href="index.html" style="color:white;float:left">logout</a></h4>
  </header>
  
  <div id="navigation">
      <ul>
        <li><a href="main_menu.php">Main Menu </a></li>
      </ul>
    </div>
	<br>
  <section id="maincontent">
  	<div id="container">
  		<div id="tabbox">  	  			
        <a href="#" id="signin" class="tab select">UPDATE TICKET</a>
      
  		</div>
  		<div id="formpanel">
  			<div id="signinbox">
			
  		    <form action="ticket2.php" id="signinform"method="post">
			
			<label for="username">NOTES </label>
            <textarea  type="text" rows="5" id="description" name="updates" style ="width:300px; height:50px" name="model" id="contact" class="txtfield" tabindex="4" autocomplete="off"></textarea>
			
			<label for="username">DO YOU WANT TO CLOSE THIS TICKET? </label>       
			<input type="radio" id="yes" name="status" value="yes" checked> <label for="yes">Yes</label>
	        <input type="radio" id="no" name="status" value="no" checked> <label for="no">No</label>
			
            <input type="submit" name="loginbtn" id="submitlogin" value="SUBMIT" class="btn" tabindex="3">
  				</form>
  			</div>
  		</div>
  	</div>
  </section>  <footer id="footer">
  	<p>DEVELOPED BY LIONEL AND DESIGNED BY MSQ DIAGNOSTICS TEAM</p>
  </footer>
</body>
</html>