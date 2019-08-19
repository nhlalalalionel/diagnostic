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
  	<h1>ENGINEER REGISTRATION</h1>
	 <h4><a href="index.html" style="color:white;float:left">logout</a></h4>
  </header>
  
  <div id="navigation">
      <ul>
        <li><a href="">Client </a></li>
        <li><a href="">User ID </a></li>
        <li><a href="#">Openticket</a></li>
        <li><a href="#">Closeticket</a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
      </ul>
    </div>
	<br>
  <section id="maincontent">
  	<div id="container">
  		<div id="tabbox">  	  			
        <a href="#" id="signin" class="tab select">ENGINEER</a>
  		</div>
  		<div id="formpanel">
  			<div id="signinbox">
			
  		    <form action="registration.php" id="signinform"method="post">
			
			<label for="username">First Name </label>
            <input type="text" name="name" id="name" class="txtfield" tabindex="4" autocomplete="off">
			
			<label for="username">Last Name </label>
            <input type="text" name="surname" id="contact" class="txtfield" tabindex="4" autocomplete="off">
			
			<label for="email">Contact phone</label>
            <input type="tel" name="tel" id="tel" class="txtfield" tabindex="1" autocomplete="off">
			
			<label for="password">Role </label>
            <select type="text" name="role" id="address" class="txtfield" tabindex="2" autocomplete="off"> 
		    <option value="role" >Please select your role</option>
              <option>user</option>
              <option>admin</option>
            </select>
  			<label for="email">Email Address</label>
            <input type="email" name="email" id="email" class="txtfield" tabindex="1" autocomplete="off">
		          
            <label for="password1">Password</label>
            <input type="password" name="password1" id="password1" class="txtfield" tabindex="6"  autocomplete="off">
         
            <label for="password2">Confirm Password</label>
            <input type="password" name="password2" id="password2" class="txtfield" tabindex="7" autocomplete="off">          
            
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