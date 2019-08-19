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
  	<h1>INCORRECT USERNAME/PASSWORD</h1>
  </header>
  
  <div id="navigation">
      <ul>
      </ul>
    </div>
	<br>
  <section id="maincontent">
  	<div id="container2">
  		<h4><a href="index.html" style = "color:white">The username or password is incorrect, please click here to try again...!</a></h4>
	
	 <marquee scrollamount="10"
 direction="left"
 behavior="scroll">


	 MSQ DIAGNOSTICS...
<img src="images/medical.jpg" height = '200px'/>
</marquee>
  	</div>
  </section>  <footer id="footer">
  	<p>DEVELOPED BY LIONEL AND DESIGNED BY MSQ DIAGNOSTICS TEAM</p>
  </footer>
</body>
</html>