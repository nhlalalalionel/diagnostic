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
  <header id="header2">
   <h4 style="color:white;float:left"> <?php echo "Welcome  : "  .$_SESSION['firstname']?> </h4>
  	<h1>CLIENT AND MACHINE REGISTRATION</h1>
	 <h4><a href="index.html" style="color:white;float:left">logout</a></h4>
  </header>
  
  <div id="navigation2">
      <ul>
        <li><a href="main_menu.php">Main Menu</a></li>
        <li><a href="downloads.php">User ID </a></li>
        <li><a href="open_ticket.php">Open Ticket</a></li>
        <li><a href="all_ticket.php"> All Ticket</a></li>
      </ul>
    </div>
	<br>
  <section id="maincontent">
  <br><br><br><br>
  	<div id="container2">
  		<?php


include'connection.php';

$serial = $_POST['serial'];
$_SESSION["serial"]=$serial;

 $sql1 = "SELECT * FROM machine WHERE serial ='$serial'";
 $result=$conn->query($sql1);
 
if($result->num_rows>0){
		//
$row = $result->fetch_assoc();
     $id=$row['id'];
     $_SESSION["id"]=$id;
  $sql2 = "SELECT * FROM client WHERE id ='$id'";
  $result2=$conn->query($sql2);
  $row2 = $result2->fetch_assoc();
  
  $_SESSION['id']=$id;
  
?>
<h4><a href="#" style ="color:white">Complete the below form to create the ticket.</a></h4>
    
    <div style="overflow-x:auto">
	<table width="100%" border="1">
	<tr>
    <td><h3>Client name</h3></td>	 
    <td><h3>Address</h3></td>
	 <td><h3>Serial Number</h3></td>
    <td><h3>Contact</h3></td>
	<td><h3>Model</h3></td>
    </tr>
	
	<tr>
        <td><?php echo $row2["name"] ?></td>
        <td><?php echo  $row2["address"]?></td>
		<td><?php echo $row["serial"]?></td>
        <td><?php echo $row2["phone"] ?></td>
		<td><?php echo $row["model"]?></td> 
    </tr>
	
	</table>
	</div>
<?php	
}else{
	
header("Location:serial_not.php");

}
?>

<div id="container2">
  <div id="tabbox">  	  			
      <a href="#" id="signin" class="tab select4"></a>
       
  		</div>
  		<div id="formpanel">
  			<div id="signinbox">
  		    <form action="ticket.php" id="signinform"method="post">
			
			<label for="username">Reporter </label>
            <input type="text" name="reporter" id="name" class="txtfield" tabindex="4" autocomplete="off">
			
			<label for="username">Problem </label>
            <textarea  type="text" rows="5" id="description" name="problem" style =" height:50px" name="model" id="contact" class="txtfield" tabindex="4" autocomplete="off"></textarea>
			
            <input type="submit" name="loginbtn" id="submitlogin" value="CREATE" class="btn" tabindex="3">
  				</form>
  			</div>
  	
  		</div>
</div>
  	</div>
  </section>  <footer id="footer">
  	<p>DEVELOP BY LIONEL, DESIGNED BY MSQ DIAGNOSTICS TEAM</p>
  </footer>
</body>
</html>