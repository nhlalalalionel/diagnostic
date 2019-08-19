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
  	<h1>ALLOCATING MACHINE TO DIFFERENT CLIENT</h1>
	 <h4><a href="index.html" style="color:white;float:left">logout</a></h4>
  </header>
  
  <div id="navigation">
      <ul>
        <li><a href="reg_client_form.php">Back </a></li>
      </ul>
    </div>
	<br>
	
	
  <section id="maincontent">
  	<div id="container2">
	<?php
	include'connection.php';
	$id=$_GET['id'];
	
	$_SESSION['id']=$id;
	$serial=$_SESSION['serial'];
	
	 $sql1 = "SELECT * FROM client WHERE id ='$id'";
	 $result=$conn->query($sql1);
		 
   ?>
 <h4> Please <a href="machine_change_success.php" style ="color:white">click here</a> to confirm the below</h4><br> 
    <div style="overflow-x:auto;">
    <table width="100%" border="1">
    <tr>
    <td><h3>Client name</h3></td>	 
    <td><h3>Client Address</h3></td>
    <td><h3>Client Phone</h3></td>
	<td><h3>Machine serial #</h3></td>
    </tr>
	
    <?php
 if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	?>	
		<tr>
        <td><?php echo $row['name'] ?></td>
		<td><?php echo $row['address'] ?></td>
		<td><?php echo $row['phone'] ?></td>
		<td><?php echo $serial ?></td>
        </tr>
        <?php
    }
	
	?>
	</table>
	</div>
	<?php
} else {
    header("Location:no_record.php");
}
 
	?>
  	</div>
  </section>  <footer id="footer">
  	<p>DEVELOPED BY LIONEL AND DESIGNED BY MSQ DIAGNOSTICS TEAM</p>
  </footer>
</body>
</html>