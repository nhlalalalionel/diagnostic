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
 
  	<h1>MAIN MENU</h1>
	 <h4><a href="index.html" style="color:white;float:left">logout</a></h4>
  </header>
  <div id="navigation">
      <ul>
        <li><a href="reg_client_form.php">Client </a></li>
        <li><a href="creat_ticket_form.php">Create Ticket </a></li>
        <li><a href="open_ticket.php">Open Ticket</a></li>
        <li><a href="all_ticket.php">All Ticket</a></li>
        <li><a href="search_ticket_form.php">Search Ticket</a></li>
		<li><a href="upload_process2.php">Upload File</a></li>
		<li><a href="download_file.php">Download File</a></li>
		<li><a href="deletefile.php">Delete File</a></li>
      </ul>
    </div>
	<br>
	<br>
  <section id="maincontent">
  <div id="container2">
  <br>
  <br>
	<div id ="right_container">
 <marquee scrollamount="10"
 direction="left"
 behavior="scroll">

</div>
	WELLCOME TO MSQ DIAGNOSTICS...
<img src="images/medical.jpg" height = '350px'/>
</marquee>
	
	
	</div>
  </section>  <footer id="footer">
  	<p>DEVELOPED BY LIONEL AND DESIGNED BY MSQ DIAGNOSTICS TEAM</p>
  </footer>
</body>
</html>