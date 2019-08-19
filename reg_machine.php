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
  	<h1>MACHINE REGISTRATION</h1>
	 <h4><a href="index.html" style="color:white;float:left">logout</a></h4>
  </header>
  
  <div id="navigation">
      <ul>
        <li><a href="main_menu.php">Main Menu </a></li>
      </ul>
    </div>
	<br>
  <section id="maincontent">
  	<div id="container2">
    <?php


include'connection.php';

$user_id = $_POST['id'];


// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
 
// Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


 $sql1 = "SELECT * FROM client WHERE id ='$user_id'";

 
$result=$conn->query($sql1);
if($result->num_rows>0){
	
	//
$row = $result->fetch_assoc();
 $_SESSION["id"]=$row['id'];
?>
<h4 style ="color:white ;text-align:center">The machine will be install on the below client, please fill the below form to complete..</h4>
<?php
?>
    <div style="overflow-x:auto;">
	<table width="100%" border="1">
	<tr>
    <td><h3>Client name</h3></td>	 
    <td><h3>Contact</h3></td>
	 <td><h3>Email</h3></td>
    <td><h3>Phone</h3></td>
	<td><h3>Address</h3></td>
    </tr>
	
	<tr>
        <td><?php echo $row["name"] ?></td>
        <td><?php echo $row["contact"]?></td>
		<td><?php echo $row["email"]?></td>
        <td><?php echo $row["phone"] ?></td>
		<td><?php echo $row["address"]?></td> 
    </tr>
	
	</table>
	</div>
<?php	
}else{
	
header("Location:id_notexist.php");

}
?>
<div id="container2">
  <div id="tabbox">  	  			
      <a href="#" id="signin" class="tab select4"></a>
       
  		</div>
  		<div id="formpanel">
  			<div id="signinbox">
  		    <form action="reg_machine2.php" id="signinform"method="post">
			
			<label for="username">Device Name</label>
            <input type="text" name="name" id="surname" class="txtfield" tabindex="4" autocomplete="off">
			
			<label for="username">Serial Number </label>
            <input type="text" name="serial" id="name" class="txtfield" tabindex="4" autocomplete="off">
			
			<label for="username">Model Number </label>
            <input type="text" name="model" id="contact" class="txtfield" tabindex="4" autocomplete="off">
			         
            <input type="submit" name="loginbtn" id="submitlogin" value="SUBMIT" class="btn" tabindex="3">
  				</form>
  			</div>
  	
  		</div>
</div>
	
  	</div>
  </section>  <footer id="footer">
  	<p>DEVELOPED BY LIONEL AND DESIGNED BY MSQ DIAGNOSTICS TEAM</p>
  </footer>
</body>
</html>