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
  	<h1>SPARE USED</h1>
	 <h4><a href="index.html" style="color:white;float:left">logout</a></h4>
  </header>
  
  <div id="navigation">
      <ul>
        <li><a href="main_menu.php">Main Menu</a></li>
        <li><a href="downloads.php">User ID </a></li>
        <li><a href="open_ticket.php">Open Ticket</a></li>
        <li><a href="creat_ticket_form.php">Create Ticket</a></li>
      </ul>
    </div>
	<br>
  <section id="maincontent">
  	<div id="container">
  		<div id="tabbox">  	  			
        <a href="#" id="signin" class="tab select">Client</a>
  		</div>
  		<div id="formpanel">
  			<div id="signinbox">
  		    <form action="delete_client.php" id="signinform"method="post">
			<label for="username">User ID </label>
            <input type="text" name="id" id="name" class="txtfield" tabindex="4" autocomplete="off">         
            <input type="submit" name="loginbtn" id="submitlogin" value="SUBMIT" class="btn" tabindex="3">
  			</form>
  			</div>
			
  			<div id="signupbox">
  			<form action="reg_machine.php" id="signupform"method="post">
  			<label for="username">User ID</label>
            <input type="text" name="id" id="id" class="txtfield" tabindex="4" autocomplete="off">
      
            <input type="submit" name="registerbtn" id="registerbtn" value="SUBMIT" class="btn" tabindex="9">
  			</form>
  			</div>
  		</div>
  	</div>
  </section>  <footer id="footer">
  	<p>DEVELOP BY LIONEL, DESIGNED BY MSQ DIAGNOSTICS TEAM</p>
  </footer>
</body>
</html>