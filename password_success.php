<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale">
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
  	<h1>PASSWORD RETRIEVE</h1>
  </header>
  <div id="navigation">
      <ul>
      </ul>
    </div>
	<br>
	<br>
  <section id="maincontent">
  <br>
  <div id="container">
  <h4><a href="index.html" style ="color:white">Your password has been sent to your email address, please click here to login.!</a></h4>
  
	<div id ="right_container">
 <marquee scrollamount="10"
 direction="left"
 behavior="scroll">

</div>
<img src="images/medical.jpg" height = '300px'/>
</marquee>
	
	</diV>
	
  </section>  <footer id="footer">
  	<p>DEVELOPED BY LIONEL AND DESIGNED BY MSQ DIAGNOSTICS TEAM</p>
  </footer>
</body>
</html>