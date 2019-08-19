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
        <li><a href="all_ticket.php"> All Ticket</a></li>
      </ul>
    </div>
	<br>
  <section id="maincontent">
  	<div id="container2">
  		<?php
 include'connection.php';
 
 $ticket = $_POST['ticket'];
 $_SESSION['ticket']=$ticket;
 $x=NULL;

 $sql1 = "SELECT * FROM spare WHERE ticket ='$ticket' && number ='$x'";
 $result=$conn->query($sql1);
if($result->num_rows>0){

header("Location:update_spare2.php");	
}else{
	
header("Location:spare_notsuccess.php");

}
?>
  </div>
  </section>  <footer id="footer">
  	<p>DEVELOPED BY LIONEL AND DESIGNED BY MSQ DIAGNOSTICS TEAM</p>
  </footer>
</body>
</html>