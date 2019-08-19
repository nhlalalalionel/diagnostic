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
  	<h1>UPLOAD JOB CARD</h1>
	 <h4><a href="index.html" style="color:white;float:left">logout</a></h4>
  </header>
  
  <div id="navigation">
      <ul>
        <li><a href="main_menu.php">Main Menu</a></li>
      </ul>
    </div>
	<br>
  <section id="maincontent">
  	<div id="container">
  		<div id="tabbox">  	  			
        <a href="#" id="signin" class="tab select">UPLOAD</a>
      
  		</div>
  		<div id="formpanel">
  			<div id="signinbox">
			<?php
			 $ticket=$_GET['ticket'];
			 $_SESSION['ticket']=$ticket;
			?>
  		    <form action="upload.php" id="signinform" method="post" enctype="multipart/form-data">
			<label for="username">Description</label>
            <textarea type="text" rows="5" name="description" id="name" class="txtfield" tabindex="4" autocomplete="off" style ="width:300px; height:50px" placeholder="Enter the description here" required></textarea>
			
            <input type="file" name="myFile" required pattern=".+?(?:[\s'].+?)/"> 
			
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