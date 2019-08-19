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
  	<h1>CLIENT AND MACHINE REGISTRATION</h1>
	 <h4><a href="index.html" style="color:white;float:left">logout</a></h4>
  </header>
  <div id="navigation">
      <ul>
        <li><a href="main_menu.php">Main Menu</a></li>
        <li><a href="downloads.php">User ID </a></li>
        <li><a href="open_ticket.php">Open Ticket</a></li>
        <li><a href="creat_ticket_form.php">Create Ticket</a></li>
        <li><a href="all_ticket.php"> All Ticket</a></li>
        <li><a href="update_client_form.php">Update Client</a></li>
		<li><a href="delete_client_form.php">Delete Client</a></li>
		<li><a href="all_machine.php">All Machine</a></li>
		<li><a href="reallocate_form.php">Reallocation</a></li>
      </ul>
    </div>
	
	<br>
  <section id="maincontent">
  	<div id="container">
  		<div id="tabbox">  	  			
        <a href="#" id="signin" class="tab select">Client</a>
        <a href="#" id="signup" class="tab signup">Machine</a>
  		</div>
  		<div id="formpanel">
  			<div id="signinbox">
			
  		    <form action="reg_client.php" id="signinform"method="post">
			
			<label for="username">Client Name </label>
            <input type="text" name="name" id="name" class="txtfield" tabindex="4" autocomplete="off">
			
			<label for="username">Contact Person </label>
            <input type="text" name="contact" id="contact" class="txtfield" tabindex="4" autocomplete="off">
			
			<label for="email">Client phone</label>
            <input type="tel" name="tel" id="tel" class="txtfield" tabindex="1" autocomplete="off">
			
		  
  			<label for="email">Email Address</label>
            <input type="email" name="email" id="email" class="txtfield" tabindex="1" autocomplete="off">
		          
            <label for="password">Residential Address </label>
            <input type="text" name="address" id="address" class="txtfield" tabindex="2" autocomplete="off">           
            
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
  	<p>DEVELOPED BY LIONEL AND DESIGNED BY MSQ DIAGNOSTICS TEAM</p>
  </footer>
</body>
</html>